////////////////////////////////////////////////////////////////////////////////
/// SLICK CAROUSEL SETTINGS
////////////////////////////////////////////////////////////////////////////////

$(document).ready(function(){
    $('.banner-slider').slick({
        dots: true,
        arrows: false,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        autoplay: false,
        autoplaySpeed: 5000,
        pauseOnHover: false
    });
});


//////////////////////////////////////////////////////////////////////////////////
/// MANAGE CONSENT JS 
//////////////////////////////////////////////////////////////////////////////////

// Wait for the entire document to be fully loaded and ready
$(document).ready(function() {
    // Show popup when "Manage consent" is clicked
    // Select any button inside elements with class 'sticky-consent' and attach a click event handler to those buttons
    $('.sticky-consent button').click(function() {
        // When clicked, find elements with class 'cookie-popup' and add the class 'active' to them
        // when active we give css to display the box
        $('.cookie-popup').addClass('active');
    });
});