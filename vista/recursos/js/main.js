(function ($) {
    "use strict";
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });
    
    
    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('.navbar').addClass('nav-sticky');
        } else {
            $('.navbar').removeClass('nav-sticky');
        }
    });
    
    
    // Dropdown on mouse hover
    $(document).ready(function () {
        function toggleNavbarMethod() {
            if ($(window).width() > 992) {
                $('.navbar .dropdown').on('mouseover', function () {
                    $('.dropdown-toggle', this).trigger('click');
                }).on('mouseout', function () {
                    $('.dropdown-toggle', this).trigger('click').blur();
                });
            } else {
                $('.navbar .dropdown').off('mouseover').off('mouseout');
            }
        }
        toggleNavbarMethod();
        $(window).resize(toggleNavbarMethod);
    });

    
    // Main carousel
    $(".carousel .owl-carousel").owlCarousel({
        autoplay: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        items: 1,
        smartSpeed: 300,
        dots: false,
        loop: true,
        nav : false
    });
    
    // Modal Video
    $(document).ready(function () {
        var $videoSrc;
        $('.btn-play').click(function () {
            $videoSrc = $(this).data("src");
        });
        console.log($videoSrc);

        $('#videoModal').on('shown.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
        })

        $('#videoModal').on('hide.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc);
        })
    });
    
    
    // Date and time picker
    $('#date').datetimepicker({
        format: 'L'
    });
    $('#time').datetimepicker({
        format: 'LT'
    });


    // Testimonials carousel
    $(".testimonials-carousel").owlCarousel({
        center: true,
        autoplay: true,
        dots: true,
        loop: true,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });
    
    
    // Related post carousel
    $(".related-slider").owlCarousel({
        autoplay: true,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            }
        }
    });
    
})(jQuery);

document.addEventListener("DOMContentLoaded", function() {
    // Get the current URL
    var currentPage = window.location.href;
    
    // Define the homepage URL
    var homePage = "index.php?pagina=inicio";
    
    // Get the top banner element
    var topBanner = document.getElementById("top-banner");
    
    // Check if the current page is the homepage
    if (currentPage.indexOf(homePage) === -1) {
        // If it's not the homepage, hide the top banner
        topBanner.style.display = "none";
    }
});


///formularios

document.addEventListener('DOMContentLoaded', function() {
    const next1 = document.getElementById('next-1');
    const next2 = document.getElementById('next-2');
    const prev2 = document.getElementById('prev-2');
    const prev3 = document.getElementById('prev-3');
    const step1 = document.getElementById('step-1');
    const step2 = document.getElementById('step-2');
    const step3 = document.getElementById('step-3');

    next1.addEventListener('click', function() {
        step1.classList.remove('active');
        step2.classList.add('active');
        updateStep(2);
    });

    next2.addEventListener('click', function() {
        step2.classList.remove('active');
        step3.classList.add('active');
        updateStep(3);
    });

    prev2.addEventListener('click', function() {
        step2.classList.remove('active');
        step1.classList.add('active');
        updateStep(1);
    });

    prev3.addEventListener('click', function() {
        step3.classList.remove('active');
        step2.classList.add('active');
        updateStep(2);
    });

    function updateStep(step) {
        const steps = document.querySelectorAll('.step');
        steps.forEach(function(element, index) {
            if (index < step) {
                element.classList.add('active');
            } else {
                element.classList.remove('active');
            }
        });
    }
});
