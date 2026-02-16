document.addEventListener('DOMContentLoaded', function() {
    console.log('Custom Slider Script Loaded');

    // --- Part 1: Testimonial Slider (Vanilla JS, 1 slide per view) ---
    var testimonialSliders = document.querySelectorAll('.elementor-main-swiper:not(.books-carousel .elementor-main-swiper)');
    
    testimonialSliders.forEach(function(sliderContainer, index) {
        if (sliderContainer.closest('.books-carousel')) return;

        var wrapper = sliderContainer.querySelector('.swiper-wrapper');
        var slides = sliderContainer.querySelectorAll('.swiper-slide');
        
        if (!wrapper || slides.length === 0) return;

        // Styles
        sliderContainer.style.overflow = 'hidden';
        sliderContainer.style.position = 'relative';
        sliderContainer.style.width = '100%';
        
        wrapper.style.display = 'flex';
        wrapper.style.transition = 'transform 0.5s ease-in-out';
        wrapper.style.width = '100%';
        
        slides.forEach(function(slide) {
            slide.style.flexShrink = '0';
            slide.style.width = '100%'; 
        });

        // State
        var currentIndex = 0;
        var totalSlides = slides.length;
        var intervalId;

        // Navigation
        var parent = sliderContainer.closest('.elementor-swiper') || sliderContainer.parentElement;
        var nextBtn = parent ? parent.querySelector('.elementor-swiper-button-next') : null;
        var prevBtn = parent ? parent.querySelector('.elementor-swiper-button-prev') : null;

        function updateSlider() {
            var translateX = -(currentIndex * 100);
            wrapper.style.transform = 'translateX(' + translateX + '%)';
        }

        function nextSlide() {
            currentIndex++;
            if (currentIndex >= totalSlides) currentIndex = 0;
            updateSlider();
        }

        function prevSlide() {
            currentIndex--;
            if (currentIndex < 0) currentIndex = totalSlides - 1;
            updateSlider();
        }

        function startAutoplay() {
            if (intervalId) clearInterval(intervalId);
            intervalId = setInterval(nextSlide, 5000);
        }

        function stopAutoplay() {
            if (intervalId) clearInterval(intervalId);
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', function(e) {
                e.preventDefault();
                stopAutoplay();
                nextSlide();
                startAutoplay();
            });
        }

        if (prevBtn) {
            prevBtn.addEventListener('click', function(e) {
                e.preventDefault();
                stopAutoplay();
                prevSlide();
                startAutoplay();
            });
        }

        sliderContainer.addEventListener('mouseenter', stopAutoplay);
        sliderContainer.addEventListener('mouseleave', startAutoplay);

        // Touch
        var touchStartX = 0;
        var touchEndX = 0;
        sliderContainer.addEventListener('touchstart', function(e) { touchStartX = e.changedTouches[0].screenX; }, {passive: true});
        sliderContainer.addEventListener('touchend', function(e) { touchEndX = e.changedTouches[0].screenX; handleSwipe(); }, {passive: true});
        function handleSwipe() {
            if (touchEndX < touchStartX - 50) nextSlide();
            if (touchEndX > touchStartX + 50) prevSlide();
        }

        startAutoplay();
    });

    // --- Part 3: Logo Carousel (Logos Slider) ---
    // Specifically target elementor-image-carousel which is used for logos
    var logoSliders = document.querySelectorAll('.elementor-image-carousel-wrapper');
    
    logoSliders.forEach(function(sliderContainer) {
        if (sliderContainer.swiper) return; // Already init by Elementor?

        console.log('Initializing Logo Carousel');

        // Styles
        sliderContainer.style.overflow = 'hidden';
        
        var options = {
            slidesPerView: 4,
            spaceBetween: 30,
            loop: true,
            speed: 3000, // Slow continuous scroll
            autoplay: {
                delay: 0,
                disableOnInteraction: false,
                pauseOnMouseEnter: false // Continuous
            },
            breakpoints: {
                320: { slidesPerView: 2, spaceBetween: 10 },
                768: { slidesPerView: 3, spaceBetween: 20 },
                1024: { slidesPerView: 5, spaceBetween: 30 }
            }
        };

        if (typeof Swiper !== 'undefined') {
             try {
                // Try to use modules if available (Swiper 8+)
                if (Swiper.use && Swiper.Navigation && Swiper.Pagination && Swiper.Autoplay) {
                     Swiper.use([Swiper.Navigation, Swiper.Pagination, Swiper.Autoplay]);
                }
                new Swiper(sliderContainer, options);
             } catch(e) { console.error('Logo Swiper Error', e); }
        }
    });


    // --- Part 2: Books Carousel (Swiper JS, Coverflow) ---
    function initBooksCarousel() {
        if (typeof Swiper === 'undefined') {
            console.warn('Swiper not loaded for Books Carousel, retrying...');
            setTimeout(initBooksCarousel, 200);
            return;
        }

        var bookSliders = document.querySelectorAll('.books-carousel .swiper');
        
        bookSliders.forEach(function(container) {
            if (container.swiper) return; // Already initialized

            console.log('Initializing Books Carousel with Swiper');
            
            // Ensure visibility for initialization
            container.style.opacity = '0'; // Hide initially to prevent "bunching"
            container.style.transition = 'opacity 0.3s ease'; // Faster transition
            container.style.display = 'block'; 
            
            // Inject Custom Styles for Bigger Images (Gap Reduced)
            var style = document.createElement('style');
            style.innerHTML = `
                .books-carousel .elementor-main-swiper {
                    height: 280px !important;
                    padding-top: 20px;
                    padding-bottom: 20px;
                }
                .books-carousel .swiper-slide {
                    width: 180px !important;
                    height: 100% !important;
                }
                .books-carousel .elementor-carousel-image {
                    background-size: contain !important;
                    background-position: center bottom !important;
                    transition: transform 0.3s;
                }
                .books-carousel .swiper-slide-active .elementor-carousel-image {
                    transform: scale(1.1);
                }
                /* Reduce gap in coverflow */
                .books-carousel .swiper-slide-shadow-left,
                .books-carousel .swiper-slide-shadow-right {
                    background-image: none !important; /* Remove dark shadows for cleaner look */
                }
                @media (max-width: 768px) {
                    .books-carousel .elementor-main-swiper {
                        height: 250px !important;
                    }
                    .books-carousel .swiper-slide {
                        width: 140px !important;
                    }
                }
            `;
            document.head.appendChild(style);

            // Default Coverflow Options
            var options = {
                effect: 'coverflow',
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: 'auto', // Important for coverflow
                loop: true,
                speed: 1000,
                coverflowEffect: {
                    rotate: 0, // Flat look
                    stretch: 120, // SIGNIFICANTLY INCREASED: pulls slides much closer together
                    depth: 100,
                    modifier: 1,
                    slideShadows: false,
                },
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                },
                // Elementor-like breakpoints
                breakpoints: {
                    768: {
                        slidesPerView: 'auto',
                        spaceBetween: 0 
                    },
                    1024: {
                        slidesPerView: 'auto',
                        spaceBetween: 0 
                    }
                },
                on: {
                    init: function () {
                        // Show slider FASTER
                        requestAnimationFrame(function(){
                            container.style.opacity = '1';
                        });
                    },
                    imagesReady: function () {
                         container.style.opacity = '1';
                    }
                }
            };

            // Initialize
            try {
                // Try to use modules if available (Swiper 8+)
                if (Swiper.use && Swiper.Navigation && Swiper.Pagination && Swiper.EffectCoverflow && Swiper.Autoplay) {
                     Swiper.use([Swiper.Navigation, Swiper.Pagination, Swiper.EffectCoverflow, Swiper.Autoplay]);
                }
                
                var swiper = new Swiper(container, options);
                console.log('Books Carousel Initialized');
                
            } catch (e) {
                console.error('Books Carousel Init Failed', e);
            }
        });
    }

    // Run Books Carousel Init
    initBooksCarousel();
});
