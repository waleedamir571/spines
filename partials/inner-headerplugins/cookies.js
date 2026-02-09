/*
(function ($) {
    $(document).ready(function() {
        $.addCookies = function (recalcPricesFunc) {
            function setCookie(name, value, days) {
                if (typeof value === 'string' && value?.trim() === '') {
                    deleteCookie(name); // Remove existing cookie if value is empty
                    return;
                }

                const date = new Date();
                date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
                const expires = "expires=" + date.toUTCString();
                document.cookie = `${name}=${encodeURIComponent(value)};${expires};path=/;Secure;SameSite=Lax`;
                recalcPricesFunc();
            }

            function getCookie(name) {
                const cookies = document.cookie.split(';');
                for (let i = 0; i < cookies.length; i++) {
                    const cookie = cookies[i]?.trim();
                    if (cookie.startsWith(name + "=")) {
                        return decodeURIComponent(cookie.substring(name.length + 1));
                    }
                }
                return "";
            }

            function deleteCookie(name) {
                document.cookie = name + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
            }

            const formFields = document.querySelectorAll("input, select, textarea");

            formFields.forEach((field) => {
                const fieldName = field.id || field.name;
                if (!fieldName) return;

                const savedValue = getCookie(fieldName);
                if (savedValue) {
                    if (field.type === "checkbox" || field.type === "radio") {
                        field.checked = savedValue === "true";
                    } else {
                        field.value = savedValue;
                    }
                }

                field.addEventListener("change", (event) => {
                    if (field.type === "checkbox" || field.type === "radio") {
                        setCookie(fieldName, field.checked, 7);
                    } else {
                        const value = field.value;
                        if (value) { // Only save if value is not empty
                            setCookie(fieldName, value, 7);
                        } else {
                            deleteCookie(fieldName); // Remove cookie if value is empty
                        }
                    }
                });
            });
        }
    });
})(jQuery);
*/