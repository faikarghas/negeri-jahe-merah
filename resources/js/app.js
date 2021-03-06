require('./bootstrap');

$(document).ready(function (params) {

    $('#menu-hamburger').on('click',function (params) {
        $(this).toggleClass('open')
        $('.menu__mobile').toggleClass('open')
    })

    $('.hasSub').each(function (params) {
        $(this).on('click',function (params) {
            $(this).find('.ul_submenu').toggleClass('open')
        })
    })

    $('.cl').click( function(e) {
        $('.collapse').collapse('hide');
    });

    $('.sub-init').each(function (params) {
        $(this).on('mouseenter',function (params) {
            $('.menu__showcase').css('top','calc(0px - 7rem)')
        })

        $(this).on('mouseleave',function (params) {
            $('.menu__showcase').css('top','-800px')
        })
    })

    $('.slider-detail-news').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        adaptiveHeight: true,
        asNavFor: '.slider-nav'
    });

    $('.slider-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.slider-detail-news',
        dots: true,
        focusOnSelect: true,
        variableWidth: true
    });

})
