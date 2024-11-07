////////////////////////////////////////////////////////////////////////////////
/// SLICK CAROUSEL SETTINGS
////////////////////////////////////////////////////////////////////////////////

$(document).ready(function(){
    $('.banner-slider').slick({
        dots: true,
        arrows: false,
        infinite: true,
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 5000,
        speed: 200, 
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


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// HEADER APPEAR ON SCROLL UP
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// the main use here is a scroll tracker to apply the header appearing and to evaluate wether were 
// scrolling up or down 

// store the last known scroll position - used to determine scroll direction
let lastScrollTop = 0;
const header = document.querySelector('.header');
// define how far the user needs to scroll before header behavior changes
const scrollThreshold = 100;

// adding a scroll event listner
window.addEventListener('scroll', () => {
    // get current scroll position (works across different browsers)
    const currentScroll = window.pageYOffset || document.documentElement.scrollTop;
    
    // check if we've scrolled past our threshold,
    // if we have make the header fixed at the top of the screen
    if (currentScroll > scrollThreshold) {
        header.classList.add('header--scrolling');
        
        // compare current scroll to last scroll to determine direction
        if (currentScroll < lastScrollTop) {
            // we're scrolling UP
            // show header by sliding it down
            header.classList.add('header-visible');
        } else {
            // we're scrolling DOWN
            // hide header by sliding it up
            header.classList.remove('header-visible');
        }
    } else {
        // we're near the top of the page
        // check if header is currently in fixed position
        if (header.classList.contains('header--scrolling')) {
            // first make sure header is visible
            header.classList.add('header-visible');
            
            // wait for transition to complete (300ms matches CSS transition)
            setTimeout(() => {
                // remove fixed positioning and visibility classes making it have default css.
                header.classList.remove('header--scrolling');
                header.classList.remove('header-visible');
            }, 300);
        }
    }
    
    // update last known scroll position for next scroll event
    lastScrollTop = currentScroll;
});


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/// SIDE BAR 
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$(function() {
    const $hamburger = $('.hamburger-icon.header');
    const $sidebar = $('.sidebar');
    const $bodyContainer = $('#body-container');
    const $body = $('body');
    
    // Toggle sidebar function
    function toggleSidebar() {
        $sidebar.toggleClass('sidebar-hidden');
        $bodyContainer.toggleClass('body-shifted');
        // this line here turns the hamburger into an x
        $hamburger.toggleClass('active');
        $body.toggleClass('body-no-scroll');
    }
    
    // Hamburger click event
    $hamburger.on('click', function(e) {
        e.stopPropagation(); // Prevent click from bubbling to body
        toggleSidebar();
    });
    
    // Click outside sidebar to close
    $bodyContainer.on('click', function() {
        if (!$sidebar.hasClass('sidebar-hidden')) {
            toggleSidebar();
        }
    });
    
    // Prevent sidebar clicks from closing
    $sidebar.on('click', function(e) {
        e.stopPropagation();
    });
});

//////////////////////////////////////////////////////////////////////////////////////

$('.bottom-bar-images').owlCarousel({
    loop: true,
    margin: 30, // Set fixed margin between items
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 2000,
    responsive: {
        0: {
            items: 1
        },
        576: {
            items: 3
        },
        768: {
            items: 4
        },
        992: {
            items: 5
        },
        1200: {
            items: 6
        }
    }
});