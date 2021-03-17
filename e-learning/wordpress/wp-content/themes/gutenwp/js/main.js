/*global $:false
  _____ _
 |_   _| |__   ___ _ __ ___   ___ _   _ _ __ ___
   | | | '_ \ / _ \ '_ ` _ \ / _ \ | | | '_ ` _ \
   | | | | | |  __/ | | | | |  __/ |_| | | | | | |
   |_| |_| |_|\___|_| |_| |_|\___|\__,_|_| |_| |_|

*  --------------------------------------
*         Table of Content
*  --------------------------------------
*    1. Social Share
*    2. Search
*    3. Sticky Nav
*    4. Scroll-Up
*  --------------------------------------
*  -------------------------------------- */

jQuery(document).ready(function($){'use strict';

    /* --------------------------------------
    1. Social Share
    *  -------------------------------------- */
    $('.prettySocial').prettySocial();

    /* --------------------------------------
    2. Search
    *  -------------------------------------- */
    $(".search-open-icon").on('click',function(e){
        e.preventDefault();
        $(".top-search-input-wrap, .top-search-overlay").fadeIn(200);
        $(this).hide();
        $('.search-close-icon').show().css('display','inline-block');
    });
    $(".search-close-icon, .top-search-overlay").on('click',function(e){
        e.preventDefault();
        $(".top-search-input-wrap, .top-search-overlay").fadeOut(200);
        $('.search-close-icon').hide();
        $('.search-open-icon').show();
    });

    /* --------------------------------------
    3. Sticky Nav
    *  -------------------------------------- */
    jQuery(window).on('scroll', function(){'use strict';
        if ( jQuery(window).scrollTop() > 66 ) {
            jQuery('#masthead').addClass('sticky');
        } else {
            jQuery('#masthead').removeClass('sticky');
        }
    });

    /* --------------------------------------
    4. Scroll-Up
    *  -------------------------------------- */
    jQuery(window).on('scroll', function(){'use strict';
        if ( jQuery(window).scrollTop() > 60 ) {
            jQuery('body').addClass('animated fadeInUp scrollTop');
            $('#Jihad').on('click', function(event) {
                var target = $(this.getAttribute('href'));
                if( target.length ) {
                    event.preventDefault();
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top
                    }, 1000);
                }
            });
        } else {
            jQuery('body').removeClass('animated fadeInUp scrollTop');
        }
    });

});













