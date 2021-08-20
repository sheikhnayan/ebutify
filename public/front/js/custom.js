$(window).scroll(function(){
  var sticky = $('body'),
      scroll = $(window).scrollTop();

  if (scroll >= 100) sticky.addClass('fixed-header');
  else sticky.removeClass('fixed-header');

  // scroll to top btn
    if (scroll >= 500) {
        $('.scroll-top').fadeIn(500);
    }
    else {
        $('.scroll-top').fadeOut(500);
    }

});

$(document).ready(function(){
    // mobile menu
    $('.navbar-toggler').click( function(){
        $('#navbarSupportedContent').toggleClass('show');
        $('#header').toggleClass('mobile-menu-open');
    });
    // menu

    var winWidth = $(window).width();
    if ( winWidth > 767 ) { // desktop and large screen
        $('.dropdown').hover( function(){
            $(this).find('.dropdown-toggle').toggleClass('show');
            $(this).find('.dropdown-menu').toggleClass('show');
        });
    } else { // small screen
        $('.dropdown').click( function(){
            $(this).find('.dropdown-toggle').toggleClass('show');
            $(this).find('.dropdown-menu').toggleClass('show');
        });
    }

    // blog page
    $('.search_btn').click(function(){
        $(this).toggleClass('search_close').toggleClass('search_open');
        $('.go_btn').toggleClass('search_active_go_btn');
        $('.search').toggleClass('search_active');
    });


    // price page
    $('.switch-button .left').click( function() {
        $(this).toggleClass('active-case');
        $('.switch-button .right').removeClass('active-case');
        $('.switch-button .active').css({left:'0%'});
        $('.annual-table').show();
        $('.lifetime-table').hide();
    });
    $('.switch-button .right').click(function () {
        $(this).toggleClass('active-case');
        $('.switch-button .left').removeClass('active-case');
        $('.switch-button .active').css({ left: '50%' });
        $('.annual-table').hide();
        $('.lifetime-table').show();
    });
    
    // package sticky
    $(window).scroll(function () {
        
        if ( $('#sticky-package').length ) {

            var sticky = $('#sticky-package'),
                scroll = $(window).scrollTop();

            var sticky_container_top = $('#sticky-package').position().top; // sticky.position().top; 
            var sticky_container_height = sticky.height(); 

            if (scroll >= sticky_container_top && scroll <= (sticky_container_top + sticky_container_height) ) {
                sticky.addClass('fixed-package');
            } 
            else {
                sticky.removeClass('fixed-package');
            }
        }

        // social share in blog details
        if ( $('#main-content-entry').length ) {

            var sticky = $('#main-content-entry'),
                scroll = $(window).scrollTop();

            var sticky_container_top = sticky.position().top; 
            var sticky_container_height = sticky.height(); 

            if (scroll >= sticky_container_top && scroll <= (sticky_container_top + sticky_container_height) ) {
                $('.sticky_social_media_ribon').css({'opacity':1});
            } 
            else {
                $('.sticky_social_media_ribon').css({'opacity':0});
            }
        }

        // blog top progressbar
        var progressEle = document.querySelector(".progress-bar-top");
        var topScroll, entryEle = document.querySelector("#main-content-entry");
        topScroll = 100 * ( window.scrollY - entryEle.offsetTop ) / entryEle.clientHeight;
        if ( 0 < topScroll && topScroll < 100 ) {
            progressEle.style.setProperty("--scroll",topScroll+"%");
        } else {
            progressEle.style.setProperty("--scroll","0%")
        }


    });

    // signup package
    $('.plan--payment_system').click( function() {
        $('body .plan--payment_system').removeClass('selected-plan');
        $(this).addClass('selected-plan');
    });

    // Scroll totop
    $('.scroll-top').click( function() {
        $('body, html').scrollTop(0);
    });


    // social sharing
    $('.do-expnds, .do-collops').click( function() {
        $('.sticky_social_media_ribon').toggleClass('expended');
    });


    // signup
    $('.choose-credit-card').click( function(){
        $('.credit_card_detail').show();
        $('.paypal-trial-btn').hide();
        $('.method-choose-section').hide();
        $('.login_from_activate_trial').hide();
    });
    $('.another-trial-btn').click( function(){
        $('.credit_card_detail').hide();
        $('.paypal-trial-btn').show();
        $('.method-choose-section').show();
        $('.login_from_activate_trial').show();
    });

});