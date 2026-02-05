(function ($) {
	
	let current_addon_item = {};

	const body = $('body');

    body.on('click', '.remove-addon-button', function(e) {
        e.preventDefault();

        let $button = $(this);

        current_addon_item.cart_item_key = $button.data('cart-key');
        current_addon_item.field_name = $button.data('field-name');
        current_addon_item.addon_name = $button.data('addon-name');
		
		$('#addons_popup_heading').text('Remove ' + current_addon_item.addon_name.toLowerCase());
		$('#addons_popup_message').text('Are you sure you want to remove ' + current_addon_item.addon_name.toLowerCase() + ' add-on from your order?');
		
		$('#addon_popup_overlay').css('display', 'flex');
		
    }).on('click', '#toggle-addons-edit', function() {
		let $button = $(this);
		$button.toggleClass('active');
		$('.bundle-addons').toggleClass('edit_mode');
		
	}).on('click', '#button_remove_addon', function(e) {
		if (current_addon_item.cart_item_key !== ''
			&& current_addon_item.field_name !== ''
			&& current_addon_item.addon_name !== ''
		) {
			let $button = $(this);

			if ($button.prop('disabled')) {
			    e.preventDefault();
			    return;
            }

            $button.prop('disabled', true).addClass('loading');

            $.ajax({
				url		: ajaxObj.ajaxUrl,
				type	: 'POST',
				data	: {
					action: 'remove_addon_from_cart_item',
					cart_item_key	: current_addon_item.cart_item_key,
					field_name	: current_addon_item.field_name,
					addon_name	: current_addon_item.addon_name
				},
				success	: function(response) {
					if (response.success) {
						$('body').trigger('update_checkout');
					} else {
						alert('Failed to remove addon.');
					}
					
					$('#addon_popup_overlay').css('display', 'none');
					$button.prop('disabled', false).removeClass('loading');
					current_addon_item = {};
				}
			});
		}
		
	}).on('click', '#button_close_window, #close_addons_popup', function(e) {
		$('#addon_popup_overlay').css('display', 'none');
		current_addon_item = {};
	}).on('click', '.change-membership', function (e) {
        e.preventDefault();

        const $button		= $(this);
        const cartItemKey	= $button.data('cart-key');
        const direction		= $button.data('direction');

        if (!cartItemKey || !direction || !ajaxObj?.membership) {
            console.warn('Missing data or security token');
            return;
        }

        $button.closest('.product-block').addClass('loading');
        $('.change-membership').prop('disabled', false);

        $.ajax({
            url		: ajaxObj.ajaxUrl,
            type	: 'POST',
            data	: {
                action			: 'change_membership_tier',
                cart_item_key	: cartItemKey,
                direction		: direction,
                security		: ajaxObj.membership
            },
            success	: function (response) {
                if (response.success) {

                    body.trigger('update_checkout');

                    const year_container = $('#membership-year-' + cartItemKey);

                    if (year_container.length > 0) {
                        year_container.text(response.data.year);
                        $button.closest('.product-block').find('.membership-included-year').text(response.data.year);
                    }

                    if (response.data.disable === true) {
                        //$button.prop('disabled', true);

                        body.one('updated_checkout', function () {
                            const updatedButton = $('.change-membership[data-cart-key="' + cartItemKey + '"][data-direction="' + direction + '"]');
                            updatedButton.prop('disabled', true);
                        });
                    }

                } else {
                    console.error(response.data || 'Failed to change tier.');
                }

                $button.closest('.product-block').removeClass('loading');
            },
            error	: function () {
                console.error('Something went wrong');
            }
        });

    }).on('click', '.toggle-product-edit', function () {
        let $button = $(this);
        $button.toggleClass('active').closest('.product-name').toggleClass('edit_mode');

    }).on('click', '.remove-product-confirmation-button', function () {
        let $button = $(this);
        $button.parent().find('.remove-product-confirmation-window').toggleClass('active');

    }).on('click', '.close-confirmation-window', function () {
        let $button = $(this);
        $button.closest('.remove-product-confirmation-window').toggleClass('active');

    }).on('click', '.remove-product-item', function (e) {
        e.preventDefault();

        const $btn = $(this);
        const $productBlock = $btn.closest('.product-block');
        const cartKey   = $btn.data('cart-key');
        const nonce     = $btn.data('nonce');

        if ($btn.hasClass('loading')) return;

        $btn.addClass('loading');
        $productBlock.addClass('loading');

        $.ajax({
            url     : ajaxObj.ajaxUrl,
            type    : 'POST',
            data    : {
                action      : 'remove_cart_item',
                cart_key    : cartKey,
                nonce       : nonce
            },
            success: function (response) {
                if (response.success) {
                    //console.log('Item removed');

                    if (response.data.is_empty) {
                        window.location.href = '../pricing_platform/index.html';
                        return;
                    }

                    const $body = $('body');

                    if ($body.data('updating-checkout')) return;

                    if ($body.hasClass('woocommerce-checkout')) {
                        $body.trigger('update_checkout');
                    }

                } else {
                    //console.log(response.data);
                }
            },
            error: function () {
                //console.log('Item removing error');
            },
            complete: function () {
                $btn.removeClass('loading');
            }
        });

    });

    $( document ).ready( function() {

        /**
         * Calculate and apply sticky checkout layout
         */
        function handleStickyCheckout() {
            // Only run on desktop (>1024px)
            if ( $( window ).width() <= 992 ) {
                $( '.checkout-col-right' ).removeClass( 'has-sticky-bottom is-scrolling' );
                $( '.woocommerce-checkout-review-order-table tbody' ).css( 'max-height', '' );
                return;
            }

            const $checkoutRight = $( '.checkout-col-right' );
            const $orderReview = $( '#order_review' );
            const $table = $( '.woocommerce-checkout-review-order-table' );
            const $tbody = $table.find( '> tbody' );
            const $tfoot = $table.find( '> tfoot' );
            const $checkoutBottom = $( '.checkout-bottom' );
            const $heading = $( '#order_review_heading' );

            // Verify all elements exist
            if ( ! $checkoutRight.length || ! $tfoot.length || ! $checkoutBottom.length || ! $tbody.length ) {
                return;
            }

            // Enable sticky layout
            $checkoutRight.addClass( 'has-sticky-bottom' );

            // Calculate available space
            let windowHeight = $( window ).height();
            let checkoutRightPaddingTop = parseInt( $checkoutRight.css( 'padding-top' ) ) || 0;
            let checkoutRightPaddingBottom = parseInt( $checkoutRight.css( 'padding-bottom' ) ) || 0;
            let headingHeight = $heading.length ? $heading.outerHeight( true ) + 32 : 0;
            let tfootHeight = $tfoot.outerHeight() || 0;
            let checkoutBottomHeight = $checkoutBottom.outerHeight() || 0;
            const checkoutPagePaddingTop = 38;
            const checkoutPagePaddingBottom = 38;

            // Calculate max height for tbody
            let stickyBlockHeight = tfootHeight + checkoutBottomHeight;
            let availableHeight = windowHeight - checkoutRightPaddingTop - checkoutRightPaddingBottom - headingHeight - stickyBlockHeight;

            // Set max-height for tbody with some breathing room
            //var tbodyMaxHeight = Math.max( 200, availableHeight - 40 );
            let tbodyMaxHeight = Math.max( 200, availableHeight );
            $tbody.css( 'max-height', tbodyMaxHeight + 'px' );

            // Detect if tbody is scrolling
            if ( $tbody[0].scrollHeight > $tbody[0].clientHeight ) {
                $checkoutRight.addClass( 'is-scrolling' );
            } else {
                $checkoutRight.removeClass( 'is-scrolling' );
            }

            // Monitor tbody scroll events
            $tbody.off( 'scroll.stickyCheckout' ).on( 'scroll.stickyCheckout', function() {
                if ( $( this ).scrollTop() > 0 ) {
                    $checkoutRight.addClass( 'is-scrolling' );
                } else {
                    $checkoutRight.removeClass( 'is-scrolling' );
                }
            });
        }

        /**
         * Debounce function for resize events
         */
        function debounce( func, wait ) {
            var timeout;
            return function() {
                var context = this;
                var args = arguments;
                clearTimeout( timeout );
                timeout = setTimeout( function() {
                    func.apply( context, args );
                }, wait );
            };
        }

        // Initial setup
        handleStickyCheckout();

        // Re-calculate on window resize (debounced)
        $( window ).on( 'resize', debounce( handleStickyCheckout, 250 ) );

        // Re-calculate on WooCommerce checkout updates
        $( document.body ).on( 'updated_checkout', function() {
            // Small delay to ensure DOM is fully updated
            setTimeout( handleStickyCheckout, 150 );
        });

    });

})(jQuery);