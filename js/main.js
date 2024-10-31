$(document).ready(function(){
    // Debug logs
    console.log('jQuery version:', $.fn.jquery);
    console.log('Slick loaded:', typeof $.fn.slick === 'function');
    
    // Wait for DOM
    setTimeout(function() {
        try {
            $('.banner-slider').slick({
                dots: true,
                arrows: false,
                infinite: true,
                speed: 500,
                fade: true,
                cssEase: 'linear',
                autoplay: true,
                autoplaySpeed: 5000,
                pauseOnHover: false
            });
            console.log('Slick initialized successfully');
        } catch(e) {
            console.error('Error initializing slick:', e);
        }
    }, 100);
});