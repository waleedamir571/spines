var textMessageAgreementCount = 0;
var inputRequiredPatter = '.*\\S.*';

document.addEventListener('DOMContentLoaded', function() {
	
	initFormsValidation();
	initFieldEvents();
	initAgreementCheckboxes();

    setTimeout( function() {
        initPhoneField();
    }, 100);
	
    var isPerfmattersUsed = document.getElementById('perfmatters-delayed-scripts-js');
	
	// whem Perfmatters optimization is enabled
	if (isPerfmattersUsed ) {
    	window.addEventListener('perfmatters-allScriptsLoaded', function() {
    		jQuery(document).ready(function() {
    			jQuery( document ).on('submit_success', openQuestionnaire);
    		});
    		initPopupForm();
    	});
	} else {
	    // when Perfmatters optimization not used 
	    jQuery(document).ready(function() {
    		jQuery( document ).on('submit_success', openQuestionnaire);
    		initPopupForm();
		});
	}
	
});

function initAgreementCheckboxes(parent) {
    if (!parent) 
        parent = document;
    
    parent.querySelectorAll('.form-agreement input[name="form_fields[textMessageAgreement]"]').forEach(function(el){
        textMessageAgreementCount++;
        el.id = el.id + textMessageAgreementCount;
        el.parentElement.querySelector('label').setAttribute('for', el.id); 
    });
}

function initFieldEvents(parent) {
    
    if (!parent) 
        parent = document; 
    
    // validation on user input something
    parent.querySelectorAll('.form-errors input, .form-errors textarea, .form-errors select').forEach(function(el){
        el.addEventListener('input', function() {
            let wrapper = this.closest(".elementor-field-group");
            let form = this.closest('form');
            
            // if ( wrapper.classList.contains('has-error-message') ) {
            if ( form.hadTryToSubmit ) {
               
                if (!myCheckValidity(this) && this.value != '') {
                    let reqMessage = wrapper.querySelector('.required-message');
                    if ( reqMessage ) reqMessage.remove();
                    
                    wrapper.classList.remove('has-error-message');

                    if ( !myCheckValidity(this) ) {
                        if ( this.type == 'email' )
                            showFieldMessage(this, getInvalidEmailMessage(), 'invalid-email-message');
                        else 
                            showFieldMessage(this);
                    }
                } 
                
                if ( ( !this.intl && myCheckValidity(this) ) ||  ( this.intl && this.intl.isValidNumber() ) ) {
                    wrapper.classList.remove('has-error-message');
                    let error = wrapper.querySelector('.elementor-message')
                    if (error ) error.remove();
                    // .invalid-phone-message
                } 
                
                if ( this.intl && !this.intl.isValidNumber()) {
                    showFieldMessage(this, getInvalidPhoneMessage(), 'invalid-phone-message');
                }
            }
            
        });
    })
    
}

function initFormsValidation(parent) {
    
    if (!parent) 
        parent = document; 
        
    var forms = parent.querySelectorAll('.form-errors .elementor-form');
    
    if (!forms || forms.length === 0) {
        return;
    }

    for (let i = 0; i < forms.length; i++) {
		
        let form = forms[i]; 
        
        form.noValidate = true;

 		form.querySelectorAll('input[type=text][required]').forEach(
			function(element) { 
				element.setAttribute('pattern',inputRequiredPatter); 
			});

		let submitButton = form.querySelector('.elementor-button[type="submit"]');
		
        submitButton.addEventListener("click", validateForm);
    }
}

function validateForm(e) {
    var currentForm = this.closest('form');
    var phoneField;
    
    currentForm.hadTryToSubmit = true;
    
    // Clear previous custom errors
    currentForm.querySelectorAll(".elementor-message").forEach(function(el){
        let wrapper = el.closest('.elementor-field-group')
        if ( wrapper ) {
            wrapper.classList.remove('has-error-message');
        }
        el.remove();
    });

    // console.log('currentForm: ', currentForm);
    
    currentForm.querySelectorAll("input:not([type=hidden]), textarea, select").forEach(function(field) {
    
    //  console.log('field: ', field);    

        if (!myCheckValidity(field) && field.type != 'email') {
            e.preventDefault();
            e.stopImmediatePropagation();
            showFieldMessage(field);
            
            
        } else if ( field.type == 'email' && !myCheckValidity(field)) {
            e.preventDefault();
            e.stopImmediatePropagation();
            showFieldMessage(field, getInvalidEmailMessage(), 'invalid-email-message');
            
        } else if ( field.intl && !field.intl.isValidNumber()) {
        
            e.preventDefault();
            e.stopImmediatePropagation();
            
            showFieldMessage(field, getInvalidPhoneMessage(), 'invalid-phone-message');
        }
        
        if (field.intl) phoneField = field;
        
    });
    
    
    currentForm.hasErrors = (currentForm.querySelectorAll('.elementor-message').length != 0);
    
    // if no errors 
    if ( !currentForm.hasErrors && phoneField ) {
        var countryCode = phoneField.intl.getSelectedCountryData().dialCode;
        var phoneNumber = phoneField.intl.getNumber();
    
        if (!phoneNumber.startsWith("+")) {
            phoneNumber = '+' + countryCode+ phoneNumber;
        }
        
        phoneField.value = phoneField.value.split(' ').join('').split('-').join('').split('(').join('').split(')').join('');
        
        let form = phoneField.closest('form');
        
        let hiddenPhone = form.querySelector('input[name="form_fields[phone]"]');
        if ( hiddenPhone) hiddenPhone.value = phoneNumber;
        
        // console.log('phoneField = ',phoneField.value);
        // console.log('phoneNumber: ', phoneNumber);
    }            
}

