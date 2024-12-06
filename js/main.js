////////////////////////////////////////////////////////////////////////////////
/// SLICK CAROUSEL SETTINGS
////////////////////////////////////////////////////////////////////////////////

$(document).ready(function(){
    $('.banner-slider').slick({
        dots: true,
        arrows: false,
        infinite: true,
        cssEase: 'linear',
        autoplay: false,
        autoplaySpeed: 5000,
        speed: 200, 
        pauseOnHover: false
    });
});


////////////////////////////////////////////////////////////////////////////////////////
/// MANAGE CONSENT - CHECKING COOKIES 
////////////////////////////////////////////////////////////////////////////////////////


function handleCookieConsent() {
    if(!$('#cookie-overlay').length){
        $('body').append('<div id="cookie-overlay"></div>');
    }

    const cookiePopup = $('.cookie-popup');
    const acceptButton = $('.accept-cookies');
    const cookieOverlay = $('#cookie-overlay');
    
    // Show popup on first load if consent not given
    if (!localStorage.getItem('cookieConsent')) {
        cookiePopup.addClass('active');
        cookieOverlay.addClass('active');
    }

    // Handle accept button click
    acceptButton.on('click', function() {
        localStorage.setItem('cookieConsent', 'accepted');
        cookiePopup.removeClass('active');
        cookieOverlay.removeClass('active');
    });

    // Handle manage consent button click
    $('.sticky-consent button').click(function() {
        cookiePopup.addClass('active');
        cookieOverlay.addClass('active');
    });

    // Close popup when clicking outside of it
    cookieOverlay.on('click', function() {
        cookiePopup.removeClass('active');
        cookieOverlay.removeClass('active');
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
    const $footer = $('footer, .bottom-footer');  // Add this line
    
    // this checks if content-overlay exists, if it doesnt it adds the dark overlay to the screen
    //  if length is 0 it returns true so appends the overlay div,
    // if the the length is false it returns 1 and doesnt need to append anything.
    if(!$('#content-overlay').length){
        $('body').append('<div id="content-overlay"></div>');
    }
    
    // Toggle sidebar function
    function toggleSidebar() {
        $sidebar.toggleClass('sidebar-hidden');
        $bodyContainer.toggleClass('body-shifted');
        $footer.toggleClass('body-shifted'); // this line has to be added to shift the footer as it isnt inlucded in the body for some weird reason
        // this line here turns the hamburger into an x
        $hamburger.toggleClass('active');
        // Adds active to the content-overlay when sidebar is active so the dark overlay appears
        $('#content-overlay').toggleClass('active');
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
    
    // this closes the sidebar when we click anywhere on the screen with the overlay
    // this adds a click event listener to the overlay
    $('#content-overlay').on('click', function() {
        // if overlay is clicked and doesnt have the 'sidebar-hidden' class; so is visible
        // it calls the toggleSidebar function and closes the sidebar
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
/// OWL CAROUSEL
//////////////////////////////////////////////////////////////////////////////////////

$('.our-work-examples, .bottom-bar-images').owlCarousel({
    loop: true,
    margin: 30, // Set fixed margin between items
    nav: false,
    dots: false,
    autoplay: true,
    autoplayHoverPause: true,
    autoplayTimeout: 2000,
    // this decides how many images are shown at each breakpoint
    responsive: {
        0: {
            items: 1
        },
        350:{
            items: 2
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
        },
        1450: {
            items: 8
        },
        155:{
            items: 9
        }
    }
});

