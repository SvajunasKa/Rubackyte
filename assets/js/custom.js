$(document).ready(function () {
    $('.message-sended i').click(function () {
        $('.message-send').fadeOut('slow');
    });

    // isjungia cd vinilo popupa
    $('.close_btn').click(function () {
        var close = $(this).closest('section');
        close.fadeOut('slow');
        $('body').css('overflow', 'auto');

    });
    $(window).keydown(function (e) {
        var close = $('.close_btn').closest('section');
        if (e.keyCode == 27) {
            close.fadeOut('slow');
            $('body').css('overflow', 'auto');
        }
    })


    // ijungia cd vinilo popupa
    $('#diskografija .img_info').click(function (event) {
        var open = $(this).children().attr('data-id');
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

    // intro popup

    $(document).ready(function (){
        window.sessionStorage.setItem("intro", "intro")
    });
    var item = window.sessionStorage.getItem("intro");
    if (!item){
        $("#myModal").modal("show");
    }

    $(".close").click(function (){
       $("#myModal").modal("hide");
    })

    // drop-down menu
    $('.bottom-navbar .menu-item1').click(function (e) {
        e.preventDefault();
        $(".bottom-navbar .show-menu").slideToggle("fast");

        if ($('nav').hasClass('navbarOnScroll')) {
            $('.show-menu').css('position', 'absolute').css('bottom', 'unset').css('left', '-15px');
        } else {
            $('.show-menu').css('position', 'absolute').css('bottom', '100%').css('left', '-15px');
        }

        $('.drop-list').one('click', function (e) {
            e.stopPropagation();
            $(this).trigger('click');
        });

    });

    if ($(window).width() > 767){
        $(window).scroll(function (e) {
            $(window).bind('scroll', function() {
                var navHeight = $( window ).height() - 70;
                if ($(window).scrollTop() > navHeight) {
                    $('.bottom-navbar').addClass('fixed navbarOnScroll');
                }
                else {
                    $('.bottom-navbar').removeClass('fixed navbarOnScroll');
                }
            });
        });
    }



    if ($('.drop-list a').hasClass('active_bottom')) {
        $('.menu-item1').addClass('active_bottom');
    }

    $('footer .menu-item1').click(function (e) {
        e.preventDefault();
        $('footer .show-menu').slideToggle('fast');
        $('.show-menu').css('position', 'absolute').css('bottom', '100%').css('left', '-15px');

        $('footer .drop-list').one('click', function (e) {
            e.stopPropagation();
            $(this).trigger('click');
        });
    });
});