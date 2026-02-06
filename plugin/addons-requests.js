(function ($) {
    $(document).ready(function() {
        $.upgradeAddons = function (
            newAddons,
            invalidValuesOfAddons,
            membershipDiscount,
            PLAN_SETTINGS,
            ADDONS_INPUTS_CONDITIONS
        ) {
            if (invalidValuesOfAddons.length === 0 && newAddons.length > 0) {
                const existingAddons = [...PLAN_SETTINGS.addons];
                const duration = PLAN_SETTINGS?.duration;

                $.showLoader();
                $.clearCartAjax(function () {
                    const getAddonUpgradingProductId = (addonName) => Object.entries(ADDONS_PRODUCTS_IDS).find(
                        ([key, product_id]) => {
                            return IS_SAME_ADDON(key, addonName)
                        }
                    );

                    // delete values if we have repeats
                    newAddons = $.byNameWithMaxQuantity(newAddons, 'quantity');

                    const addonsForCart = newAddons.map((addon) => {
                        const name = addon.name;
                        const existingAddonQuantity = $.findAddon(existingAddons, name)?.value ?? 0;
                        const isChildrensBookDesign = IS_SAME_ADDON(name, 'Childrens book design');
                        let quantity = +addon.quantity;

                        if (!$.isCheckboxAddon(ADDONS_INPUTS_CONDITIONS, name)) {
                            quantity -= +existingAddonQuantity;
                        }

                        if (isChildrensBookDesign) {
                            quantity = 1;
                        }

                        return {
                            name,
                            price: +addon.price,
                            quantity,
                            product_id: getAddonUpgradingProductId(name)?.[1]
                        };
                    });

                    let allAddons = $.makeStampAddonsArray(
                        [...newAddons],
                        PLAN_SETTINGS,
                        ADDONS_INPUTS_CONDITIONS
                    );

                    existingAddons.forEach((addon) => {
                        const name = $.isCheckboxAddon(ADDONS_INPUTS_CONDITIONS, addon.name) &&
                        typeof +addon.value !== 'number' ? addon.value : addon.name;
                        const { isInsideSubscriptionTotal, wasUpdatedByPurchasePrice } = $.isPartOfAddonIncludedInTotal(
                            PLAN_SETTINGS.addons_log,
                            duration === 1,
                            name
                        );
                        const alreadyAddedAddon = $.findAddon(allAddons, name);

                        if (alreadyAddedAddon && (!isInsideSubscriptionTotal || wasUpdatedByPurchasePrice)) {
                            alreadyAddedAddon.price += addon?.price;
                        }

                        if (!alreadyAddedAddon) {
                            allAddons.push(addon);
                        }
                    });

                    const stamp_meta_structure = $.replaceAddonsArrayInStamp(PLAN_SETTINGS.stamp, allAddons);

                    const data = {
                        quantity: '1',
                        action: 'custom_ajax_add_to_cart',
                        purchase_prices_of_addons: addonsForCart,
                        ['_newAddons']: JSON.stringify(allAddons),
                        ['_stamp_meta_structure']: JSON.stringify(stamp_meta_structure),
                        purchase_membership_discount: membershipDiscount,
                        book_order_id: php_vars.order_id,
                        book_id: php_vars.book_id,
                        related_cart_item_key: php_vars.related_cart_item_key,
                        production_plan_subscription_id: php_vars.subscription_id,
                        membership_cart_item_key: php_vars.membership_cart_item_key,
                        production_cart_item_key: php_vars.production_cart_item_key
                    };

                    console.log("addToCart data: ", data);

                    $.ajax({
                        url: ajaxObj.ajaxUrl,
                        type: 'POST',
                        data: data,
                        success: function (response, textStatus) {
                            window.location.replace('/checkout/');
                        },
                        error: function (error) {
                            console.error('Error adding addonsForCart to cart', error);
                            $.hideLoader();
                        }
                    });
                });
            }
        };
    });
})(jQuery);