function showFieldMessage(field, message, messageClass) {
    var error = document.createElement("div");
    error.className = "elementor-message elementor-message-danger elementor-input-message "+(messageClass ? messageClass : getValidationClass(field));
    
    if (message)
        error.textContent = message;
    else 
        error.textContent = getValidationMessage(field);
        

    var wrapper = field.closest(".elementor-field-group");
    wrapper.classList.add('has-error-message');
    
    // for radio buttons
    var prevMessage = wrapper.querySelector('.elementor-message');
    if ( prevMessage ) prevMessage.remove();
    
    // console.log("WRAPPER:", wrapper, "FIELD:", field);
    wrapper.insertAdjacentElement("beforeend", error);
}

function myCheckValidity(field) {
    if ( field ) {
        if (field.type == 'email') {
            return isValidEmail(field.value);
        } else {
            return field.checkValidity();
        }
    }
}

//RegExp not working in stupid EA js editor 
function isValidEmail(email) {
	if (email.includes(' ')) return false;
	var parts = email.split('@');
	if (parts.length !== 2) return false;
	var [local, domain] = parts;
	if (local.indexOf('.') == local.length - 1 ) return false;
	if (!local || !domain) return false;
	if (!domain.includes('.')) return false;
	var domainParts = domain.split('.');
	if (domainParts.some(part => part.length === 0)) return false;
	return true;
}

function getInvalidPhoneMessage() {
    return 'Invalid phone number.';
}

function getInvalidEmailMessage() {
    return 'Please enter valid email';
}

function getValidationMessage(field) {
    if (field.validity.valueMissing) {
		if (field.type == 'checkbox')
			return "Please fill the checkbox to proceed.";
		else
			return "This field is required.";
	}

    if (field.validity.typeMismatch ) return "Please enter a valid value.";
    if (field.validity.patternMismatch) {
		if ( field.getAttribute('pattern') == inputRequiredPatter ) return "Please enter a valid value.";
		return "Invalid format.";
	}
    if (field.validity.tooShort) return "Value is too short.";
    if (field.validity.tooLong) return "Value is too long.";
    if (field.validity.rangeOverflow) return "Value is too high.";
    if (field.validity.rangeUnderflow) return "Value is too low.";
    return "Please enter a valid value.";
}

function getValidationClass(field) {
    if (field.validity.valueMissing) return "required-message";
    if (field.validity.typeMismatch) return "valid-value-message";
    if (field.validity.patternMismatch) return "invalid-format-message";
    if (field.validity.tooShort) return "too-short-message";
    if (field.validity.tooLong) return "too-long-message";
    if (field.validity.rangeOverflow) return "too-high-message";
    if (field.validity.rangeUnderflow) return "too-low-message";
    return "invalid-value-message";    
}

function initPopupForm() {
    jQuery(window).on('elementor/popup/show', function(event, popupID) {
        if ( popupID ) {
            var popup = jQuery('#elementor-popup-modal-'+popupID).get(0);
            console.log('id: ', popupID, 'popup element: ', popup );
			
			initFormsValidation(popup);
			initFieldEvents(popup);
			initAgreementCheckboxes(popup);
            
            setTimeout( function() {
                initPhoneField(popup);
            }, 100);

        }
    });
}

function openQuestionnaire(e) {
 	if ( jQuery(e.target).closest('.form-redirect-ques').length ) {

        console.log('openQuestionnaire: ', e.target)
		
		var fullNameField = e.target.querySelector('[name="form_fields[name]"]');
		var firstNameField = e.target.querySelector('[name="form_fields[first_name]"]');
		var lastNameField = e.target.querySelector('[name="form_fields[last_name]"]');
		var emailField = e.target.querySelector('[name="form_fields[email]"]');
		var phoneField = e.target.querySelector('[name="form_fields[phone]"]');

		if ( fullNameField ) {
			var fullName = fullNameField ? fullNameField.value : '';
			var fullNameArray = fullName.split(' ');

			var first_name = fullNameArray[0] ? fullNameArray[0] : '';
			var last_name = fullNameArray[1] ? fullNameArray[1] : '';
		} else if ( firstNameField && lastNameField) {

			var first_name = firstNameField ? firstNameField.value : '';
			var last_name = lastNameField ? lastNameField.value : '';
		}

		var email = emailField ? emailField.value : '';
		var phone = phoneField ? phoneField.value : '';

		var redirectPage = "/ques-phase/?first_name=" + encodeURIComponent(first_name) +
			"&last_name=" + encodeURIComponent(last_name) +
			"&email=" + encodeURIComponent(email) +
			"&phone=" + encodeURIComponent(phone);

		window.location = redirectPage;
	} 
}

function initPhoneField(parent) {

    if (!parent) 
        parent = document; 

	parent.querySelectorAll('.form-phone .elementor-field-type-tel input[type="tel"]').forEach(function (element) {

		element.removeAttribute('placeholder');
		element.removeAttribute('pattern');
		// var iconElement = element.parentElement.querySelector('.input-icons');
		// if ( iconElement ) iconElement.style.display = 'none';

        element.intl = window.intlTelInput(element, {
            separateDialCode: true,
            initialCountry: "us",
// 			loadUtils: () => import("https://cdn.jsdelivr.net/npm/intl-tel-input@25.10.1/build/js/utils.js"),
            loadUtils:  function () { return import(window.location.origin+'/'+'wp-content/themes/hello-elementor-child/resources/js/utils-25.js') },
        });

	});
}