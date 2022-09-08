// AOS.init({ duration: 1500 });

document.querySelectorAll('a[href="#form"]').forEach(function (anchor) {
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
                breakpoint: 540,
                settings: {
                    slidesToShow: 3,
                    centerPadding: "20px"
                }
            }
        ]
    });

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

    $('.rates-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
    });

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
        centerPadding: "160px",
        responsive: [
            {
                breakpoint: 1560,
                settings: {
                    slidesToShow: 2,
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