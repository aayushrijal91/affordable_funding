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
        cssEase:"linear",
        speed: 3000,
        autoplaySpeed: 0
    });
    $('.lender-slider-2').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        infinite: true,
        centerMode: true,
        centerPadding: "120px",
        cssEase:"linear",
        speed: 2000,
        autoplaySpeed: 0
    });
    $('.lender-slider-3').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        infinite: true,
        centerMode: true,
        centerPadding: "120px",
        cssEase:"linear",
        speed: 2500,
        autoplaySpeed: 0
    });

    $('.loans-slider-wrapper ul li.slide').width($('.loans-slider-wrapper ul li:nth-child(1)').width());

    var loanSlider = $('.loans-slider').slick({
        slidesToShow: 1,
        arrows: false,
        draggable: false,
        dots: true,
    });

    $('.loan-slider-btn').on('click', function() {
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