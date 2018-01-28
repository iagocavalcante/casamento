var $ = $.noConflict();
$(document).ready(function () {
    "use strict";


// site preloader
    $(window).load(function () {
        $('#preloader').fadeOut('slow', function () {
            $(this).remove();
        });
    });
    $(document).on("scroll", function () {
        if
                ($(document).scrollTop() > 100) {
            $("header.transparent").addClass("shrink");
        }
        else
        {
            $("header.transparent").removeClass("shrink");
        }
    });
//smooth scroll
    $(function () {
        $('.scroll-to a[href*="#"]:not([href="#"])').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
 $('#getting-married').countdown('2018/05/12', function(event) {
    $(this).html(event.strftime('%w semanas %d dias %H:%M:%S'));
  });
//sticky header
    $(window).resize(function () {
        $(".navbar-collapse").css({maxHeight: $(window).height() - $(".navbar-header").height() + "px"});
    });

//sticky header on scroll
    $(window).load(function () {
        $(".sticky-header").sticky({topSpacing: 0});
    });

//Auto Close Responsive Navbar on Click
    function close_toggle() {
        if ($(window).width() <= 768) {
            $('.navbar-collapse a').on('click', function () {
                $('.navbar-collapse').collapse('hide');
            });
        }
        else {
            $('.navbar .navbar-default a').off('click');
        }
    }
    close_toggle();
    $(window).resize(close_toggle);

    //hero text fade flexslider
    $(window).load(function () {
        $('.flexslider').flexslider({
            controlNav: false,
            directionNav: false,
            slideshowSpeed: 4000
        });
    });

    //testimonials
    $(window).load(function () {
        $('.testi-slider').flexslider({
            controlNav: false,
            directionNav: false,
            slideshowSpeed: 4000
        });
    });

    //wow animations
    var wow = new WOW(
            {
                boxClass: 'wow', // animated element css class (default is wow)
                animateClass: 'animated', // animation css class (default is animated)
                offset: 100, // distance to the element when triggering the animation (default is 0)
                mobile: false        // trigger animations on mobile devices (true is default)
            }
    );
    wow.init();


        $(window).stellar({
            horizontalScrolling: false,
            responsive: true
        });
    //back to top
    //Check to see if the window is top if not then display button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });

    //Click event to scroll to top
    $('.scrollToTop').click(function () {
        $('html, body').animate({scrollTop: 0}, 800);
        return false;
    });
});

