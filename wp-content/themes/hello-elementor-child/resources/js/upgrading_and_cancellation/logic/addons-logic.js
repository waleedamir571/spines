(function ($) {
    $(document).ready(function(){
        const findAddon = (addonsArray, addonName) => addonsArray?.find((addon) => {
            const name = addon?.name === "Addon" ? addon.value : addon.name;
            return IS_SAME_ADDON(name, addonName);
        });

        $.countNewCost = function (addonName, inpVal, step) {
            const cost = GET_ADDON_COST(addonName, true, 1);
            const existingAddon = findAddon(php_vars.existing_addons, addonName);
            const existingQuantity = existingAddon?.name === "Addon" ? 1 : +existingAddon?.value;
            const valueToPay = existingQuantity ? inpVal - existingQuantity : inpVal;

            // Calculate the new cost
            let newCost = cost * (valueToPay / step);

            if (php_vars.membership_discount  === 'true') {
                newCost *= MEMBERSHIP_DISCOUNT;
            }

            return $.toPriceForm(newCost);
        }
        $.getAddonId = function (PLAN_DURATION, addonName) {
            let globalAddonsList = PLAN_DURATION === 9 ?
                GLOBAL_ADDONS_V6_9MONTHS :
                PLAN_DURATION === 6 ? GLOBAL_ADDONS_V6_6MONTHS : GLOBAL_ADDONS_V6_3MONTHS;

            if (PLAN_DURATION === 1 || globalAddonsList?.length < 0) {
                globalAddonsList = GLOBAL_ADDONS_PURCHASE;
            }

            for (const addon of globalAddonsList) {
                if (IS_SAME_ADDON(addon.name, addonName)) {
                    return +addon.id;
                }
            }

            return null;
        };
        $.getAddonNameById = (id) => GLOBAL_ADDONS_PURCHASE.concat(
            GLOBAL_ADDONS_V5,
            GLOBAL_ADDONS_V4,
            GLOBAL_ADDONS_V6_3MONTHS,
            GLOBAL_ADDONS_V6_6MONTHS,
            GLOBAL_ADDONS_V6_9MONTHS
        ).find((addon) => +id === +addon.id)?.name;
        /*        $.getAddonPrice = function (addon, isV6, PLAN_DURATION) {
                    const name = addon.name === "Addon" ? addon.value : addon.name;
                    const cost = GET_ADDON_COST(name, isV6, PLAN_DURATION);
                    const fullPrice = +ADDONS_PRICES.find((i) => IS_SAME_ADDON(name, i.name))?.full;
                    const quantity = addon.name === "Addon" ? 1 : +addon.value;
                    let step = +GET_STEP_VALUE(name);

                    // Full Price - (1st month cost of addons * quantity of addon/steps)
                    return +(((fullPrice*(quantity/step))-(cost*(quantity/step))).toFixed(2));
                };*/
        $.getAddonsSum = function (addons) {
            return addons?.length > 0 ?
                $.toPriceForm(addons.reduce((sum, el) => sum + el.price, 0))
                : 0;
        };
        $.findAddonsChanges = (ADDONS_LOG, addonName) => ADDONS_LOG?.filter(
            (addon) => IS_SAME_ADDON(
                addonName,
                addon.addon_name === "Addon" ? addon.new_value : addon.addon_name
            )
        );
        $.IS_ADDON_VALUE_DOWNGRADED = function (
            inpVal,
            existingAddon,
            ADDONS_INPUTS_CONDITIONS,
            settings
        ) {
            const name = existingAddon?.name;
            const value = existingAddon?.value;

            return name !== "Custom services" &&
                (existingAddon &&
                    // is input downgraded
                    ((String(inpVal).trim() === '' && String(value).trim() !== '') ||
                        (+inpVal < +value || IS_SAME_ADDON("Children’s book design", name) && !inpVal))
                    &&
                    // values to be ignored
                    !((settings.horizon || settings.paramount || settings.signature && settings.children || settings.duration === 24) &&
                        $.IS_FULL_ADDON_INCLUDED_IN(
                            ADDONS_INPUTS_CONDITIONS,
                            name,
                            value,
                            settings
                        )
                    )
                )
        };
        $.findAddon = findAddon;
    });
})(jQuery);