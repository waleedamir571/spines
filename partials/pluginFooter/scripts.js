(function ($) {

	$(document).ready(function($) {

		
		/* 
		* Check if current page is in iframe 
		*/
		function isInIframe () {
			try {
				return window.self !== window.top;
			} catch (e) {
				return true;
			}
		}
				// Insert the new discount toggle functionality (currently commented out)
			/*
			$( document ).on( 'updated_checkout', function(){
				$('#apply_discount').change(function() {
					$('#discount-toggle').addClass('disabled-toggle'); // Add CSS class to disable toggle
					$.ajax({
						url: wc_checkout_params.ajax_url,
						type: 'POST',
						data: {
							action: 'apply_credit_card_discount',
							apply_discount: $(this).is(':checked') ? 'yes' : 'no'
						},
						success: function(response) {
							$('body').trigger('update_checkout');
						}
					});
				});
	
				$(document.body).on('updated_checkout', function() {
					$('#discount-toggle').removeClass('disabled-toggle'); // Remove CSS class to re-enable toggle
				});
	
				$('.discount-toggle-element .btn-info').on('click', function(){
					$('.popup-card-discount').addClass('show');
				});
	
				$('.popup-card-discount .btn-close').on('click', function(){
					$(this).closest('.popup').removeClass('show');
				});
	
				// Initial check on page load
				if ($('#apply_discount').is(':checked')) {
					$('#discount-toggle .box').addClass('checked');
				} else {
					$('#discount-toggle .box').removeClass('checked');
				}
			});
			*/

			function onScrollCheckoutMobileBar() {
				// Check if the target element exists
				//var el = $('.shop_table tfoot .order-total:not(.recurring-total)');
				/*if (el.length === 0) {
					return; // Exit if the element does not exist
				}*/

				// Continue only if the element exists
				//if ($(el).offset().top < ($(document).scrollTop() + $(window).height())) {
				if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
					$('body').addClass('hide-checkout-mobile-bar');
				} else {
					$('body').removeClass('hide-checkout-mobile-bar');
				}
			}
		
			$( window ).on( 'scroll', onScrollCheckoutMobileBar);
			onScrollCheckoutMobileBar();
			
			$( document ).on( 'update_checkout', function(){
				$('.checkout-mobile-bar').addClass('loading');
			});
		
			function updateCheckoutMobileBar() {
				var subtotal = $('.shop_table tfoot .order-original-subtotal:not(.recurring-total) .amount').text();
		
				var coupon = $('.shop_table tfoot .cart-discount:not(.recurring-total) .amount').text();
				var couponLabel =  $('.shop_table tfoot .cart-discount:not(.recurring-total) th').text();
		
				var orderDiscount = $('.shop_table tfoot .order-discount:not(.recurring-total) .amount').text();
				var orderDiscountLabel =  $('.shop_table tfoot .order-discount:not(.recurring-total) th').text();
				
				var fee = $('.shop_table tfoot .fee:not(.recurring-total) .amount').text();
				var feeLabel =  $('.shop_table tfoot .fee:not(.recurring-total) th').text();
		
				var total = $('.shop_table tfoot .order-total:not(.recurring-total) .amount').text();
		
				var html = '';
		
				if ( coupon || fee || orderDiscount)
					html += '<div class="item item-order-original-subtotal"><div class="label">Subtotal:</div><div class="value">'+subtotal+'</div></div>';
		
				if ( coupon ) {
					html += '<div class="item item-cart-discount"><div class="label">'+couponLabel+'</div><div class="value">-'+coupon+'</div></div>';
				}
		
				if ( fee ) {
					html += '<div class="item item-fee"><div class="label">'+feeLabel+'</div><div class="value">'+fee+'</div></div>';
				}
		
				if ( orderDiscount ) {
					html += '<div class="item item-order-dicount"><div class="label">'+orderDiscountLabel+'</div><div class="value">-'+orderDiscount+'</div></div>';
				}
		
				html += '<div class="item item-total"><div class="label">Total: </div><div class="value">'+total+'</div></div>';
		
				$('.checkout-mobile-bar .items').html(html);
		
				$('.checkout-mobile-bar').removeClass('loading');
			}
		
			/*
			function showMessageIfCreditCardMethod() {
				if ( $('.payment_method_stripe input.input-radio:checked').length && $('#apply_discount:checked').length )  
					$('.card-discount-message').slideDown(200);
				else 
					$('.card-discount-message').slideUp(200);
			}
			*/
		
			$(document).on('updated_checkout', function () {
				updateCheckoutMobileBar();
				//showMessageIfCreditCardMethod();
		
				$(document.body).on('checkout_error', function(){
					var errorsHtml = '';
					$('.woocommerce > .woocommerce-notices-wrapper, .woocommerce-NoticeGroup-checkout').each(function(index, element) {
						errorsHtml += $(element).html();
					});
					$('.checkout-col-left .woocommerce-notices-wrapper').html(errorsHtml);
				});
		
				/*
				if ( $('.product-item[data-card-discount]').length > 0 ) 
					$('#discount-toggle').show();
				else 
					$('#discount-toggle').hide();
				*/
			});

			$('.product-desc').each(function() {
                if (!$(this).text().trim().length) {
                    $(this).parent().addClass('product-desc-custom-hidden');
                }
            });
		});

		    // Only run on checkout or order-pay pages
			/*
			if ($('body').hasClass('woocommerce-checkout') || $('body').hasClass('woocommerce-order-pay')) {
				
				// Alternative AJAX interception approach
				$(document).ajaxPrefilter(function(options) {
					// If this is a Splitit validation AJAX call
					if (options.url && options.url.includes('splitit_checkout_validate')) {
						// If form data is available
						if (options.data) {
							try {
								// Parse the form data
								var formData = new URLSearchParams(options.data);
								var fieldsData = formData.get('fields');
								
								if (fieldsData) {
									var fields = JSON.parse(fieldsData);
									
									// Clean billing phone number
									if (fields.billing_phone) {
										fields.billing_phone = fields.billing_phone.replace(/[\s\-\(\)]/g, '');
										//console.log('AJAX cleaned phone: ' + fields.billing_phone); // Debug line
									}
									
									// Update the form data
									formData.set('fields', JSON.stringify(fields));
									options.data = formData.toString();
								}
							} catch (e) {
								console.error('Error cleaning phone number:', e);
							}
						}
					}
				});
			}
		*/


	/* 
	* Remove and Add cross-sell product as child to main product in cart.
	*/
	/*
	$(document).on('click', '.woocommerce-checkout .product-cross-sells li input[type="checkbox"]', function () {
		let el = $(this);
		let data_parent_cross_sell_product_id = el.data('parent_cross_sell_product_id');
		let data_cross_sell_product_id = el.data('cross_sell_product_id');
		let data_parent_cross_sell_product_key = el.data('parent_cross_sell_product_key');
		let data_cross_sell_product_key = el.data('cross_sell_product_key');

		let dataForAddItemToCart = {
			product_id: data_cross_sell_product_id,
		};

		let dataForRemoveItemToCart = {
			cart_item_key: data_cross_sell_product_key,
		};

		let dataForAddCustomInfoToCartItem = {
			action:'wc_add_user_custom_data_options',
			parent_cross_sell_product_id: data_parent_cross_sell_product_id,
			cross_sell_product_id: data_cross_sell_product_id,
			parent_cross_sell_product_key: data_parent_cross_sell_product_key,
		};

		let dataForUpdateCustomInfoToCartItem = {
			action:'wc_update_custom_data_item_cart',
			parent_cross_sell_product_id: data_parent_cross_sell_product_id,
			cross_sell_product_id: data_cross_sell_product_id,
			parent_cross_sell_product_key: data_parent_cross_sell_product_key,
			cross_sell_product_key: data_cross_sell_product_key
		};

		if (el.is(':checked')) {
			$.ajax({
                url: "/wp-admin/admin-ajax.php", 
                type: "POST",
                data: dataForAddCustomInfoToCartItem,
                async : false,
                success: function () {
					$.post(ajaxObj.siteUrl + '/?wc-ajax=add_to_cart', dataForAddItemToCart, function (response) {
						if (response.hasOwnProperty('fragments')) {
							$(document.body).trigger('added_to_cart', [response.fragments, response.cart_hash]);
							$(document.body).trigger('update_checkout');
							$(document.body).trigger('updated_checkout');
						}
					});
				}
            });
		} else {
			$.ajax({
                url: "/wp-admin/admin-ajax.php", 
                type: "POST",
                data: dataForUpdateCustomInfoToCartItem,
                async : false,
                success: function () {
					$.post(ajaxObj.siteUrl + '/?wc-ajax=remove_from_cart', dataForRemoveItemToCart, function (response) {
						if (response.hasOwnProperty('fragments')) {
							$(document.body).trigger('removed_from_cart', [response.fragments, response.cart_hash]);
							$(document.body).trigger('update_checkout');
							$(document.body).trigger('updated_checkout');
						}
					});
				}
            });
		}
			
	})

	/*
	if ($('body').hasClass('woocommerce-checkout')) {
		$(document).on('click', '.replace-product .btn', function (e) {
			e.preventDefault();

			let el = $(this);
			let elHtml = el.html();
			let elDataVariationId = el.data('variation_id');
			let data_addons_cross_sell_data = el.data('addons_cross_sell_data');
			let data_sort_id = el.data('sort_id');

			let data = {
				cart_item_key: el.closest('.product-desc').data('cart_item_key'),
			};

			el.html('<i class="fas fa-spinner fa-spin"></i>');

			$.post('/?wc-ajax=remove_from_cart', data, function (response) {
				if (response.hasOwnProperty('fragments')) {
					data = {
						product_id: elDataVariationId,
						quantity: 1,
					};
					let dataForUpdateCustomInfoToNewCartItem = {
						action:'wc_move_user_custom_data_options_to_updated_item',
						addons_cross_sell_data: data_addons_cross_sell_data,
						previos_sort_id: data_sort_id,			
					};

					$.ajax({
						url: "/wp-admin/admin-ajax.php", 
						type: "POST",
						data: dataForUpdateCustomInfoToNewCartItem,
						async : false,
						success: function () {
							$.post('/?wc-ajax=add_to_cart', data, function (response) {
								el.html(elHtml);
								$(document.body).trigger('added_to_cart', [response.fragments, response.cart_hash]);
								$(document.body).trigger('update_checkout');
								$(document.body).trigger('updated_checkout');
							});
						}
					});
				} else {
					el.html(elHtml);
				}
			});
		});
	}
	*/

	/* the back button functionality */
	$(document).ready(function () {
		$('.dokan-dashboard .back-btn').click(function (e) {
			e.preventDefault();
			if ('referrer' in document) {
				window.location = document.referrer;
			} else {
				window.history.back();
			}
		});
		$(".dokan-settings-area #payment-form").siblings('a').click(function (e) {
			e.preventDefault();
			if ('referrer' in document) {
				window.location = document.referrer;
			} else {
				window.history.back();
			}
		});
	});

	
	/* 
	* Removing the main product with cross-sell if they have, 
	* from a cart on the Checkout page.
	*/
	/*
	$(document).ready(function () {
		$(document).on('click', '.checkout .product-name a.remove-from-cart', function (e) {
			e.preventDefault();
	
			// Trigger WooCommerce loader
			$('body').block({
				message: null,
				overlayCSS: {
					background: '#fff',
					opacity: 0.6,
				},
			});
	
			var product_id = $(this).attr("data-product_id"),
				cart_item_key = $(this).attr("data-cart_item_key");
	
			$.ajax({
				type: 'POST',
				dataType: 'json',
				url: "/wp-admin/admin-ajax.php",
				data: { 
					action: "product_remove_with_cross_sell",
					product_id: product_id,
					cart_item_key: cart_item_key,
				},
				success: function (response) {
					if (response.hasOwnProperty('fragments') && response.cart_hash) {
						$(document.body).trigger('removed_from_cart', [response.fragments, response.cart_hash]);
						$(document.body).trigger('update_checkout');
						$(document.body).trigger('updated_checkout');
					} else {
						$(document.body).trigger('wc_cart_emptied');
	
						if (document.referrer) {
							location.replace(document.referrer);
						} else {
							if (isInIframe()) {
								location.replace("/pricing_platform/");
							} else {
								location.replace("/pricing/");
							}
						}
					}
				},
				complete: function () {
					// Unblock WooCommerce loader
					$('body').unblock();
				}
			});
	
			return false;
		});
	});
	*/
	
	/* automate UTM addition */
	$(document).ready(function () {
		initUTMLinks();
	});
	
	function initUTMLinks() {
		var body = $('body');

		// for blog single posts
		if ( $(body).hasClass('single-post')  ) {

			var utm_source = 'blog';
			var utm_medium = 'blogpost';
			var utm_campaign = $('.post-title .elementor-heading-title').text().replace(/ /g,'_');

			//Links to SignUp in sidebar
			setUTM('.sidebar-sign-up a', {utm_source:utm_source, utm_medium:utm_medium, utm_campaign: utm_campaign, utm_content:'Sidebar_Sign_Up'}); 

			// Links to Coach in sidebar
			setUTM('.sidebar-coach a', {utm_source:utm_source, utm_medium:utm_medium, utm_campaign: utm_campaign, utm_content:'Sidebar_Coach'}); 
			
			//Shortcodes
			setUTM('.elementor-widget-theme-post-content a.start-for-free', {utm_source:utm_source, utm_medium:utm_medium, utm_campaign:utm_campaign, utm_content:'Shortcode', utm_term:'index'}); 
			
			//links on services pages
			setUTM('.elementor-widget-theme-post-content a[href^="/services/"]:not(.start-for-free), .elementor-widget-theme-post-content a[href*="spines.com/services/"]:not(.start-for-free)', {utm_source:utm_source, utm_medium:'cta', utm_campaign:utm_campaign, utm_content:'Upper_Cta'});
			
		}

		// All services page (services archive) 
		if ( $(body).hasClass('post-type-archive-service') ) {
			var utm_source = 'service';
			var utm_medium = 'organic';
			var utm_campaign = 'service_page';
			setUTM('.btn-sign-up.in-hero-section a', {utm_source:utm_source, utm_medium:utm_medium, utm_campaign: utm_campaign, utm_content:'Headerbutton'});
			setUTM('.btn-sign-up.in-reviews-section a', {utm_source:utm_source, utm_medium:utm_medium, utm_campaign: utm_campaign, utm_content:'Trust'}); 
		}
		
		// for single service page 
		if ( $(body).hasClass('single-service') ) {
			var utm_source = 'service';
			var utm_medium = 'organic';
			var utm_campaign = $('.post-title .elementor-heading-title').text().replace(/ /g,'_');
			setUTM('.btn-sign-up.in-hero-section a', {utm_source:utm_source, utm_medium:utm_medium, utm_campaign: utm_campaign, utm_content:'Headerbutton'});
			setUTM('.btn-how-to a', {utm_source:utm_source, utm_medium:utm_medium, utm_campaign: utm_campaign, utm_content:'Howto'}); 
		}
		
	}
	
	function setUTM(elementsSelector, utmOptions) {
		if ($(elementsSelector).length) {
			$(elementsSelector).each(function(index, element){
				var utm_term_param = '';

				if (utmOptions.utm_term == 'index') {
					utm_content = 'Shortcode';
					var parentIndex = index + 1;
					utm_term_param = '&utm_term='+ parentIndex; 
				} else if (utmOptions.utm_term == 'text') {
					utm_term_param = '&utm_term='+ $(element).text().replace(/ /g,'_');
				}

				var href = $(element).attr('href').replace(/\/$/, ""); // remove "/" on the end
				if ( href.includes('?') ) 
					href =  href + '&';
				else 
					href = href + '/?';

				$(element).attr('href', encodeURI( href+'utm_source='+utmOptions['utm_source']+'&utm_medium='+utmOptions['utm_medium']+'&utm_campaign='+utmOptions['utm_campaign']+'&utm_content='+utmOptions['utm_content']+utm_term_param ) );
			});
		}
	}

})(jQuery);