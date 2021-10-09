( function( $, window, document, undefined ) {
 
    'use strict';

    var $document    = $( document ),
        $window      = $( window ),
        windowHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight,
        windowWidth  = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

    var isResizing;
 
    $document.ready( function() {
        if($('.location-slider .location-slider-slide').length > 0){
            $( '.location-slider' ).slick({
                draggable: true,
                infinite: true,
                slidesToScroll: 1,
                slidesToShow: 3,
                swipe: true,
                cssEase: 'ease-out',
                arrows: true,
                prevArrow: '<div class="slick-prev"></div>',
                nextArrow: '<div class="slick-next"></div>',
                responsive: [{
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2
                    }
                }, {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1
                    }
                }]
            });
        }
        

        function scrollFunctions(el){
            var $body = jQuery('body');
            
            function check_scroll() {
                //ceheck scroll
                var scrollcontrol = el.scrollTop();
                    
                if(scrollcontrol > 0){
                    $body.addClass('window-scrolled scrolled');
                }else{
                    $body.removeClass('window-scrolled scrolled');
                }  
            }
            
            el.on('load scroll', function() {
                check_scroll();
            }).trigger('scroll');
        }
    
        scrollFunctions(jQuery(window));
    });

    $window.on('resize', function(e){
       //avoid call this function multiple times
       if (isResizing) clearTimeout(isResizing);
       isResizing = setTimeout(function(){
           OnResizeAdjustments(); // add all functions which should trigger on resize.
       },100);
   
   });
   
   function OnResizeAdjustments(){

   }

} )( jQuery, window, document );
