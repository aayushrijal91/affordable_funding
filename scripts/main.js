AOS.init({ duration: 700 });

document.querySelectorAll('a[href="#form"], a[href="#mobile-form"], a[href="#how-it-works"], a[href="#about-us"], a[href="#loans"], a[href="#lenders"], a[href="#reviews"], a[href="#form"], a[href="#contact-us"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

$(() => {
    $('.lender-slider-1').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        infinite: true,
        centerMode: true,
        centerPadding: "120px",
        cssEase: "linear",
        speed: 3000,
        autoplaySpeed: 0,
        responsive: [
            {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 3,
                    centerPadding: "20px"
                }
            },
            {
                breakpoint: 540,
                settings: {
                    slidesToShow: 3,
                    centerPadding: "20px"
                }
            }
        ]
    });
    $('.lender-slider-2').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        infinite: true,
        centerMode: true,
        centerPadding: "120px",
        cssEase: "linear",
        speed: 2000,
        autoplaySpeed: 0,
        responsive: [
            {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 3,
                    centerPadding: "20px"
                }
            },
            {
                breakpoint: 540,
                settings: {
                    slidesToShow: 3,
                    centerPadding: "20px"
                }
            }
        ]
    });

    $('.lender-slider-3').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        infinite: true,
        centerMode: true,
        centerPadding: "120px",
        cssEase: "linear",
        speed: 2500,
        autoplaySpeed: 0,
        responsive: [
            {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 3,
                    centerPadding: "20px"
                }
            },
            {
                breakpoint: 540,
                settings: {
                    slidesToShow: 3,
                    centerPadding: "20px"
                }
            }
        ]
    });

    AOS.refresh();

    let loanSliderSm = $('.loans-slider-sm').slick({
        slidesToShow: 1,
        arrows: false,
    });

    $('.sm-nav-btn').on('click', function () {
        loanSliderSm.slick('slickGoTo', $(this).attr('slideTarget'));
    });

    $('.loans-slider-wrapper ul li.slide').width($('.loans-slider-wrapper ul li:nth-child(1)').width());

    let loanSlider = $('.loans-slider').slick({
        slidesToShow: 1,
        arrows: false,
        draggable: false,
        dots: true,
    });

    AOS.refresh();

    $('.loan-slider-btn').on('click', function () {
        $(this).parents('li').siblings().removeClass("active");
        $(this).parents('li').addClass('active');

        $('.loans-slider-wrapper ul li:nth-child(1).active ~ .slide').width($('.loans-slider-wrapper ul li:nth-child(1)').width());
        $('.loans-slider-wrapper ul li:nth-child(1).active ~ .slide').css('left', 0);
        $('.loans-slider-wrapper ul li:nth-child(2).active ~ .slide').width($('.loans-slider-wrapper ul li:nth-child(2)').width());
        $('.loans-slider-wrapper ul li:nth-child(2).active ~ .slide').css('left', $('.loans-slider-wrapper ul li:nth-child(1)').width());
        $('.loans-slider-wrapper ul li:nth-child(3).active ~ .slide').width($('.loans-slider-wrapper ul li:nth-child(3)').width());
        $('.loans-slider-wrapper ul li:nth-child(3).active ~ .slide').css('left', ($('.loans-slider-wrapper ul li:nth-child(1)').width() + $('.loans-slider-wrapper ul li:nth-child(2)').width()));

        loanSlider.slick('slickGoTo', $(this).attr('slideTarget'));
    });

    AOS.refresh();

    let ratesSlider = $('.rates-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        // draggable: false,
        autoplay: true
    });

    $("#rates-arrow-next").on('click', function () {
        ratesSlider.slick('slickGoTo', 1);
    });

    $("#rates-arrow-prev").on('click', function () {
        ratesSlider.slick('slickGoTo', 2);
    });

    $("#rates-arrow-prev").css('display', 'none');

    $('.rates-arrow').on('click', function () {
        if ($('.rates-slider-content.slider-1').hasClass('slick-current')) {
            $("#rates-arrow-next").css('display', 'none');
            $("#rates-arrow-prev").css('display', 'block');
        }
        else if ($('.rates-slider-content.slider-2').hasClass('slick-current')) {
            $("#rates-arrow-prev").css('display', 'none');
            $("#rates-arrow-next").css('display', 'block');
        }
    });
    AOS.refresh();

    $(".accordion-head").on('click', function () {
        $(".accordion-head").removeClass("active");
        $(this).addClass('active');

        if ($('.accordion-body').is(':visible')) {
            $(".accordion-body").slideUp(300);
            $(".plusminus").html('+');
        }
        if ($(this).next(".accordion-body").is(':visible')) {
            $(this).next(".accordion-body").slideUp(300);
            $(this).children(".plusminus").html('-');
        } else {
            $(this).next(".accordion-body").slideDown(300);
            $(this).children(".plusminus").html('-');
        }
    });

    $('.testimonial-slider-1').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: true,
        arrows: false,
        autoplay: true,
        speed: 1500,
        centerPadding: "120px",
        responsive: [
            {
                breakpoint: 1560,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 1,
                    centerPadding: "120px",
                }
            },
            {
                breakpoint: 540,
                settings: {
                    slidesToShow: 1,
                    centerPadding: 0,
                    centerMode: false,
                }
            }
        ]
    });

    $('.testimonial-slider-2').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: true,
        arrows: false,
        speed: 2500,
        autoplay: true,
        centerPadding: "120px",
        responsive: [
            {
                breakpoint: 1560,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 1,
                }
            },
            {
                breakpoint: 540,
                settings: {
                    slidesToShow: 1,
                    centerPadding: 0,
                    centerMode: false,
                }
            }
        ]
    });

    AOS.refresh();

    $("#quick-link-btn").on('click', function () {
        $("#quick-links-sm").slideToggle();
    });

    $("#map-display-btn-sm").on('click', function () {
        $(".map-wrapper-sm").slideToggle();
    });

});


$(window).on('scroll', () => {
    if ($(this).scrollTop() >= 600) {
        $('#return-to-top').fadeIn(300);
    } else {
        $('#return-to-top').fadeOut(300);
    }
});

$('#return-to-top').on('click', () => {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
});