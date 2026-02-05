/**
 * Mobile Checkout JavaScript
 *
 * Handles accordion behavior, validation, and checkmark logic for mobile checkout
 */

(function($) {
	'use strict';

	// Only run on mobile devices
	if ( window.innerWidth > 992 ) {
		return;
	}

	const MobileCheckout = {

		/**
		 * Initialize mobile checkout functionality
		 */
		init: function() {
			this.setupAccordion();
			this.setupValidation();
			this.setupConfirmButton();
			this.animateChosenPaymentMethod();
			this.setupPlaceOrderButtons();
			this.setupNativePaymentTriggers();
			this.setInitialStates();
			this.bindEvents();
		},

		/**
		 * Setup accordion click handlers
		 */
		setupAccordion: function() {
			$( document ).on( 'click', '.checkout-section-header', function() {
				$( this ).toggleClass( 'active' );

				const $section = $( this ).closest( '.checkout-section-container' ).find( '.checkout-section' );
				const sectionName = $section.data( 'section' );

				// Don't allow collapsing if section is not valid (except order summary)
				if ( sectionName !== 'order-summary' && $section.hasClass( 'expanded' ) && ! $section.hasClass( 'valid' ) ) {
					return;
				}

				MobileCheckout.toggleSection( $section );
			} );
		},

		/**
		 * Toggle section expand/collapse
		 */
		toggleSection: function( $section ) {
			const isExpanded = $section.is( ':visible' );

			if ( isExpanded ) {
				$section.slideUp( 'slow' );
			} else {
				$section.slideDown( 'slow', function () {
                    const isPaymentMethod = $section.data('section') === 'payment-method';

                    if ( isPaymentMethod ) {
                        const $paymentSection = $( 'input[name="payment_method"]:checked' );

                        $( 'html, body' ).animate( {
                            scrollTop: $paymentSection.offset().top - 20
                        }, 300 );
                    }
                } );
			}

			/*
			const isExpanded = $section.hasClass( 'expanded' );

			if ( isExpanded ) {
				$section.removeClass( 'expanded' ).addClass( 'collapsed' );
			} else {
				// Collapse all other sections
				$( '.checkout-section' ).removeClass( 'expanded' ).addClass( 'collapsed' );
				// Expand clicked section
				$section.removeClass( 'collapsed' ).addClass( 'expanded' );
			}
			*/
		},

		/**
		 * Set initial section states
		 */
		setInitialStates: function() {
			// Order Summary - collapsed by default, always valid
			const $orderSummary = $( '.checkout-section[data-section="order-summary"]' );
			$orderSummary.parent().addClass( 'expanded valid' );

			// Billing Info - expanded by default
			const $billingInfo = $( '.checkout-section[data-section="billing-info"]' );
			$billingInfo.parent().addClass( 'expanded' );

			// Payment Method - collapsed by default
			const $paymentMethod = $( '.checkout-section[data-section="payment-method"]' );
			$paymentMethod.parent().addClass( 'collapsed' );

			// Check initial validation states
			this.validateOrderSummary();
			this.validateBillingInfo();
			//this.validatePaymentMethod();
		},

		/**
		 * Setup real-time validation
		 */
		setupValidation: function() {
			const self = this;

			// Validate on field change
			$( document ).on( 'change input', '.woocommerce-billing-fields input, .woocommerce-billing-fields select', function() {
				setTimeout( function() {
					self.validateBillingInfo();
				}, 100 );
			} );

			// Validate on payment method selection
			$( document ).on( 'change', 'input[name="payment_method"]', function() {
				//self.validatePaymentMethod();
			} );

			// Listen to WooCommerce events
			$( document.body ).on( 'updated_checkout', function() {
				self.validateOrderSummary();
				self.validateBillingInfo();
				//self.validatePaymentMethod();
			} );

			$( document.body ).on( 'checkout_error', function() {
				self.validateBillingInfo();
				//self.validatePaymentMethod();
			} );
		},

		/**
		 * Validate Order Summary section
		 */
		validateOrderSummary: function() {
			const $section = $( '.checkout-section[data-section="order-summary"]' );
			// Order summary is always valid
			$section.addClass( 'valid completed' );
		},

		/**
		 * Validate Billing Info section
		 */
		validateBillingInfo: function() {
			const $section = $( '.checkout-section[data-section="billing-info"]' );
			const requiredFields = [
				'billing_first_name',
				'billing_last_name',
				'billing_email',
				'billing_country',
				'billing_address_1',
				'billing_city',
				'billing_state',
				'billing_postcode'
			];

			let isValid = true;

			// Check each required field
			for ( let i = 0; i < requiredFields.length; i++ ) {
				const fieldName = requiredFields[i];
				const $field = $( '#' + fieldName );

				const isLength = $field.length > 0;

				if ( $field.length > 0 ) {
					const value = $field.val();

					// Check if field is visible (some fields might be hidden based on country)
					if ( $field.is( ':visible' ) ) {
						if ( ! value || value.trim() === '' ) {
							isValid = false;
							break;
						}

						// Email validation
						if ( fieldName === 'billing_email' ) {
							const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
							if ( ! emailRegex.test( value ) ) {
								isValid = false;
								break;
							}
						}
					}
				}
			}

			if ( isValid ) {
				$section.addClass( 'valid completed' );
			} else {
				$section.removeClass( 'valid completed' );
			}

			return isValid;
		},

		/**
		 * Validate Payment Method section
		 */
		validatePaymentMethod: function() {
			const $section = $( '.checkout-section[data-section="payment-method"]' );
			const selectedPaymentMethod = $( 'input[name="payment_method"]:checked' ).val();

			if ( selectedPaymentMethod ) {
				$section.parent().addClass( 'valid completed' );
			} else {
				$section.parent().removeClass( 'valid completed' );
			}

			return !! selectedPaymentMethod;
		},

		/**
		 * Setup Confirm button for Billing Info
		 */
		setupConfirmButton: function() {
			const self = this;

			$( document ).on( 'click', '.btn-confirm-billing', function( e ) {
				e.preventDefault();

				const $button = $( this );
				const $section = $( '.checkout-section[data-section="billing-info"]' );

				// Prevent double clicks
				if ( $button.hasClass( 'loading' ) ) {
					return;
				}

				// Validate billing fields
				const isValid = self.validateBillingInfo();

				if ( isValid ) {
					// Add loading state
					$button.addClass( 'loading' );

					// Mark section as valid
					$section.parent().addClass( 'valid completed' );

					// Collapse Billing Info
					$section.removeClass( 'expanded' ).addClass( 'collapsed' );
					$section.slideUp( 'slow' );

					// Expand Payment Method
					const $paymentSection = $( '.checkout-section[data-section="payment-method"]' );
					$paymentSection.removeClass( 'collapsed' ).addClass( 'expanded' );
					$paymentSection.slideDown( 'slow' );

					// Scroll to payment section
					setTimeout( function() {
						$( 'html, body' ).animate( {
							scrollTop: $paymentSection.offset().top - 20
						}, 300 );

						$button.removeClass( 'loading' );
					}, 300 );
				} else {
					// Show validation errors
					self.showBillingValidationErrors();

					// Scroll to first error
					const $firstError = $( '.woocommerce-billing-fields .woocommerce-invalid:first' );
					if ( $firstError.length > 0 ) {
						$( 'html, body' ).animate( {
							scrollTop: $firstError.offset().top - 100
						}, 300 );
					}
				}
			} );
		},

        /**
         * Setup payment method animation
         */
        animateChosenPaymentMethod: function() {
            $( document ).on( 'change', 'input[name="payment_method"]', function() {
                const $input = $( this );

                if ( $input.length > 0 ) {
                    $( 'html, body' ).animate( {
                        scrollTop: $input.offset().top + 50
                    }, 300 );
                }
            });
        },

		/**
		 * Show validation errors for billing fields
		 */
		showBillingValidationErrors: function() {
			const requiredFields = [
				{ id: 'billing_first_name', label: 'First name' },
				{ id: 'billing_last_name', label: 'Last name' },
				{ id: 'billing_email', label: 'Email address' },
				{ id: 'billing_country', label: 'Country' },
				{ id: 'billing_address_1', label: 'Street address' },
				{ id: 'billing_city', label: 'City' },
				{ id: 'billing_state', label: 'State' },
				{ id: 'billing_postcode', label: 'ZIP' }
			];

			// Remove existing error markers
			$( '.woocommerce-billing-fields .form-row' ).removeClass( 'woocommerce-invalid' );

			// Check and mark invalid fields
			requiredFields.forEach( function( field ) {
				const $field = $( '#' + field.id );

				if ( $field.length > 0 && $field.is( ':visible' ) ) {
					const value = $field.val();

					if ( ! value || value.trim() === '' ) {
						$field.closest( '.form-row' ).addClass( 'woocommerce-invalid' );
					} else if ( field.id === 'billing_email' ) {
						const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
						if ( ! emailRegex.test( value ) ) {
							$field.closest( '.form-row' ).addClass( 'woocommerce-invalid' );
						}
					}
				}
			} );
		},

		/**
		 * Setup Place Order buttons inside payment methods
		 */
		setupPlaceOrderButtons: function() {
			// The buttons are already in the HTML from payment.php template
			// Just ensure they work properly with WooCommerce checkout

			// No additional setup needed - buttons will submit the form naturally

            $( document ).on( 'click', '.mobile-place-order-btn', function() {
                $( '#place_order' ).trigger( 'click' );
            } );
		},

        /**
         * Setup trigger buttons for native payment methods (Google Pay, Apple Pay, PayPal)
         */
        setupNativePaymentTriggers: function() {
            const self = this;

            // Click handler for fake "Place Order" button for methods with their own buttons
            $( document ).on( 'click', '.trigger-native-payment', function( e ) {
                e.preventDefault();

                const $button = $( this );
                const gatewayId = $button.data( 'gateway' );

                console.log( 'Trigger button clicked for gateway:', gatewayId );

                // Show loading state
                $button.addClass( 'loading' );

                // Find and click the real native button
                let nativeButtonClicked = false;
                let $nativeButton = null;

                // Try multiple selectors for Google Pay
                const gpaySelectors = [
                    '.gpay-button-container button',
                    'button[id^="gpay-button"]',
                    '.gpay-button',
                    'button.gpay-button'
                ];

                for ( let i = 0; i < gpaySelectors.length; i++ ) {
                    $nativeButton = $( gpaySelectors[i] );
                    if ( $nativeButton.length > 0 ) {
                        console.log( 'Found Google Pay button with selector:', gpaySelectors[i] );

                        // Don't check visibility - button exists in DOM, we can click it programmatically
                        // even if it's hidden in collapsed Order Summary section
                        console.log( 'Clicking Google Pay button...' );

                        // Try native click
                        if ( $nativeButton[0] && typeof $nativeButton[0].click === 'function' ) {
                            $nativeButton[0].click();
                            nativeButtonClicked = true;
                            console.log( 'Google Pay button clicked successfully!' );
                            break;
                        }

                        // Fallback to jQuery click
                        $nativeButton.trigger( 'click' );
                        nativeButtonClicked = true;
                        console.log( 'Google Pay button triggered via jQuery!' );
                        break;
                    }
                }

                // Try Apple Pay (can be in iframe or shadow DOM)
                if ( ! nativeButtonClicked ) {
                    const applePaySelectors = [
                        'button.ApplePayButton',
                        '.apple-pay-button',
                        'apple-pay-button',
                        '[role="button"][aria-label*="Apple Pay"]'
                    ];

                    for ( let i = 0; i < applePaySelectors.length; i++ ) {
                        $nativeButton = $( applePaySelectors[i] );
                        if ( $nativeButton.length > 0 ) {
                            console.log( 'Found Apple Pay button with selector:', applePaySelectors[i] );
                            console.log( 'Clicking Apple Pay button...' );

                            if ( $nativeButton[0] && typeof $nativeButton[0].click === 'function' ) {
                                $nativeButton[0].click();
                                nativeButtonClicked = true;
                                console.log( 'Apple Pay button clicked successfully!' );
                                break;
                            }

                            $nativeButton.trigger( 'click' );
                            nativeButtonClicked = true;
                            console.log( 'Apple Pay button triggered via jQuery!' );
                            break;
                        }
                    }
                }

                // Try Stripe Payment Request wrapper (can contain both Google Pay and Apple Pay)
                if ( ! nativeButtonClicked ) {
                    $nativeButton = $( '#payment-request-button' );
                    if ( $nativeButton.length > 0 ) {
                        console.log( 'Found Stripe Payment Request button' );
                        console.log( 'Clicking Stripe Payment Request button...' );

                        if ( $nativeButton[0] && typeof $nativeButton[0].click === 'function' ) {
                            $nativeButton[0].click();
                            nativeButtonClicked = true;
                            console.log( 'Stripe Payment Request button clicked successfully!' );
                        } else {
                            $nativeButton.trigger( 'click' );
                            nativeButtonClicked = true;
                            console.log( 'Stripe Payment Request button triggered via jQuery!' );
                        }
                    }
                }

                // Try PayPal (if applicable)
                if ( ! nativeButtonClicked && ( gatewayId === 'paypal' || gatewayId === 'ppcp' ) ) {
                    const paypalSelectors = [
                        '.paypal-button',
                        '#paypal-button',
                        '[data-funding-source="paypal"]',
                        '.paypal-buttons'
                    ];

                    for ( let i = 0; i < paypalSelectors.length; i++ ) {
                        $nativeButton = $( paypalSelectors[i] );
                        if ( $nativeButton.length > 0 ) {
                            console.log( 'Found PayPal button with selector:', paypalSelectors[i] );
                            console.log( 'Clicking PayPal button...' );

                            if ( $nativeButton[0] && typeof $nativeButton[0].click === 'function' ) {
                                $nativeButton[0].click();
                                nativeButtonClicked = true;
                                console.log( 'PayPal button clicked successfully!' );
                                break;
                            }

                            $nativeButton.trigger( 'click' );
                            nativeButtonClicked = true;
                            console.log( 'PayPal button triggered via jQuery!' );
                            break;
                        }
                    }
                }

                // If button not found - remove loading and show error
                if ( ! nativeButtonClicked ) {
                    console.warn( 'Native payment button not found for gateway:', gatewayId );
                    console.log( 'Available buttons in document:', $( 'button' ).length );
                    console.log( 'Google Pay buttons found:', $( '.gpay-button-container button' ).length );

                    $button.removeClass( 'loading' );
                    alert( 'Payment button not available. Please try again or choose another payment method.' );
                }

                // Remove loading after delay (in case payment didn't initiate)
                setTimeout( function() {
                    $button.removeClass( 'loading' );
                }, 3000 );
            } );
        },

		/**
		 * Bind additional events
		 */
		bindEvents: function() {
			const self = this;

			// Re-initialize on AJAX checkout update
			$( document.body ).on( 'updated_checkout', function() {
				self.validateOrderSummary();
				self.validateBillingInfo();
				//self.validatePaymentMethod();
			} );

			// Handle window resize
			let resizeTimer;
			$( window ).on( 'resize', function() {
				clearTimeout( resizeTimer );
				resizeTimer = setTimeout( function() {
					// Reinit if switching between mobile and desktop
					if ( window.innerWidth <= 768 ) {
						self.setInitialStates();
					}
				}, 250 );
			} );
		}
	};

	// Initialize on document ready
	$( document ).ready( function() {
		MobileCheckout.init();
	} );

	// Also initialize after WooCommerce checkout loads
	$( document.body ).on( 'init_checkout', function() {
		//MobileCheckout.init();
	} );

})( jQuery );