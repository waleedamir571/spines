(function ($) {
    $(document).ready(function(){
        $.isObjEmpty = function (obj) {
            return Object.keys(obj).length === 0;
        };
        $.isPartOfAddonIncludedInTotal = function (ADDONS_LOG, isPurchasePlan, addonName) {
            const currentAddonChanges = $.findAddonsChanges(ADDONS_LOG, addonName);
            const isInsideSubscriptionTotal = !isPurchasePlan &&
                currentAddonChanges?.some(({was_inside_subscription_total}) =>
                    was_inside_subscription_total !== 'false' && !!was_inside_subscription_total
                );
            const wasUpdatedByPurchasePrice = currentAddonChanges?.some(({addon_id}) =>
                isInsideSubscriptionTotal &&
                Object.values(ADDONS_PRODUCT_EQUIVALENT_ADDON_META_IDS).includes(+addon_id)
            );

            return {
                isInsideSubscriptionTotal,
                wasUpdatedByPurchasePrice
            };
        }
        $.isCheckboxAddon = (ADDONS_INPUTS_CONDITIONS, name) =>
            ADDONS_INPUTS_CONDITIONS.find((addonCondition) => {
                return IS_SAME_ADDON(name, addonCondition.inp.name) &&
                    addonCondition.inp.type === 'checkbox';
            });
        $.makeStampAddonsArray = function (addonPrices, PLAN_SETTINGS, ADDONS_INPUTS_CONDITIONS) {
            return addonPrices.map((addon, index) => {
                const isCheckboxAddon = $.isCheckboxAddon(ADDONS_INPUTS_CONDITIONS, addon.name);
                const valueFromNewAddons = isCheckboxAddon ? addon.name : +addon.quantity;
                const valueStamp = addon.hasOwnProperty('price_type') ? addon.value : valueFromNewAddons;
                const addonIdDuration = addon?.isUpgraded ? 1 : PLAN_SETTINGS.duration;

                return {
                    id: addon?.id ?? $.getAddonId(addonIdDuration, addon.name === 'Addon' ? addon.value : addon.name),
                    name: isCheckboxAddon ? 'Addon' : addon.name,
                    // field_name: `${subIndex}-${index + 1}`,
                    field_type: isCheckboxAddon ? "checkbox" : "input_multiplier",
                    price: +addon.price,
                    price_type: isCheckboxAddon ? "flat_fee" : "quantity_based",
                    value: valueStamp
                };
            });
        };
        $.validateAddonValAndPushIntoAll = function (
            input,
            val,
            name,
            step,
            fullNewAddons,
            updateAddonsBtn,
            ADDONS_INPUTS_CONDITIONS,
            PLAN_SETTINGS
        ) {
            const max = input?.max ? +input?.max : Infinity;
            const addons = PLAN_SETTINGS.addons;
            const isChildrensBookDesign = IS_SAME_ADDON("Childrens book design", name);
            const inpVal = isChildrensBookDesign && val ? 25 : val;
            const existingAddon = $.findAddon(addons, name);
            const id = existingAddon?.id ? existingAddon.id : $.getAddonId(1, name);
            const isCheckbox = input.type === "checkbox";
            const isExistingCheckboxValue = isCheckbox && existingAddon;
            const existingValue = existingAddon?.value ? existingAddon?.value : 0;
            const price = existingValue === inpVal || isExistingCheckboxValue ?
                $.toPriceForm(existingAddon?.price) :
                $.countNewCost(
                    name,
                    inpVal,
                    step
                );

            const quantity = isExistingCheckboxValue &&
            isChildrensBookDesign &&
            typeof existingAddon?.value === 'number' ? existingValue : inpVal;
            const isValueDowngraded = $.IS_ADDON_VALUE_DOWNGRADED(
                inpVal,
                existingAddon,
                ADDONS_INPUTS_CONDITIONS,
                PLAN_SETTINGS
            );

            if (existingValue || val) {
                if ((isCheckbox || (inpVal % step === 0 && inpVal <= max)) &&
                    !((IS_SAME_ADDON(name, "Ghostwriting") ||
                       IS_SAME_ADDON(name, "Line editing") ||
                       IS_SAME_ADDON(name, "Typing") ||
                       IS_SAME_ADDON(name, "OCR")) &&
                        inpVal !== 0 &&
                        inpVal < input?.min
                    ) &&
                    !(isNaN(price) || IS_INFINITY(price)) &&
                    (!isValueDowngraded || isExistingCheckboxValue)
                ) {
                    fullNewAddons.push({
                        id,
                        name,
                        price,
                        quantity,
                        isUpgraded: !(isCheckbox ? !!existingAddon?.name : +existingAddon?.value === +quantity)
                    });
                } else {
                    $.setMessageIfWrongInpValue(
                        inpVal,
                        isValueDowngraded,
                        max,
                        input?.min,
                        name,
                        updateAddonsBtn,
                        step,
                        price,
                        ADDONS_INPUTS_CONDITIONS
                    );
                }
            }
        };
        $.IS_FULL_ADDON_INCLUDED_IN = function (INCLUDED_ADDONS, name, value, settings) {
            return INCLUDED_ADDONS.some((addon) => {
                const current = addon.inp.name;

                return (IS_SAME_ADDON(current, name) || IS_SAME_ADDON(current, value))
                    && addon.getIncludedCondition(settings)
                    && addon.isMaxValueIncluded(settings);
            });
        };
        $.replaceAddonsArrayInStamp = (stamp, addons) => {
            Object.keys(stamp).forEach((key) => {
                if (PLANS_FULL_NAMES.includes(stamp[key]?.attributes?.attribute_pa_tier)) {
                    stamp[key].addons = [...addons];
                }
            })
            return stamp;
        };
        /*        $.returnKeyForStampProductionObject = function (stamp) {
                    for (const key in stamp) {
                        if (PLANS_FULL_NAMES.includes(stamp[key]?.attributes?.attribute_pa_tier)) {
                            return key;
                        }
                    }
                    return null;
                };*/
        $.addSignatureAddonsInStamp = function (INCLUDED_ADDONS, MEMBERSHIP_DISCOUNT_FROM_ORDER, newSettings) {
            const EXISTING_ADDONS = [...newSettings.addons];
            const PLAN_DURATION = newSettings.duration;
            const IS_V6 = newSettings.is_v6;
            const isPurchasePrice = PLAN_DURATION === 1;
            let forMonths = PLAN_DURATION - 1 - $.fullMonthsSince(php_vars.start_date);
            forMonths = forMonths < 1 ? 1 : forMonths;

            const setReducedValue = (addon, includedAddon) => {
                const { inp, getIncludedVal, getIncludedCondition, isMaxValueIncluded } = includedAddon;
                const currentName = addon.name === "Addon" ? addon.value : addon.name;
                const currentValue = addon.name === "Addon" ? 1 : addon.value;
                const newVal = +currentValue - +getIncludedVal(newSettings);

                if (IS_SAME_ADDON(currentName, inp.name) && getIncludedCondition(newSettings)) {
                    if (newVal > 0 && inp.type !== "checkbox" && !isMaxValueIncluded(newSettings)) {
                        const {
                            isInsideSubscriptionTotal,
                            wasUpdatedByPurchasePrice
                        } = $.isPartOfAddonIncludedInTotal(
                            newSettings.addons_log,
                            isPurchasePrice,
                            currentName
                        );
                        const isOnlyMonthlyPrice = isInsideSubscriptionTotal && !wasUpdatedByPurchasePrice;

                        let price= $.countNewCost(currentName, newVal, inp.step);

                        if (isOnlyMonthlyPrice) {
                            price /= forMonths;
                        }

                        return { ...addon, value: newVal, price }
                    } else {
                        // delete an addon from metadata if full value included
                        return null;
                    }
                }
                // don't change an addon
                return undefined;
            }

            if (!newSettings.children) {
                let audiobookPrice = $.countNewCost("Audiobook", 1, 1);
                const audiobookId = $.getAddonId(PLAN_DURATION, "Audiobook");

                if (isPurchasePrice) {
                    newSettings.addons_log.push({
                        addon_id: audiobookId,
                        addon_name: "Audiobook",
                        datetime: new Date(),
                        new_price: audiobookPrice,
                        new_value: 1,
                        old_price: 0,
                        old_value: 0,
                        was_inside_subscription_total: false
                    })
                } else {
                    audiobookPrice /= forMonths;
                }

                if (!$.findAddon(EXISTING_ADDONS, "Audiobook")) {
                    EXISTING_ADDONS.push({
                        field_type: "checkbox",
                        id: audiobookId,
                        name: "Addon",
                        price: audiobookPrice,
                        price_type: "flat_fee",
                        value: "Audiobook"
                    });
                }
            }

            return EXISTING_ADDONS.map((addon) => {
                const result = INCLUDED_ADDONS.reduce((accumulator, currentValue) =>
                    accumulator === undefined ? setReducedValue(addon, currentValue) : accumulator, undefined
                );

                return result === undefined ? addon : result;
            }).filter(addon => addon !== null);
        }
        $.getPlanSettings = (
            IS_ESSENTIAL,
            IS_SIGNATURE,
            IS_PARAMOUNT,
            IS_HORIZON,
            IS_V6,
            IS_CHILDREN_PLAN,
            PLAN_DURATION,
            EXISTING_ADDONS,
            FULL_STAMP_META,
            ADDONS_LOG
        ) => {
            return {
                essential: IS_ESSENTIAL,
                signature: IS_SIGNATURE,
                paramount: IS_PARAMOUNT,
                horizon: IS_HORIZON,
                is_v6: IS_V6,
                children: IS_CHILDREN_PLAN,
                duration: PLAN_DURATION ?? 1,
                addons: EXISTING_ADDONS ?? [],
                stamp: FULL_STAMP_META ?? {},
                addons_log: ADDONS_LOG ?? []
            };
        };
        $.getPlanIncludedMonthlyPrice = (addonName, settings) => {
            const existingAddons = settings.addons;
            const ADDONS_LOG = settings.addons_log;
            const IS_PURCHASE_PLAN = settings.duration === 1;
            const { isInsideSubscriptionTotal, wasUpdatedByPurchasePrice } = $.isPartOfAddonIncludedInTotal(
                ADDONS_LOG,
                IS_PURCHASE_PLAN,
                addonName
            );

            if (!wasUpdatedByPurchasePrice && isInsideSubscriptionTotal) {
                const includedValue = $.findAddon(existingAddons, addonName);

                return {
                    price: includedValue?.price,
                    quantity: includedValue?.value
                };
            }

            if (wasUpdatedByPurchasePrice) {
                const logObject = $.findAddonsChanges(ADDONS_LOG, addonName).find(
                    ({addon_id, was_inside_subscription_total}) =>
                        was_inside_subscription_total !== 'false' && !!was_inside_subscription_total &&
                        Object.values(ADDONS_PRODUCT_EQUIVALENT_ADDON_META_IDS).includes(+addon_id)
                );

                return {
                    price: +logObject?.old_price,
                    quantity: +logObject?.old_value
                };
            }

            return {
                price: 0,
                quantity: 0
            };
        };
        $.addTextWithIncludedMonthlyPrice = (priceText, addonName, settings) => {
            let includedPrice = $.getPlanIncludedMonthlyPrice(addonName, settings)?.price;

            if (+includedPrice && !(isNaN(includedPrice) || IS_INFINITY(includedPrice))) {
                includedPrice = $.usdView($.toPriceForm(includedPrice));
                return `${includedPrice} per month and ` + priceText.toLowerCase();
            }
            return priceText;
        }
        $.byNameWithMaxQuantity = (arr, quantityParam) => {
            if (!arr || !Array.isArray(arr) || arr.length === 0) {
                console.log("byNameWithMaxQuantity arr typeof ", typeof arr, ' ', arr);
                return [];
            }

            return Array.from(
                arr.reduce((acc, obj) => {
                    if (obj &&
                        typeof obj === 'object' &&
                        'id' in obj &&
                        quantityParam in obj &&
                        (!acc.has(obj.id) || +obj?.[quantityParam] > +acc.get(obj.id)?.[quantityParam])
                    ) {
                        acc.set(obj.id, obj);
                    }
                    return acc;
                }, new Map()).values()
            );
        };
        /*        $.countPayedPrice = (ADDONS_LOG, name) => $.findAddonsChanges(ADDONS_LOG, name)
                    ?.reduce((accumulator, currentLog) => currentLog.new_price + accumulator, 0);*/
    });
})(jQuery);