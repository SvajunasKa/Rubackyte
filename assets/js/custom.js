$(document).ready(function() {
    $('.message-sended i').click(function() {
        $('.message-send').fadeOut('slow');
    })
    
    // apatinis meniu fixed kai priscrollina iki jo
    $('.bottom-navbar').scrollToFixed();
    $('.bottom-navbar').bind('fixed.ScrollToFixed', function() { 
        $(this).addClass('navbarOnScroll');
        $(this).find('a').addClass('no-after');
    });
    $('.bottom-navbar').bind('unfixed.ScrollToFixed', function() { 
        $(this).removeClass('navbarOnScroll'); 
        $(this).find('a').removeClass('no-after');
    });
    
    // isjungia cd vinilo popupa
    $('.close_btn').click(function() {
        var close = $(this).closest('section');
        close.fadeOut('slow');
        $('body').css('overflow', 'auto');
    });

    // ijungia cd vinilo popupa
    $('.img_info').click(function(event) {
        var open = $(this).next().next();
        open.fadeIn('slow');
    });
    
    // ijungia cd vinilo popupa
    $('#diskografija .img_info').click(function(event) {
        var open = $(this).children().attr('data-id');
        $('#open_cd'+open).show();
        $('body').css('overflow', 'hidden');
    });
    
    $('.dvd-small-img').click(function(event) {
        var open = $(this).attr('data-id');
        $('#open_cd_2'+open).show();
        $('body').css('overflow', 'hidden');
    }); 
    
    // atidaro image didesne
    $('.test-popup-link').magnificPopup({
        gallery: {
            enabled: true
        },
        type: 'image'
    });
    $(window).load(function () {
        $(".submenu").hide();
    });
    $(".media").hover( function () {
        $(".submenu").show();
    });
    $(".subNav").mouseleave(function (e) {
        console.log("AAA");
        e.preventDefault();
        e.stopPropagation();
        $(".submenu").hide();
    })
});