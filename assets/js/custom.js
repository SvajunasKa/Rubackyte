$(document).ready(function () {
    $('.message-sended i').click(function () {
        $('.message-send').fadeOut('slow');
    });

    // apatinis meniu fixed kai priscrollina iki jo
    $('.bottom-navbar').scrollToFixed();
    $('.bottom-navbar').bind('fixed.ScrollToFixed', function () {
        $(this).addClass('navbarOnScroll');
        $(this).find('a').addClass('no-after');
    });
    $('.bottom-navbar').bind('unfixed.ScrollToFixed', function () {
        $(this).removeClass('navbarOnScroll');
        $(this).find('a').removeClass('no-after');
    });

    // isjungia cd vinilo popupa
    $('.close_btn').click(function () {
        var close = $(this).closest('section');
        close.fadeOut('slow');
        $('body').css('overflow', 'auto');
    });

    // ijungia cd vinilo popupa
   /* $('.img_info').click(function (event) {
        var open = $(this).next().next();
        open.fadeIn('slow');
    });*/

    // ijungia cd vinilo popupa
    $('#diskografija .img_info').click(function (event) {
        var open = $(this).children().attr('data-id');
        console.log($(this).children().attr('data-id'));
        $('#open_cd' + open).show();
       $('body').css('overflow', 'hidden');
    });

    $('.dvd-small-img').click(function (event) {
        var open = $(this).attr('data-id');
        $('#open_cd_2' + open).show();
        $('body').css('overflow', 'hidden');
    });

    // atidaro image didesne
    $('.test-popup-link').magnificPopup({
        gallery: {
            enabled: true
        },
        type: 'image'
    });
    $('.menu-item1').click(function (e) {
        e.preventDefault();
        $(".show-menu").slideToggle("fast");
        if ($('.menu-item1 a').is(':not(.no-after)')) {
            $('.show-menu').css('position', 'absolute').css('bottom', '100%');
        }
        else {
            $('.show-menu').css('position', 'absolute').css('bottom', 'unset');
        }

        $('.drop-list').one('click', function (e) {
            e.stopPropagation();
            $(this).trigger('click');

        });
    });
     if($('.drop-list a').hasClass('active_bottom')){
         $('.menu-item1').addClass('active_bottom');
     };

});