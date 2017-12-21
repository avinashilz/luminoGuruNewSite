jQuery(function ($) {

	'use strict';


    // -------------------------------------------------------------
    //      Sticky Menu
    // -------------------------------------------------------------
        
        function menuSticky() { 
            var navHeight = $(".top-bar").height();
            ($(window).scrollTop() > navHeight) ? $('nav, .small-view').addClass('sticky') : $('nav , .small-view').removeClass('sticky');
        }




    // -------------------------------------------------------------
    //  	Offcanvas Menu
    // -------------------------------------------------------------

        (function () {
            var menutoggle = $(".menu-toggle");
            var offcanvasmenu = $("#offcanvas-menu");
            var closemenu = $(".close-menu");

            menutoggle.on("click" ,function(){
                offcanvasmenu.addClass("toggled");
                return false;
            });

            closemenu.on("click" ,function() {
                offcanvasmenu.removeClass("toggled");
                return false;
            });
        }());



    // -------------------------------------------------------------
    //      Single-Page-Menu-Scrolling  Easy Plugin
    // -------------------------------------------------------------

        $(function() {
            $('a.page-scroll').on('click', function(event) {
                var $anchor = $(this);
                $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top
                }, 1500, 'easeInOutExpo');
                event.preventDefault();
            });
        });


    // -------------------------------------------------------------
    // Sub-menu
    // -------------------------------------------------------------
        if ( $('.dropmenu').length) {
            $('.dropmenu').on("click" ,function(){
                $(this).parent().find('ul').slideToggle();
                return false;
            });
        }



    // -------------------------------------------------------------
    //      Cart-Box-Open/Remove
    // -------------------------------------------------------------

        // (function() {
        //     var openclose = $(".cart-wrapper");
        //     openclose.on("click" ,function() {
        //         return $(this).toggleClass("open");
        //     });
        // }());



    // -------------------------------------------------------------
    //      CTA Option
    // -------------------------------------------------------------

        (function () {
            var openlinkOne = $(".open-link-one");
            var openlinkTwo = $(".open-link-two");
            var openlinkThree = $(".open-link-three");
            var hovercontentOne = $(".hover-content-one");
            var hovercontentTwo = $(".hover-content-two");
            var hovercontentThree = $(".hover-content-three");
            var closelinkOne = $(".close-link-one");
            var closelinkTwo = $(".close-link-two");
            var closelinkThree = $(".close-link-three");

            openlinkOne.on("click" ,function(){
                hovercontentOne.addClass("open");
                return false;
            });

            closelinkOne.on("click" ,function() {
                hovercontentOne.removeClass("open");
                return false;
            });

            openlinkTwo.on("click" ,function(){
                hovercontentTwo.addClass("open");
                return false;
            });

            closelinkTwo.on("click" ,function() {
                hovercontentTwo.removeClass("open");
                return false;
            });

            openlinkThree.on("click" ,function(){
                hovercontentThree.addClass("open");
                return false;
            });

            closelinkThree.on("click" ,function() {
                hovercontentThree.removeClass("open");
                return false;
            });
        }());




    // -------------------------------------------------------------
    //      Main-Slider-Carousel
    // -------------------------------------------------------------

        $('#main-slider-carousel').carousel({
            interval: 1500
        })



    

    // -------------------------------------------------------------
    //      LightBox-Js
    // -------------------------------------------------------------

        if ($('#lightBox, #lightBox-2, #lightBox-3').length) {
            $('#lightBox, #lightBox-2, #lightBox-3').poptrox({
                usePopupCaption: true,
                usePopupNav: true,
                popupPadding: 0
            });
        }




    // -------------------------------------------------------------
    //      Progress Bar
    // -------------------------------------------------------------
     
        function progressBar() {
            $('.progressSection').on('inview', function(event, visible, visiblePartX, visiblePartY) {
                if (visible) {
                    $.each($('div.progress-bar'),function(){
                        $(this).css('width', $(this).attr('aria-valuenow')+'%');
                    });
                    $(this).off('inview');
                }
            });
        }





    // -------------------------------------------------------------
    //      Creative  Slider
    // -------------------------------------------------------------

        if ($('.creative-slider').length) {
            var swiper = new Swiper('.swiper-container', {
                pagination: '.swiper-pagination',
                slidesPerView: 'auto',
                paginationClickable: true,
                nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev'
            });
        }



    // -------------------------------------------------------------
    //      Team-Carousel-Slider
    // -------------------------------------------------------------

        if ($('.team-carousel').length) {
            $('.team-carousel').owlCarousel({
                loop:true,
                autoplay:true,
                autoplayTimeout: 3000,
                margin:30,
                nav:true,
                navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
                responsive:{
                    0:{
                        items:1,
                        nav:false,
                        dots:true,
                    },
                    600:{
                        items:2,
                        nav:true,
                        dots:true,
                    },
                    1000:{
                        items:3
                    }
                }
            });
        }





    //-------------------------------------------------------
    //  	counter Section
    //-------------------------------------------------------
       
        function funFactCounting() {
            if ($('.counting-section').length) {
                $('.counting-section').on('inview', function(event, visible, visiblePartX, visiblePartY) {
                    if (visible) {
                        $(this).find('.timer').each(function () {
                            var $this = $(this);
                            $({ Counter: 0 }).animate({ Counter: $this.text() }, {
                                duration: 2000,
                                easing: 'linear',
                                step: function () {
                                    $this.text(Math.ceil(this.Counter));
                                }
                            });
                        });

                        $(this).off('inview');
                    }
                });
            }
        }




    // -------------------------------------------------------------
    //      Google Map
    // -------------------------------------------------------------

        if ($('#googleMap').length) {
            google.maps.event.addDomListener(window, 'load', init);
            
            function init() {
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 14,
                    scrollwheel: false,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(33.968068, -118.403440), // New York

                    // This is where you would paste any style found on Snazzy Maps.
                    styles:[{"featureType": "all","elementType": "labels.text.fill","stylers": [{"saturation": 36},{"color": "#333333"},{"lightness": 40}]},
                            {"featureType": "all","elementType": "labels.text.stroke","stylers": [{"visibility": "on"},{"color": "#ffffff"},{"lightness": 16}]},
                            {"featureType": "all","elementType": "labels.icon","stylers": [{"visibility": "off"}]},
                            {"featureType": "administrative","elementType": "geometry.fill","stylers": [{"color": "#fefefe"},{"lightness": 20}]},
                            {"featureType": "administrative","elementType": "geometry.stroke","stylers": [{"color": "#fefefe"},{"lightness": 17},{"weight": 1.2}]},
                            {"featureType": "landscape","elementType": "geometry","stylers": [{"color": "#d6e4e9"},{"lightness": 20}]},
                            {"featureType": "poi","elementType": "geometry","stylers": [{"color": "#d6e4e9"},{"lightness": 21}]},
                            {"featureType": "poi.park","elementType": "geometry","stylers": [{"color": "#9de8ff"},{"lightness": 21}]},
                            {"featureType": "road.highway","elementType": "geometry.fill","stylers": [{"color": "#ffffff"},{"lightness": 17}]},
                            {"featureType": "road.highway","elementType": "geometry.stroke","stylers": [{"color": "#ffffff"},{"lightness": 29},{"weight": 0.2}]},
                            {"featureType": "road.arterial","elementType": "geometry","stylers": [{"color": "#ffffff"},{"lightness": 18}]},
                            {"featureType": "road.local","elementType": "geometry","stylers": [{"color": "#ffffff"},{"lightness": 16}]},
                            {"featureType": "transit","elementType": "geometry","stylers": [{"color": "#9de8ff"},{"lightness": 19}]},
                            {"featureType": "water","elementType": "geometry","stylers": [{"color": "#a3ccff"},{"lightness": 17}]}]};

                            // Get the HTML DOM element that will contain your map 
                            var mapElement = document.getElementById('googleMap');

                            // Create the Google Map using our element and options defined above
                            var map = new google.maps.Map(mapElement, mapOptions);

                            // Let's also add a marker while we're at it
                            var marker = new google.maps.Marker({
                                position: new google.maps.LatLng(33.968068, -118.403440),
                                map: map,
                                title: 'Snazzy!'
                            });
            }
        }




    // -------------------------------------------------------------
    //  Tool Tip Function
    // -------------------------------------------------------------

        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })



    // -------------------------------------------------------------
    //  Back To Top
    // -------------------------------------------------------------

        function backToTopBtnAppear() {
            if ($("#toTop").length) {
                var windowpos = $(window).scrollTop(),
                    backToTopBtn = $("#toTop");

                if (windowpos > 300) {
                    backToTopBtn.fadeIn();
                } else {
                   backToTopBtn.fadeOut();
                }
            }
        }

        function backToTop() {
            if ($("#toTop").length) {
                var backToTopBtn = $("#toTop");
                backToTopBtn.on("click", function() {
                    $("html, body").animate({
                        scrollTop: 0
                    }, 1000);
                    
                    return false;
                })
            }
        }



	// -------------------------------------------------------------
    // 		Preloader
    // -------------------------------------------------------------

        function preloader() {
            if($('#preloader').length) {
                $('#preloader').delay(100).fadeOut(500, function() {});
            }
        }
    
    


    // -------------------------------------------------------------
    //      WHEN WINDOW LOAD
    // -------------------------------------------------------------

        $(window).on("load", function() {

            preloader();

            funFactCounting();

            backToTop();

            progressBar();

            new WOW().init();

        })



    // -------------------------------------------------------------
    //      WHEN WINDOW SCROLL
    // -------------------------------------------------------------
        $(window).on("scroll", function() {

            backToTopBtnAppear();

            menuSticky();

        });

});   // Jquery-End