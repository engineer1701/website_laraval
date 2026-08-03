//  Go To Top Button and Home Interactions - Start
(function ($) {
    "use strict";
    $(document).ready(function () {
        // Scroll back to top
        var progressPath = document.querySelector('.progress-wrap path');
        if (progressPath) {
            var pathLength = progressPath.getTotalLength();
            progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
            progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
            progressPath.style.strokeDashoffset = pathLength;
            progressPath.getBoundingClientRect();
            progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';
            var updateProgress = function () {
                var scroll = $(window).scrollTop();
                var height = $(document).height() - $(window).height();
                var progress = pathLength - (scroll * pathLength / height);
                progressPath.style.strokeDashoffset = progress;
            }
            updateProgress();
            $(window).scroll(updateProgress);
            var offset = 50;
            var duration = 550;
            jQuery(window).on('scroll', function () {
                if (jQuery(this).scrollTop() > offset) {
                    jQuery('.progress-wrap').addClass('active-progress');
                } else {
                    jQuery('.progress-wrap').removeClass('active-progress');
                }
            });
            jQuery('.progress-wrap').on('click', function (event) {
                event.preventDefault();
                jQuery('html, body').animate({ scrollTop: 0 }, duration);
                return false;
            });
        }

        function animateCounter(id, end, duration) {
            var obj = document.getElementById(id);
            if (!obj) {
                return;
            }
            var start = 0;
            var range = end - start;
            var current = start;
            var increment = end > start ? 1 : -1;
            var step = Math.abs(Math.floor(duration / range));
            step = step > 0 ? step : 50;
            var timer = setInterval(function () {
                current += increment;
                obj.textContent = current;
                if (current == end) {
                    clearInterval(timer);
                }
            }, step);
        }

        animateCounter('count1', 25, 2000);
        animateCounter('count2', 900, 1500);
        animateCounter('count3', 850, 2000);

        if ($.fn.owlCarousel) {
            $('.team-slider').owlCarousel({
                loop: true,
                autoplay: false,
                smartSpeed: 1200,
                autoplayHoverPause: true,
                margin: 20,
                items: 2,
                nav: true,
                dots: false,
                responsive: {
                    0: { items: 1, nav: false, dots: true },
                    768: { items: 2, nav: true, dots: false }
                }
            });

            $('.service-slider').owlCarousel({
                loop: true,
                autoplay: false,
                smartSpeed: 1200,
                autoplayHoverPause: true,
                margin: 20,
                items: 3,
                nav: true,
                dots: false,
                responsive: {
                    0: { items: 1, nav: false, dots: true },
                    768: { items: 2, nav: true, dots: false },
                    992: { items: 3, nav: true, dots: false }
                }
            });

            $('.news-slider').owlCarousel({
                loop: true,
                autoplay: false,
                smartSpeed: 1200,
                autoplayHoverPause: true,
                margin: 20,
                items: 3,
                nav: true,
                dots: false,
                responsive: {
                    0: { items: 1, nav: false, dots: true },
                    768: { items: 2, nav: true, dots: false },
                    992: { items: 3, nav: true, dots: false }
                }
            });
        }
    });
})(jQuery);
//  Go To Top Button and Home Interactions - End