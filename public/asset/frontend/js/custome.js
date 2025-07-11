jQuery(document).ready(function ($) {
    // Hamburgers
    var forEach = function (t, o, r) { if ("[object Object]" === Object.prototype.toString.call(t)) for (var c in t) Object.prototype.hasOwnProperty.call(t, c) && o.call(r, t[c], c, t); else for (var e = 0, l = t.length; l > e; e++)o.call(r, t[e], e, t) };
    var hamburgers = document.querySelectorAll(".hamburger");
    if (hamburgers.length > 0) {
        forEach(hamburgers, function (hamburger) {
            hamburger.addEventListener("click", function () {
                this.classList.toggle("is-active");
            }, false);
        });
    }
    // Hamburgers
    // Side Menu 
    // $('#pull').click(function () {
    //     $('.nav').toggleClass("menutogg");
    // });
    // $('.nav ul li').find(".sub-menu").parent().addClass("drop");
    // $(".drop").append('<span class="arrow-icon"> <i class="fa fa-angle-down"></i> </span>');
    // if ($(window).width() < 991.98) {
    //     $(".arrow-icon").addClass("mobile-toggle");
    //     $(".sub-menu").addClass("mobile-hide");
    // }
    // $('.mobile-hide').hide();
    // $(".mobile-toggle").click(function () {
    //     $('.sub-menu').slideUp();
    //     $(this).siblings('.sub-menu').slideToggle();
    // });

    // Side Menu 

    $('#pull').click(function () {
        $('.nav').toggleClass("menutogg");
    });

    $('.nav ul li').find(".sub-menu").parent().addClass("drop");
    $(".drop").prepend('<span class="arrow-icon"> <i class="fa fa-angle-down"></i> </span>');
    if ($(window).width() < 991.98) {
        $(".arrow-icon").addClass("mobile-toggle");
        $(".sub-menu").addClass("mobile-hide");
    }
    $('.mobile-hide').hide();
    $(".mobile-toggle").click(function () {
        // $('.sub-menu').slideUp();
        $(this).siblings('.sub-menu').slideToggle();
    });

    //menu
    // var pull = jQuery('#pull');
    // menu = jQuery('#menu-bg');
    // menuHeight = menu.height();
    // jQuery(pull).on('click', function (e) {
    //     e.preventDefault();
    //     menu.slideToggle(1000);
    // });
    // jQuery(window).resize(function () {
    //     var w = $(window).width();
    //     if (w > 320 && menu.is(':hidden')) {
    //         menu.removeAttr('style');
    //     }
    // });
    //menu
    //Nav fixed top
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 100) {
            jQuery(".top-nav").addClass("topmines");
        } else {
            jQuery(".top-nav").removeClass("topmines");
        }
        if (jQuery(this).scrollTop() > 250) {
            jQuery(".top-nav").addClass("nav-active");
        } else {
            jQuery(".top-nav").removeClass("nav-active");
        }
    });
    //scroll top
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 100) {
            jQuery(".scrollup").addClass("active");
        } else {
            jQuery(".scrollup").removeClass("active");
        }
    });
    jQuery(".scrollup").click(function () {
        jQuery("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });
    //scroll top


    //   Slider
    $('.banner-area').slick({
        autoplay: true,
        speed: 800,
        lazyLoad: 'progressive',
        arrows: false,
        dots: false,
        // prevArrow: '<div class="slick-nav prev-arrow"><i></i><svg><use xlink:href="#circle"></svg></div>',
        // nextArrow: '<div class="slick-nav next-arrow"><i></i><svg><use xlink:href="#circle"></svg></div>',
    }).slickAnimation();
    $('.slick-nav').on('click touch', function (e) {
        e.preventDefault();
        var arrow = $(this);
        if (!arrow.hasClass('animate')) {
            arrow.addClass('animate');
            setTimeout(() => {
                arrow.removeClass('animate');
            }, 1600);
        }
    });

    $('.testi-slider').slick({
        autoplay: true,
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
            responsive: [
                 {
                breakpoint: 1350,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
                },
                {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
                },
                {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
                },
                {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
                }
                
            ]
        });

 

    //machheight
    jQuery(".matchHeight").matchHeight();
    AOS.init();
});
//GALLERY
// baguetteBox.run('.tz-gallery');



