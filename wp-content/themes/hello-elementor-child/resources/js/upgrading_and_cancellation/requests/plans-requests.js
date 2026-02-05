(function ($) {
    $(document).ready(function() {
        $.clearCartAjax = function (successFunction) {
            $.ajax({
                url: ajaxObj.ajaxUrl,
                type: 'POST',
                data: {
                    'action': 'clear_cart',
                },
                success: function (response) {
                    console.log('OK clearing cart', response);
                    successFunction();
                },
                error: function (error) {
                    $.hideLoader();
                    console.error('Error clearing cart', error);
                }
            });
        }
        $.addCancellationProductToCart = function (totalPrice) {
            const data = {
                quantity: '1',
                product_id: CANCELLATION_PRODUCT_ID,
                action: 'woocommerce_ajax_add_to_cart',
                price_of_cancellation_dynamic: +totalPrice,
                'custom_metadata[parent_order_cancellation_id]': php_vars.parent_order_id.toString(),
                'custom_metadata[cancelled_bundled_items_keys]': JSON.stringify(php_vars.bundled_items_keys),
            };

            $.ajax({
                url: '/?wc-ajax=add_to_cart',
                type: 'POST',
                data: data,
                success: function(response, textStatus) {
                    window.location.replace('../checkout/index.html');
                    console.log('Cancellation product added to cart', response, textStatus);
                },
                error: function(error) {
                    console.error('Error adding item to cart', error);
                }
            });
        }
        $.handleRedirection = async function (productionURL, membershipURL) {
            try {
                let membershipResponse;
                if (!!membershipURL) {
                    membershipResponse = await fetch(membershipURL, {
                        method: 'GET',
                        credentials: 'same-origin'
                    });
                } else {
                    console.error('No membership cancellation url.');
                }

                if ((!membershipURL || membershipResponse?.ok) && !!productionURL) {
                    const productionResponse = await fetch(productionURL, {
                        method: 'GET',
                        credentials: 'same-origin'
                    });

                    if (productionResponse?.ok) {
                        console.log('Both requests completed successfully.');
                    } else {
                        console.error('Second request failed.');
                    }
                } else {
                    console.error('No production cancellation url or first request failed.');
                }
                window.location.reload();
            } catch (error) {
                console.error('Error during requests:', error);
            }
            $.hideLoader();
        }
        $.addUpgradingProductsToCart = function (data, translationData, upgradingUrl, translationUrl) {
            const addToCart = (cartData, url) => {
                console.log("cartData", cartData)
                if (cartData && url) {
                    return new Promise((resolve, reject) => {
                        $.ajax({
                            url,
                            type: 'POST',
                            data: cartData,
                            // dataType: 'json',
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest',
                            },
                            success: function(response, textStatus) {
                                console.log('Product added successfully:', cartData, textStatus);
                                resolve(response);
                            },
                            error: function(error) {
                                console.error('Error adding product to cart:', error, cartData);
                                reject(error);
                            }
                        });
                    });
                } else {
                    return Promise.resolve();
                }
            };

            $.showLoader();
            addToCart(translationData, translationUrl)
                .then(() => {
                    return addToCart(data, upgradingUrl);
                })
                .then(() => {
                    $.showLoader();
                    window.location.replace('../checkout/index.html');
                })
                .catch((error) => {
                    console.error('Failed to add products to cart:', error);
                    $.hideLoader();
                });
        };
        $.PREPARE_PURCHASE_PLAN_SWITCHING = function (
            toPlan,
            changeOfPlan,
            book_order_id,
            book_id,
            INCLUDED_ADDONS,
            MEMBERSHIP_DISCOUNT_FROM_ORDER,
            PLAN_SETTINGS
        ) {
            $.showLoader();

            const IS_V6 = PLAN_SETTINGS.is_v6;
            const IS_CHILDREN_PLAN = PLAN_SETTINGS.children;
            const stampMetaValue = {...PLAN_SETTINGS.stamp};
            const EXISTING_ADDONS = [...PLAN_SETTINGS.addons];
            const RELATED_CART_ITEM_KEY = php_vars.related_cart_item_key;
            const isToSignature = toPlan === "signature";
            const isToHorizon = toPlan === "horizon";
            const isToParamount = toPlan === "paramount";

            const newSettings = $.getPlanSettings(
                false,
                isToSignature,
                isToParamount,
                isToHorizon,
                IS_V6,
                IS_CHILDREN_PLAN,
                1,
                EXISTING_ADDONS,
                stampMetaValue,
                [...PLAN_SETTINGS.addons_log]
            );
            const isWithoutAudiobook = !$.findAddon(EXISTING_ADDONS, "Audiobook");
            let translationData;
            let newAddonsArr;

            if (isToSignature) {
                newAddonsArr = $.addSignatureAddonsInStamp(
                    INCLUDED_ADDONS,
                    MEMBERSHIP_DISCOUNT_FROM_ORDER,
                    newSettings
                );
            } else {
                newAddonsArr = EXISTING_ADDONS.filter(i => !$.IS_FULL_ADDON_INCLUDED_IN(
                    INCLUDED_ADDONS,
                    i.name,
                    i.value,
                    newSettings
                ));

                if (isWithoutAudiobook) {
                    newAddonsArr.push({
                        field_type: "checkbox",
                        id: $.getAddonId(1, "Audiobook"),
                        name: "Addon",
                        price: $.countNewCost("Audiobook", 1, 1),
                        price_type: "flat_fee",
                        value: "Audiobook"
                    });
                }

                if (IS_V6 && !PLAN_SETTINGS.paramount && (isToHorizon || isToParamount)) {
                    const productionId = php_vars.production_item_id;
                    const membershipId = php_vars.membership_item_id;
                    const translationPlanName = `${isToParamount? 'paramount' : 'horizon'}-translation-plan`;
                    const membershipTranslationPlanName = 'core-3y';
                    translationData = {
                        'add-to-cart': PUBLISHING_BUNDLES['v6-purchase-price-bundle'],
                        quantity: '1',
                        _bundled_with: RELATED_CART_ITEM_KEY,
                        [`bundle_attribute_pa_tier_${productionId}`]: translationPlanName,
                        [`bundle_variation_id_${productionId}`]: PURCHASE_PLANS_PRODUCTS_IDS[translationPlanName],
                        [`bundle_quantity_${productionId}`]: '1',
                        [`bundle_attribute_pa_tier_${membershipId}`]: membershipTranslationPlanName,
                        [`bundle_variation_id_${membershipId}`]: MEMBERSHIP_PLANS_IDS[membershipTranslationPlanName],
                        [`bundle_quantity_${membershipId}`]: '1',
                    };
                }

                if (isToHorizon) {
                    newAddonsArr = newAddonsArr.reduce((acc, addon) => {
                        if (IS_SAME_ADDON(addon.name, "Line editing")) {
                            let numValue = typeof addon.value === "number" ? addon.value : Number(addon.value);
                            if (numValue - 100000 > 0) {
                                acc.push({ ...addon, value: numValue - 100000 });
                            }
                        } else {
                            acc.push(addon);
                        }
                        return acc;
                    }, []);

                }
            }

            const addPurchaseToCart = (changeOfPlan, addons) => {
                let product_id = PURCHASE_UPGRADING_PRODUCTS_IDS[
                    `${changeOfPlan}${IS_V6 && !IS_CHILDREN_PLAN ? '-v6' : ''}${IS_CHILDREN_PLAN ? '-children' : ''}`
                    ];
                const data = {
                    quantity: '1',
                    product_id: product_id,
                    ['_newAddons']: JSON.stringify(addons) ?? [],
                    ['_stamp_meta_structure']: JSON.stringify($.replaceAddonsArrayInStamp(stampMetaValue, addons)),
                    ['_lod_addons_meta']: PLAN_SETTINGS.addons_log,
                    related_cart_item_key: RELATED_CART_ITEM_KEY,
                    book_order_id,
                    production_plan_subscription_id: php_vars.subscription_id,
                    book_id,
                    membership_cart_item_key: php_vars.membership_cart_item_key,
                    production_cart_item_key: php_vars.production_cart_item_key
                };

                if (isToSignature) {
                    data.no_audiobook_addon_in_switching = String(isWithoutAudiobook);
                    data.is_v6_upgrade_to_signature = String(IS_V6 && isToSignature && !IS_CHILDREN_PLAN);
                }

                if (PLAN_SETTINGS.paramount) {
                    data.translation_order_id = php_vars.translation_order_id;
                }

                $.addUpgradingProductsToCart(data, translationData, '../indexb25e.html?wc-ajax=add_to_cart', '../indexb25e.html?wc-ajax=add_to_cart');
            };

            $.clearCartAjax(() => addPurchaseToCart(changeOfPlan, newAddonsArr));
        };

        /*        $.getSwitchingPlanURL = function (subscription_type, subscription_id) {
                    $.showLoader();
                    $.ajax({
                        url: '/wp-admin/admin-ajax.php',
                        method: 'GET',
                        data: {
                            action: 'booxai_get_url_upgrade_subscription',
                            subscriptionType: subscription_type,
                            subscriptionId: subscription_id,
                            changingSubscriptionFromUpgrading: true,
                        },
                        success: function (response) {
                            $('#upgrade-plan-btn').attr('href', response);
                            window.location.href = response;
                            console.error('ERROR STATUS', response);
                        },
                        error: function (xhr, status, error) {
                            console.error('ERROR STATUS', status);
                            console.error('ERROR', error);
                            $.hideLoader();
                        }
                    });
                }*/
    });
})(jQuery);
