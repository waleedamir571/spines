(function ($) {
    $(document).ready(function() {
        $.showLoader = function () {
            let popupOverlay = document.getElementById('popupOverlay');
            document.getElementById('loader').style.display = 'flex';
            popupOverlay.style.display = 'block';
        };
        $.hideLoader = function () {
            let popupOverlay = document.getElementById('popupOverlay');
            document.getElementById('loader').style.display = 'none';
            popupOverlay.style.display = 'none';
        };
        // add price under inputs
        $.addPrice = function (name, price, ADDONS_INPUTS_CONDITIONS) {
            const notificationId = $.findAddon(
                ADDONS_INPUTS_CONDITIONS.map(({inp}) => inp),
                name
            )?.name;
            const element = document.getElementById(notificationId);

            if (element)
                element.innerHTML = price;
        };
        $.setMessageIfWrongInpValue = function (
            inpVal, isValueDowngraded, max, min, name, updateAddonsBtn, step, price, ADDONS_INPUTS_CONDITIONS
        ) {
            const addErrorText = (text) => $.addPrice(
                name,
                `<span style="color: red">${text}</span><br/>`,
                ADDONS_INPUTS_CONDITIONS
            );

            if (isNaN(price) || IS_INFINITY(price)) {
                addErrorText("An error in addon price has occurred.");
            } else if (
                (IS_SAME_ADDON(name, "Ghostwriting") ||
                 IS_SAME_ADDON(name, "Line editing") ||
                 IS_SAME_ADDON(name, "Typing") ||
                 IS_SAME_ADDON(name, "OCR")) &&
                inpVal !== 0 &&
                inpVal < min
            ) {
                addErrorText(`Value must be at least ${min} or 0.`);
            } else if (inpVal > max) {
                addErrorText(`Please enter ${max} or less.`);
            } else if (isValueDowngraded) {
                addErrorText("You can't downgrade addons.");
            } else if (inpVal % step !== 0) {
                addErrorText(`Value must be a multiple of ${step}.`);
            } else {
                addErrorText("An unexpected error has occurred.");
            }
            updateAddonsBtn.disabled = true;
        };
        $.toggleElement = function (currentElement) {
            if (currentElement.id === 'upgrade-all-container' || currentElement.id === 'choose-upgrade-container') {
                if (currentElement.style.display === "none")
                    currentElement.style.display = "flex";
                else
                    currentElement.style.display = "none";
            } else {
                if (currentElement.style.display === "none")
                    currentElement.style.display = "inline-block";
                else
                    currentElement.style.display = "none";
            }
        };
        /*
        $.toggleMarginForContainer = function (currentElement) {
            if (currentElement.id === 'upgrade-all-container') {
                if (currentElement.style.marginTop === '0px')
                    currentElement.style.marginTop = '100px';
                else
                    currentElement.style.marginTop = '0px';
            }
        };*/
        $.toggleAnimationElement = function (currentElement) {
            if (currentElement.classList.contains('fade-out')) {
                currentElement.classList.add('fade-in');
                if (currentElement.id === 'upgrade-membership-plan' ||
                    currentElement.id === 'upgrade-purchase-plan'
                ) {
                    currentElement.classList.remove('fade-out');
                }
            } else {
                if (currentElement.id !== 'upgrade-production-plan') {
                    currentElement.classList.add('fade-out');
                }
            }
        };
        $.toggleUpgradeAddonsBtnName = function (currentElement) {
            const upgradingTitle = document.getElementsByClassName('choose-option');
            if (currentElement.innerText?.includes('Upgrade')) {
                currentElement.innerText = 'Cancel';
                if (upgradingTitle?.length > 0) {
                    upgradingTitle[0].style.display = 'none';
                }
            } else {
                let text = currentElement.id === 'upgrade-production-plan-btn' ?
                    'Upgrade Production Plan' :
                    'Upgrade Membership Plan';
                text = currentElement.id === 'upgrade-addons-card-btn' ? 'Upgrade Addons' : text;
                currentElement.innerText = text;
                if (upgradingTitle?.length > 0) {
                    upgradingTitle[0].style.display = 'block';
                }
            }
        };
        $.showResultPopup = function (title, text) {
            const popupUpgradingText = document.getElementById('popupUpgradingText');
            const popupUpgrading = document.getElementById('popupUpgrading');
            const popupOverlay = document.getElementById('popupOverlay');
            const popupTitle = document.getElementById('upgrading-popup-title');
            const successPic = document.getElementById('upgrading-success-pic');
            const errorPic = document.getElementById('upgrading-error-pic');
            const backToDashboardBtn = document.getElementById('popup-addons-btn');
            const isError = title === 'ERROR';

            popupUpgrading.style.display = 'flex';
            popupTitle.innerText = title;
            popupUpgradingText.innerText = text;
            popupOverlay.style.display = 'block';

            if (isError) {
                errorPic.style.display = 'flex';
            } else {
                successPic.style.display = 'flex';
            }

            backToDashboardBtn.addEventListener('click', () => {
                if (!isError) {
                    window.parent.postMessage('Addons_updated_successfully', '*');
                }
            })

            popupOverlay.addEventListener('click', () => {
                if (document.getElementById('loader').style.display === 'none') {
                    popupUpgrading.style.display = 'none';
                    popupOverlay.style.display = 'none';
                    if (!isError) {
                        // location.reload();
                        $.showLoader();
                        window.location.href = window.location.href + "&intent=addons";
                    }
                }
            })
        };
        $.showCancellationPopup = function (
            text,
            total,
            list,
            popupText,
            popupAmount,
            popupList,
            customPopup,
            popupOverlay
        ) {
            popupText.innerHTML = text;
            popupAmount.innerHTML = total;
            popupList.innerHTML = list;
            customPopup.style.display = 'block';
            popupOverlay.style.display = 'block';
        };
        $.showPlanIncludedAddons = function (ADDONS_INPUTS_CONDITIONS, settings) {
            ADDONS_INPUTS_CONDITIONS.forEach(({inp, getIncludedVal, getIncludedCondition, isMaxValueIncluded}) => {
                if (inp) {
                    if (getIncludedCondition(settings) && isMaxValueIncluded(settings)) {
                        if (inp.type === "checkbox") {
                            inp.checked = true;
                        } else {
                            inp.value = getIncludedVal(settings);
                        }
                        inp.disabled = true;

                        const planName =
                            (settings?.paramount && 'Paramount') ||
                            (settings?.signature && 'Signature') ||
                            (settings?.horizon && 'Horizon') ||
                            'Essential';

                        $.addPrice(inp.name, `Included in ${planName} plan`, ADDONS_INPUTS_CONDITIONS);
                    }
                }
            });
        };
        $.addEventListenerWithTracking = function (element, event, handler, eventListeners) {
            element.addEventListener(event, handler);
            const newEventsList = [...eventListeners];
            newEventsList.push({ element, event, handler });

            return newEventsList;
        };
        $.removeAllEventListeners = function (eventListeners) {
            eventListeners.forEach(({ element, event, handler }) => {
                element.removeEventListener(event, handler);
            });
            return [];
        }
        $.setUpPurchasePricePlanUpgradingPage = function (
            backArrowBtn,
            isPurchaseProductionMode,
            commonBackArrowBtnOnclick,
            togglePurchaseMode,
            IS_ESSENTIAL,
            handlePlanSwitch,
            IS_V6 = true
        ) {
            togglePurchaseMode(true);

            if (backArrowBtn) {
                backArrowBtn.onclick = (e) => {
                    e.preventDefault();
                    if (!isPurchaseProductionMode) {
                        $.showLoader();
                        commonBackArrowBtnOnclick(e);
                    } else {
                        togglePurchaseMode(false);
                        $.hideLoader();
                    }
                };
            }

            const newPlansOptions = ['paramount'];
            IS_V6 && newPlansOptions.push('horizon');
            IS_ESSENTIAL && newPlansOptions.push('signature');

            newPlansOptions.forEach(plan => {
                document.getElementById(`choose-upgrade-to-${plan}`).onclick = () =>
                    handlePlanSwitch(IS_ESSENTIAL ? 'essential' : 'signature', plan);
            });
        }
    });
})(jQuery);