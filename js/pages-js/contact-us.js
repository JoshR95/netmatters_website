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