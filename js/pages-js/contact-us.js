/////////////////////////////////////////
/// CONTACT-US ACCORDIAN
/////////////////////////////////////////

// wait for the DOM  to be ready and all HTML elements are loaded before executing
$(document).ready(function() {
    // this jQuery finds all h3's that are a child of contact-section- accordian and attaches a event listner for a click
    $('.contact-section-accordian h3').click(function() {
        // 'this' refers to the element clicked so the h3, .next finds the next immediate sibling and attaches a class of active to it
        // the .slideToggle() is method chaining and attaches a smooth slide function when it gets the active class
        // theres css that displays the content when the active class is given
        $(this).toggleClass('active')
        $(this).next('.accordian-dropdown-content').toggleClass('active');
    })
});


/////////////////////////////////////////////
/// FORM VALIDATION 
/////////////////////////////////////////////

$(document).ready(function() {
    // Form validation
    function validateForm() {
        let isValid = true;
        const errors = {};

        // Name validation
        const name = $('#name').val().trim();
        if (!name) {
            errors.name = 'Name is required';
            isValid = false;
        }

        // Email validation
        const email = $('#email').val().trim();
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!email) {
            errors.email = 'Email is required';
            isValid = false;
        } else if (!emailRegex.test(email)) {
            errors.email = 'Please enter a valid email';
            isValid = false;
        }

        // Phone validation
        const phone = $('#phone').val().trim();
        const phoneRegex = /^(?:0|\+44)(?:\d\s?){9,10}$/;
        if (!phone) {
            errors.phone = 'Phone number is required';
            isValid = false;
        } else if (!phoneRegex.test(phone)) {
            errors.phone = 'Please enter a valid UK phone number';
            isValid = false;
        }

        // Message validation
        const message = $('#message').val().trim();
        if (!message) {
            errors.message = 'Message is required';
            isValid = false;
        }

        return { isValid, errors };
    }

    // Show error message under input
    function showError(field, message) {
        const errorDiv = $(`<div class="error-message">${message}</div>`);
        $(field).addClass('error').after(errorDiv);
    }

    // Clear all error messages
    function clearErrors() {
        $('.error-message').remove();
        $('.error').removeClass('error');
        $('.form-success, .form-error').remove();
    }

    // Form submission
    $('#contactForm').on('submit', function(e) {
        e.preventDefault();
        clearErrors();

        const validation = validateForm();
        if (!validation.isValid) {
            // Show validation errors
            Object.keys(validation.errors).forEach(key => {
                showError($(`#${key}`), validation.errors[key]);
            });
            return;
        }

        // Get form data
        let formData = $(this).serialize();

        // Submit form using AJAX
        $.ajax({
            type: 'POST',
            url: 'process-contact.php',
            data: formData,
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    // Clear the form
                    $('#contactForm')[0].reset();
                    // Show simple success message
                    $('.contact-section-form').prepend('<div class="form-success">Message sent successfully</div>');
                } else {
                    // Handle validation errors from PHP
                    if (response.errors) {
                        // Show specific validation errors
                        Object.keys(response.errors).forEach(key => {
                            showError($(`#${key}`), response.errors[key]);
                        });
                    } else {
                        // Show generic error message
                        $('.contact-section-form').prepend('<div class="form-error">Failed to send message</div>');
                    }
                }
            },
            error: function() {
                // Show simple error message
                $('.contact-section-form').prepend('<div class="form-error">Failed to send message</div>');
            }
        });
    });

    // Real-time validation on blur
    $('#contactForm input, #contactForm textarea').on('blur', function() {
        clearErrors();
        const field = $(this);
        const value = field.val().trim();
        
        if (!value && field.prop('required')) {
            showError(field, `${field.prev('label').text().replace(' *', '')} is required`);
        }
    });
});