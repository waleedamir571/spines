document.addEventListener('DOMContentLoaded', function() {
    console.log('Swiper Init Script Loaded');

    function initSwiper() {
        if (typeof Swiper === 'undefined') {
            console.warn('Swiper library not loaded yet, retrying in 100ms...');
            setTimeout(initSwiper, 100);
            return;
        }

        // Target both standard elementor swipers and image carousels
        var swiperContainers = document.querySelectorAll('.elementor-main-swiper, .elementor-image-carousel-wrapper.swiper');
        
        swiperContainers.forEach(function(container) {
            if (container.swiper) {
                console.log('Swiper already initialized for', container);
                return;
            }

            // Look for navigation buttons in the parent container or siblings
            // elementor-main-swiper usually has a parent .elementor-swiper
            // elementor-image-carousel-wrapper IS the container usually
            var parent = container.closest('.elementor-swiper') || container.parentElement;
            
            var nextBtn = parent ? parent.querySelector('.elementor-swiper-button-next') : null;
            var prevBtn = parent ? parent.querySelector('.elementor-swiper-button-prev') : null;

            // Default options (Mobile first approach)
            var options = {
                slidesPerView: 1,
                spaceBetween: 10,
                loop: true,
                speed: 1000,
                navigation: {
                    nextEl: nextBtn,
                    prevEl: prevBtn,
                },
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: parent ? parent.querySelector('.swiper-pagination') : null,
                    clickable: true,
                },
                breakpoints: {}
            };

            // Try to get settings from parent widget
            var widget = container.closest('.elementor-widget');
            if (widget && widget.dataset.settings) {
                try {
                    var settings = JSON.parse(widget.dataset.settings);
                    
                    // Helper to get value or fallback
                    var getValue = function(key, fallback) {
                        return settings[key] ? (parseInt(settings[key]) || fallback) : fallback;
                    };

                    // Elementor Image Carousel uses 'slides_to_show' instead of 'slides_per_view'
                    var slidesPerViewKey = settings.slides_to_show ? 'slides_to_show' : 'slides_per_view';
                    
                    // Desktop values (Elementor stores these in root keys)
                    var desktopSlides = getValue(slidesPerViewKey, 1);
                    var desktopSpace = 10; // Default
                    
                    if (settings.space_between) {
                        if (typeof settings.space_between === 'object' && settings.space_between.size) {
                             desktopSpace = parseInt(settings.space_between.size) || 0;
                        } else if (typeof settings.space_between === 'number' || typeof settings.space_between === 'string') {
                             desktopSpace = parseInt(settings.space_between) || 0;
                        }
                    } else if (settings.slides_to_show) {
                        // Image Carousel defaults often don't have space_between explicitly set in the same way, 
                        // sometimes it's implied or 0.
                        desktopSpace = 0; 
                    }

                    // Tablet values
                    var tabletSlides = getValue(slidesPerViewKey + '_tablet', desktopSlides);
                    var tabletSpace = settings.space_between_tablet && settings.space_between_tablet.size 
                                      ? parseInt(settings.space_between_tablet.size) 
                                      : desktopSpace;

                    // Mobile values
                    var mobileSlides = getValue(slidesPerViewKey + '_mobile', desktopSlides); 
                    
                    if (!settings[slidesPerViewKey + '_mobile'] && settings[slidesPerViewKey + '_tablet']) {
                         // Fallback logic
                        mobileSlides = tabletSlides;
                    }

                    var mobileSpace = settings.space_between_mobile && settings.space_between_mobile.size
                                      ? parseInt(settings.space_between_mobile.size)
                                      : (settings.space_between_tablet ? tabletSpace : desktopSpace);


                    // Set Mobile values as default (for width < 768)
                    options.slidesPerView = mobileSlides;
                    options.spaceBetween = mobileSpace;
                    
                    // Set Breakpoints
                    // >= 768px (Tablet)
                    options.breakpoints[768] = {
                        slidesPerView: tabletSlides,
                        spaceBetween: tabletSpace
                    };
                    
                    // >= 1025px (Desktop)
                    options.breakpoints[1025] = {
                        slidesPerView: desktopSlides,
                        spaceBetween: desktopSpace
                    };

                    // Other settings
                    if (settings.slides_to_scroll) {
                        options.slidesPerGroup = parseInt(settings.slides_to_scroll) || 1;
                    }
                    if (settings.speed) {
                        options.speed = parseInt(settings.speed) || 1000;
                    }
                    
                    // Infinite Loop
                    if (settings.loop === 'no' || settings.infinite === 'no') {
                        options.loop = false;
                    } else if (settings.loop === 'yes' || settings.infinite === 'yes') {
                        options.loop = true;
                    }

                    // Autoplay
                    if (settings.autoplay === 'yes') {
                        options.autoplay = {
                            delay: settings.autoplay_speed || 5000,
                            disableOnInteraction: false
                        };
                    } else if (settings.autoplay === 'no') {
                        options.autoplay = false;
                    }
                    
                    // Navigation override for Image Carousel
                    if (settings.navigation === 'none') {
                        options.navigation = false;
                    }

                } catch (e) {
                    console.error('Error parsing Elementor settings', e);
                }
            }

            // Initialize
            try {
                new Swiper(container, options);
                console.log('Swiper initialized successfully', container);
            } catch (e) {
                console.error('Error initializing Swiper', e);
            }
        });
    }

    initSwiper();
});
