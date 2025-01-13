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

document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    if (!form) return;

    const inputs = form.querySelectorAll('input[required], textarea[required]');

    // Validation patterns
    const patterns = {
        name: /^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/,
        email: /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/,
        phone: /^(?:\+?\d{10,}|\d{10,})$/
    };

    const showError = (input) => {
        input.classList.add('invalid');
    };

    const removeError = (input) => {
        input.classList.remove('invalid');
    };

    const validateInput = (input) => {
        // Check if empty
        if (!input.value.trim()) {
            showError(input);
            return false;
        }

        // Pattern validation for specific fields
        if (patterns[input.id]) {
            if (!patterns[input.id].test(input.value.trim())) {
                showError(input);
                return false;
            }
        }

        removeError(input);
        return true;
    };

    // Real-time validation
    inputs.forEach(input => {
        input.addEventListener('blur', () => validateInput(input));
        input.addEventListener('input', () => validateInput(input));
    });

    // Form submission
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        let isValid = true;
        
        inputs.forEach(input => {
            if (!validateInput(input)) {
                isValid = false;
            }
        });

        if (isValid) {
            form.removeEventListener('submit', arguments.callee);
            form.submit();
        }
    });
});