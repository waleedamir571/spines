jQuery(function($) {
    // Single flag to track if Plaid Link is completed
    var plaidLinkCompleted = false;
    var plaidHandler = null;
    var isPlaidInitialized = false;
    
    // Check for stored account immediately on page load
    checkStoredBankAccount();
    
    // Clear any potentially invalid tokens on OAuth return
    if (checkForOAuthReturn()) {
        localStorage.removeItem('plaid_link_token');
    }

    /**
     * Check for stored bank account
     * Returns true if a stored account was found and loaded
     */
    function checkStoredBankAccount() {
        var storedAccount = JSON.parse(localStorage.getItem('plaid_linked_account') || 'null');
        if (storedAccount) {
            // Check if the stored account is older than 24 hours
            var linkedAt = new Date(storedAccount.linked_at);
            var now = new Date();
            var hoursDiff = (now - linkedAt) / (1000 * 60 * 60);
            
            if (hoursDiff > 24) {
                localStorage.removeItem('plaid_linked_account');
                plaidLinkCompleted = false;
                return false;
            }

            // Populate form fields
            $('#plaid_public_token').val(storedAccount.public_token);
            $('#plaid_account_id').val(storedAccount.account_id);
            
            // Update UI
            updateUIForLinkedAccount(storedAccount.mask, storedAccount.name);
            
            plaidLinkCompleted = true;
            return true;
        }
        
        plaidLinkCompleted = false;
        return false;
    }
    
    /**
     * Update UI to show linked bank account
     */
    function updateUIForLinkedAccount(mask, bankName) {
        // Update button state
        var $button = $('#plaid-link-button');
        $button.text('Bank Account Linked').prop('disabled', true).addClass('account-linked');
        
        // Add account info and relink option
        if (!$('#plaid-linked-info').length) {
            var accountInfo = '';
            if (bankName) {
                accountInfo = bankName;
                if (mask) {
                    accountInfo += ' ••••' + mask;
                }
            } else if (mask) {
                accountInfo = '••••' + mask;
            } else {
                accountInfo = 'Account linked';
            }
            
            var relinkHtml = '<div id="plaid-linked-info">' +
                '<div class="plaid-account-info">' + accountInfo + '</div>' +
                '<a href="#" id="plaid-relink-account">Change account</a>' +
                '</div>';
            $('#plaid-link-button-container').append(relinkHtml);
        }
    }

    /**
     * Refresh Link Token via AJAX
     */
    function refreshLinkToken() {
        // Show loading state
        $('#plaid-link-button').find('.plaid-button-loading').show();
        $('#plaid-link-button').find('.plaid-button-text').hide();
        
        return $.ajax({
            url: wc_plaid_params.ajax_url,
            type: 'POST',
            data: {
                action: 'refresh_plaid_link_token',
                nonce: wc_plaid_params.nonce
            }
        }).always(function() {
            // Hide loading state
            $('#plaid-link-button').find('.plaid-button-loading').hide();
            $('#plaid-link-button').find('.plaid-button-text').show();
        });
    }

    /**
     * Create Plaid Link handler
     */
    function createPlaidHandler(receivedRedirectUri) {
        if (typeof Plaid === 'undefined') {
            console.error('Plaid library is not loaded.');
            return null;
        }

        // Get link token
        var storedLinkToken = localStorage.getItem('plaid_link_token');
        var linkToken = storedLinkToken || wc_plaid_params.link_token;

        if (!storedLinkToken) {
            localStorage.setItem('plaid_link_token', linkToken);
            localStorage.setItem('plaid_link_token_expiry', Date.now() + (4 * 60 * 60 * 1000));
        }

        // Create config
        var config = {
            token: linkToken,
            onSuccess: function(public_token, metadata) {
                console.log('Plaid Link success');
                
                // Get account info
                var account = metadata.account;
                var accountId = account.id;
                var mask = account.mask || '';
                var name = metadata.institution ? metadata.institution.name : '';
                
                // Save to localStorage for persistence
                localStorage.setItem('plaid_linked_account', JSON.stringify({
                    public_token: public_token,
                    account_id: accountId,
                    mask: mask,
                    name: name,
                    linked_at: new Date().toISOString()
                }));
                
                // Update hidden fields
                $('#plaid_public_token').val(public_token);
                $('#plaid_account_id').val(accountId);
                
                // Update UI
                updateUIForLinkedAccount(mask, name);
                
                // Mark as completed
                plaidLinkCompleted = true;
                
                console.log('Plaid data ready for submission');
            },
            onExit: function(err, metadata) {
                if (err && err.error_code === 'INVALID_LINK_TOKEN') {
                    console.log('Link token expired, refreshing...');
                    localStorage.removeItem('plaid_link_token');
                    localStorage.removeItem('plaid_link_token_expiry');
                    
                    refreshLinkToken().then(function(response) {
                        if (response.success && response.data.link_token) {
                            localStorage.setItem('plaid_link_token', response.data.link_token);
                            localStorage.setItem('plaid_link_token_expiry', Date.now() + (4 * 60 * 60 * 1000));
                            plaidHandler = createPlaidHandler(window.location.href);
                            plaidHandler.open();
                        } else {
                            console.error('Failed to refresh link token');
                            alert('There was an issue connecting to your bank. Please try again or select another payment method.');
                        }
                    });
                }
            },
            selectAccount: true
        };

        // Handle OAuth return
        if (receivedRedirectUri) {
            config.receivedRedirectUri = receivedRedirectUri;
            console.log('OAuth return detected');
        }

        // Create handler
        var handler = Plaid.create(config);
        
        // Cleanup
        $(window).off('beforeunload.plaid').on('beforeunload.plaid', function() {
            if (handler) {
                handler.exit();
            }
        });

        return handler;
    }

    /**
     * Check if returning from OAuth
     */
    function checkForOAuthReturn() {
        var urlParams = new URLSearchParams(window.location.search);
        return urlParams.has('oauth_state_id') || 
               urlParams.has('public_token') || 
               urlParams.get('error') === 'oauth';
    }

    /**
     * Initialize Plaid if selected
     */
    function initPlaidIfSelected() {
        var selectedPaymentMethod = $('input[name="payment_method"]:checked').val();
        if (selectedPaymentMethod === 'plaid_gateway') {
            // Check for stored account
            var hasStoredAccount = checkStoredBankAccount();
            
            // Initialize Plaid Link
            if (!isPlaidInitialized) {
                var isOAuthReturn = checkForOAuthReturn();
                plaidHandler = createPlaidHandler(
                    isOAuthReturn ? window.location.href : null
                );
                isPlaidInitialized = true;
                
                // Auto-open if returning from OAuth with no account
                if (isOAuthReturn && !hasStoredAccount && plaidHandler) {
                    plaidHandler.open();
                }
            }
        } else {
            // Clean up if another payment method is selected
            if (plaidHandler) {
                plaidHandler.exit();
                plaidHandler = null;
            }
            isPlaidInitialized = false;
            
            // Reset UI
            $('#plaid-link-button').text('Link Bank Account').prop('disabled', false).removeClass('account-linked');
            $('#plaid-linked-info').remove();
        }
    }

    /**
     * Key Event Listeners
     */

    // 1. Listen for payment method changes
    $(document.body).on('change', 'input[name="payment_method"]', function() {
        initPlaidIfSelected();
    });

    // 2. Listen for checkout updates
    $(document.body).on('updated_checkout applied_coupon removed_coupon update_checkout checkout_error', function() {
        setTimeout(function() {
            var selectedPaymentMethod = $('input[name="payment_method"]:checked').val();
            if (selectedPaymentMethod === 'plaid_gateway') {
                checkStoredBankAccount();
                
                if (!isPlaidInitialized) {
                    initPlaidIfSelected();
                }
            }
        }, 100);
    });

    // 3. Plaid Link button click
    $(document.body).on('click', '#plaid-link-button', function(e) {
        e.preventDefault();
        if (plaidHandler) {
            plaidHandler.open();
        } else {
            initPlaidIfSelected();
            if (plaidHandler) plaidHandler.open();
        }
    });
    
    // 4. Relink option click
    $(document.body).on('click', '#plaid-relink-account', function(e) {
        e.preventDefault();
        if (plaidHandler) {
            plaidHandler.open();
        } else {
            initPlaidIfSelected();
            if (plaidHandler) plaidHandler.open();
        }
    });
    
    // 5. Form submission handler for Plaid Gateway
    $(document.body).on('checkout_place_order_plaid_gateway', function() {
        var storedAccount = JSON.parse(localStorage.getItem('plaid_linked_account') || 'null');
        
        if (!storedAccount) {
            console.log('No stored account found - preventing form submission');
            if (plaidHandler) {
                plaidHandler.open();
            } else {
                initPlaidIfSelected();
                if (plaidHandler) plaidHandler.open();
            }
            return false;
        }
        
        // Ensure fields are populated
        $('#plaid_public_token').val(storedAccount.public_token);
        $('#plaid_account_id').val(storedAccount.account_id);
        
        // Let the form submit
        return true;
    });

    // Initialize on page load
    initPlaidIfSelected();
});