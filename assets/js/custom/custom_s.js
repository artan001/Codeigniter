//Auto fixed sundev
jQuery(document).ready(function ($) {
    $(window).on('scroll', function () {
        stop = Math.round($(window).scrollTop());
        if (stop > 175) {
            $('.main_nav').addClass('active');
        } else {
            $('.main_nav').removeClass('active');
        }
    });
});