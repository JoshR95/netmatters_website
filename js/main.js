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


////////////////////////////////////////////////////////////////////////////////////////
/// MANAGE CONSENT - CHECKING COOKIES 
////////////////////////////////////////////////////////////////////////////////////////
// ... existing code ...

// Cookie consent handling
function handleCookieConsent() {
    const cookiePopup = $('.cookie-popup'); // This selects the cookie popup element
    const acceptButton = $('.accept-cookies'); // This selects the accept button
    const changeSettingsButton = $('.change-settings'); // This selects the settings button (unused in current code)
    
    // Show popup on first load if consent not given
    // !localStorage is checking if the 'accepted' value given below is not stored, show the pop up
    if (!localStorage.getItem('cookieConsent')) {
        cookiePopup.addClass('active'); // Show popup if no consent stored
    } else {
        cookiePopup.removeClass('active'); // Hide popup if consent exists
    }

    // Handle accept button click
    acceptButton.on('click', function() {
        // this is storing the accepted into the local storage, it then is used in the code above when checking the webpage on re load
        localStorage.setItem('cookieConsent', 'accepted'); // Stores consent in localStorage
        cookiePopup.removeClass('active');                 // Hide the popup when accepted
    });

    // Handle manage consent button click
    $('.sticky-consent button').click(function() {
        cookiePopup.addClass('active');         // This shows the  popup when manage consent is clicked
    });
}

// Call the function when document is ready
$(document).ready(function() {
    handleCookieConsent();                  // Run when document is ready
});



