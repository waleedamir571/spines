(function() {
    console.log('Swiper Init: Script loaded');

    function getSwiper() {
        if (typeof Swiper !== 'undefined') return Swiper;
        if (typeof elementorFrontend !== 'undefined' && elementorFrontend.utils && elementorFrontend.utils.swiper) return elementorFrontend.utils.swiper;
        if (window.Swiper) return window.Swiper;
        return null;
    }

    function init() {
        var SwiperClass = getSwiper();
        
        if (!SwiperClass) {
            console.warn('Swiper not found, retrying...');
            setTimeout(init, 200);
            return;
        }

        console.log('Swiper found, initializing...');

        var containers = document.querySelectorAll('.elementor-main-swiper');
        
        containers.forEach(function(container) {
            if (container.swiper) {
                console.log('Swiper already initialized:', container);
                return;
            }

            // Manually fix width/height issues
            container.style.width = '100%';
            container.style.height = 'auto';
            container.style.overflow = 'hidden';
            container.style.opacity = '1'; // Ensure visible immediately

            // Ensure wrapper exists
            var wrapper = container.querySelector('.swiper-wrapper');
            if (!wrapper) {
                console.error('Swiper wrapper not found in', container);
                return;
            }
            // Ensure wrapper has display flex
            wrapper.style.display = 'flex';

            // Find navigation
            var parent = container.closest('.elementor-swiper') || container.parentElement;
            var nextEl = parent ? parent.querySelector('.elementor-swiper-button-next') : null;
            var prevEl = parent ? parent.querySelector('.elementor-swiper-button-prev') : null;
            var paginationEl = parent ? parent.querySelector('.swiper-pagination') : null;

            // Basic options
            var options = {
                slidesPerView: 1,
                spaceBetween: 10,
                loop: true,
                speed: 1000,
                grabCursor: true,
                autoHeight: true, 
                observer: true, 
                observeParents: true,
                navigation: {
                    nextEl: nextEl,
                    prevEl: prevEl,
                },
                pagination: {
                    el: paginationEl,
                    clickable: true,
                },
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false
                }
            };

            // Parse settings
            var widget = container.closest('.elementor-widget');
            if (widget && widget.dataset.settings) {
                try {
                    var settings = JSON.parse(widget.dataset.settings);
                    
                    if (settings.autoplay === 'no') options.autoplay = false;
                    if (settings.autoplay === 'yes' && settings.autoplay_speed) options.autoplay.delay = parseInt(settings.autoplay_speed);
                    
                    if (settings.loop === 'no') options.loop = false;
                    if (settings.speed) options.speed = parseInt(settings.speed);
                    
                    if (settings.slides_per_view && settings.slides_per_view !== 'default') {
                        options.slidesPerView = parseInt(settings.slides_per_view) || 1;
                    }

                    options.breakpoints = {
                        768: {
                            slidesPerView: settings.slides_per_view_tablet ? parseInt(settings.slides_per_view_tablet) : (options.slidesPerView > 1 ? 2 : 1),
                            spaceBetween: settings.space_between_tablet ? parseInt(settings.space_between_tablet.size || settings.space_between_tablet) : 10
                        },
                        1025: {
                            slidesPerView: options.slidesPerView,
                            spaceBetween: settings.space_between ? parseInt(settings.space_between.size || settings.space_between) : 10
                        }
                    };
                    
                } catch (e) {
                    console.error('Settings parse error', e);
                }
            }

            try {
                // IMPORTANT: Swiper 8+ requires modules if using core version, BUT
                // The provided file is a minified bundle (swiper.min.js), which usually includes modules.
                // However, accessing modules via SwiperClass.Navigation might fail if it's the global UMD build.
                // We will try to pass modules if available on the class constructor.

                if (SwiperClass.Navigation && SwiperClass.Pagination && SwiperClass.Autoplay) {
                     options.modules = [SwiperClass.Navigation, SwiperClass.Pagination, SwiperClass.Autoplay];
                }

                var swiper = new SwiperClass(container, options);
                console.log('Swiper initialized success:', container);
                
                // Force layout update
                setTimeout(function() {
                    swiper.update();
                }, 100);
                
            } catch (err) {
                console.error('Swiper init failed:', err);
                // Fallback: Try without modules key if it failed
                try {
                    delete options.modules;
                    var swiperFallback = new SwiperClass(container, options);
                    console.log('Swiper initialized success (fallback):', container);
                } catch(fallbackErr) {
                     console.error('Swiper fallback init failed:', fallbackErr);
                }
            }
        });
    }

    window.addEventListener('load', init);
    if (document.readyState === 'complete') init();
})();
