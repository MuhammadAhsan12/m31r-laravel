/*global jQuery */
/* Contents
// ------------------------------------------------>
	1.  LOADING SCREEN
	2.  BACKGROUND INSERT
	3.	NAV MODULE
	4.  MOBILE MENU
	5.  HEADER FIXED
	6.  HEADER STATIC
	7.  COUNTER UP              
	8.  COUNTDOWN DATE  
	9.  AJAX MAILCHIMP
	10. AJAX CAMPAIGN MONITOR 
	11. OWL CAROUSEL
	12. MAGNIFIC POPUP
	13. MAGNIFIC POPUP VIDEO
	14. BACK TO TOP
	15. GALLERY FLITER
	16. WORK FLITER
	17. PROGRESS BAR
	18. AJAX CONTACT FORM       
	19. LOAD MORE
	20. ACCORDIONS
    21. SELECT BOX
    22. CONTACT FORM TOGGLE
*/
(function($) {
    "use strict";
    /* ------------------  LOADING SCREEN ------------------ */

    $(window).on("load", function() {
        $(".preloader").fadeOut(5000);
        $(".preloader").remove();
    });

    /* ------------------  Background INSERT ------------------ */

    var $bgSection = $(".bg-section");
    var $bgPattern = $(".bg-pattern");
    var $colBg = $(".col-bg");

    $bgSection.each(function() {
        var bgSrc = $(this).children("img").attr("src");
        var bgUrl = 'url(' + bgSrc + ')';
        $(this).parent().css("backgroundImage", bgUrl);
        $(this).parent().addClass("bg-section");
        $(this).remove();
    });

    $bgPattern.each(function() {
        var bgSrc = $(this).children("img").attr("src");
        var bgUrl = 'url(' + bgSrc + ')';
        $(this).parent().css("backgroundImage", bgUrl);
        $(this).parent().addClass("bg-pattern");
        $(this).remove();
    });

    $colBg.each(function() {
        var bgSrc = $(this).children("img").attr("src");
        var bgUrl = 'url(' + bgSrc + ')';
        $(this).parent().css("backgroundImage", bgUrl);
        $(this).parent().addClass("col-bg");
        $(this).remove();
    });

    /* ------------------  NAV MODULE  ------------------ */

    var $moduleIcon = $(".module-icon"),
        $moduleCancel = $(".module-cancel");
    $moduleIcon.on("click", function(e) {
        $(this).parent().siblings().removeClass('module-active'); // Remove the class .active form any sibiling.
        $(this).parent(".module").toggleClass("module-active"); //Add the class .active to parent .module for this element.
        e.stopPropagation();
    });
    // If Click on [ Search-cancel ] Link
    $moduleCancel.on("click", function(e) {
        $(".module").removeClass("module-active");
        e.stopPropagation();
        e.preventDefault();
        $(".wrapper").removeClass("sidearea-active");
    });

    $(".sidearea-icon").on("click", function() {
        if ($(this).parent().hasClass('module-active')) {
            $(".wrapper").addClass("sidearea-active");
            $(this).addClass("module-sidearea-close");
        } else {
            $(".wrapper").removeClass("sidearea-active");
            $(this).removeClass("module-sidearea-close");
        }
    });
    $('.module-cart .module-icon').click(function() {
        $(this).siblings('.cart-box').toggleClass('active');
    });
    //Close Modules On Clicking OutSide
    $(document).click(function() {
        if ($('.cart-box').hasClass('active')) {
            $('.module-cart .module-icon').click();
        }

        if ($('.module-sidearea').hasClass('module-active')) {
            $('.module-sidearea .module-cancel').click();
            $(".wrapper").removeClass("sidearea-active");
        }
    });
    //Close Modules On Pressing Esc
    $(document).keyup(function(e) {
        // ESCAPE key pressed
        if (e.keyCode == 27) {
            if ($('.cart-box').hasClass('active')) {
                $('.module-cart .module-icon').click();
            }
            if ($('.module-search').hasClass('module-active')) {
                $('.module-search .module-cancel').click();
            }
            if ($('.module-sidearea').hasClass('module-active')) {
                $('.module-sidearea .module-cancel').click();
                $(".wrapper").removeClass("sidearea-active");
            }
        }
    });

    $('.cart-box , .module-cart .module-icon , .module-search .form-search , .module-sidearea .module-sidearea-wrap').click(function(e) {
        e.stopPropagation();
    });
    
    /* ------------------  MOBILE MENU ------------------ */

    var $dropToggle = $("[data-toggle='dropdown']");
    $dropToggle.on("click", function(event) {
        event.preventDefault();
        event.stopPropagation();
        $(this).parent().siblings().removeClass("show");
        $(this).parent().toggleClass("show");
    });

    /*POPUP HEADER */
    $(".toggle-icon").click(function() {
        $('.popup-menu').addClass("active");
    });
    $(".popup-close i").click(function() {
        $('.popup-menu').removeClass("active");
    });
    $(document).keyup(function(e) {
        // ESCAPE key pressed
        if (e.keyCode == 27) {
            if ($('.popup-menu').hasClass('active')) {
                $(".popup-close i").click();
            }
        }
    });

    /* ------------------ HEADER FIXED ------------------ */

    $(window).scroll(function() {
        if ($(document).scrollTop() > 100) {
            $('.navbar-sticky').addClass('navbar-fixed');
        } else {
            $('.navbar-sticky').removeClass('navbar-fixed');
        }
    });

    /* ------------------  COUNTER UP ------------------ */

    $.fn.zyCounter = function(options) {
        var settings = $.extend({
            duration: 40,
            easing: 'swing',
        }, options);
        return this.each(function() {
            var $this = $(this);

            var startCounter = function() {
                var numbers = [];
                var length = $this.length;
                var number = $this.text();
                var isComma = /[,\-]/.test(number);
                var isFloat = /[,\-]/.test(number);
                var number = number.replace(/,/g, '');
                var divisions = settings.duration;
                var decimalPlaces = isFloat ? (number.split('.')[1] || []).length : 0;

                // make number string to array for displaying counterup
                for (var rcn = divisions; rcn >= 1; rcn--) {

                    var newNum = parseInt(number / divisions * rcn);
                    if (isFloat) {
                        newNum = parseFloat(number / divisions * rcn).toFixed(decimalPlaces);
                    }
                    if (isComma) {
                        while (/(\d+)(\d{3})/.test(newNum.toString())) {
                            newNum = newNum.toString().replace(/(\d+)(\d{3})/, '$1' + ',' + '$2');
                        }
                    }

                    numbers.unshift(newNum);
                }
                var counterUpDisplay = function() {
                    $this.text(numbers.shift());
                    setTimeout(counterUpDisplay, settings.duration);
                };
                setTimeout(counterUpDisplay, settings.duration);
            } // end function

            //bind with waypoints
            $this.waypoint(startCounter, {
                offset: '100%',
                triggerOnce: true
            });
        });
    }

    $('.counting').zyCounter();

    /* ------------------ COUNTDOWN DATE ------------------ */

    $(document).ready(function() {
        if ($(".countdown").length > 0) {
            $(".countdown").each(function() {
                var $countDown = $(this),
                    countDate = $countDown.data("count-date"),
                    newDate = new Date(countDate);
                $countDown.countdown({
                    until: newDate,
                    format: "MMMM Do , h:mm:ss a"
                });
            });
        }
    });

    /* ------------------  AJAX MAILCHIMP ------------------ */

    $('.mailchimp').ajaxChimp({
        url: "http://wplly.us5.list-manage.com/subscribe/post?u=91b69df995c1c90e1de2f6497&id=aa0f2ab5fa", //Replace with your own mailchimp Campaigns URL.
        callback: chimpCallback

    });

    function chimpCallback(resp) {
        if (resp.result === 'success') {
            $('.subscribe-alert').html('<div class="alert alert-success">' + resp.msg + '</div>').fadeIn(1000);
            //$('.subscribe-alert').delay(6000).fadeOut();

        } else if (resp.result === 'error') {
            $('.subscribe-alert').html('<div class="alert alert-danger">' + resp.msg + '</div>').fadeIn(1000);
        }
    }

    $('.subscribe-alert').on('click', function() {
        $(this).fadeOut();
    });

    /* ------------------  AJAX CAMPAIGN MONITOR  ------------------ */

    $('#campaignmonitor').submit(function(e) {
        e.preventDefault();
        $.getJSON(
            this.action + "?callback=?",
            $(this).serialize(),
            function(data) {
                if (data.Status === 400) {
                    alert("Error: " + data.Message);
                } else { // 200
                    alert("Success: " + data.Message);
                }
            });
    });

    /* ------------------ OWL CAROUSEL ------------------ */

    var $carouselDirection = $("html").attr("dir");
    if ($carouselDirection == "rtl") {
        var $carouselrtl = true;
    } else {
        var $carouselrtl = false;
    }

    $(".carousel").each(function() {
        var $Carousel = $(this);
        $Carousel.owlCarousel({
            loop: $Carousel.data('loop'),
            autoplay: $Carousel.data("autoplay"),
            margin: $Carousel.data('space'),
            nav: $Carousel.data('nav'),
            dots: $Carousel.data('dots'),
            center: $Carousel.data('center'),
            dotsSpeed: $Carousel.data('speed'),
            animateOut: 'fadeOut',
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: $Carousel.data('slide-rs'),
                },
                1000: {
                    items: $Carousel.data('slide'),
                }
            }
        });
    });

    $(".custom-carousel").each(function() {
        var $Carousel = $(this);
        $Carousel.owlCarousel({
            loop: $Carousel.data('loop'),
            autoplay: $Carousel.data("autoplay"),
            margin: $Carousel.data('space'),
            nav: $Carousel.data('nav'),
            dots: $Carousel.data('dots'),
            center: $Carousel.data('center'),
            dotsSpeed: $Carousel.data('speed'),
            dotsContainer: '#carousel-custom-dots',
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: $Carousel.data('slide-rs'),
                },
                1000: {
                    items: $Carousel.data('slide'),
                }
            }
        });
    });
    $('.custom-carousel').owlCarousel({
        thumbs: true,
        thumbsPrerendered: true
    });
    $('#carousel-custom-dots .owl-dot').click(function() {
        $(this).siblings(".owl-dot").removeClass('active');
        $(this).addClass('active');
        $(".custom-carousel").trigger('to.owl.carousel', [$(this).index(), 300]);
    });

    $(".custom-carousel").on('changed.owl.carousel', function(event) {
        var items = event.item.count; // Number of items
        var item = event.item.index; // Position of the current item
        var owlDots = document.querySelectorAll('#carousel-custom-dots .owl-dot');
        if (owlDots.length > 0) {
            owlDots[item].click()
        }
    })

    /* ------------------ MAGNIFIC POPUP ------------------ */

    var $imgPopup = $(".img-popup");
    $imgPopup.magnificPopup({
        type: "image"
    });
    $('.img-gallery-item').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    /* ------------------  MAGNIFIC POPUP VIDEO ------------------ */

    $('.popup-video,.popup-gmaps').magnificPopup({
        disableOn: 700,
        mainClass: 'mfp-fade',
        removalDelay: 0,
        preloader: false,
        fixedContentPos: false,
        type: 'iframe',
        iframe: {
            markup: '<div class="mfp-iframe-scaler">' +
                '<div class="mfp-close"></div>' +
                '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                '</div>',
            patterns: {
                youtube: {
                    index: 'youtube.com/',
                    id: 'v=',
                    src: '//www.youtube.com/embed/%id%?autoplay=1'
                }
            },
            srcAction: 'iframe_src',
        }
    });

    /* ------------------  BACK TO TOP ------------------ */

    var backTop = $('#back-to-top');

    if (backTop.length) {
        var scrollTrigger = 200, // px
            backToTop = function() {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    backTop.addClass('show');
                } else {
                    backTop.removeClass('show');
                }
            };
        backToTop();
        $(window).on('scroll', function() {
            backToTop();
        });
        backTop.on('click', function(e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 700);
        });
    }

    /* ------------------ GALLERY FLITER ------------------ */

    var $galleryFilter = $(".gallery-filter"),
        galleryLength = $galleryFilter.length,
        protfolioFinder = $galleryFilter.find("a"),
        $galleryAll = $("#gallery-all");

    // init Isotope For gallery
    protfolioFinder.on("click", function(e) {
        e.preventDefault();
        $galleryFilter.find("a.active-filter").removeClass("active-filter");
        $(this).addClass("active-filter");
    });
    if (galleryLength > 0) {
        $galleryAll.imagesLoaded().progress(function() {
            $galleryAll.isotope({
                filter: "*",
                animationOptions: {
                    duration: 750,
                    itemSelector: ".gallery-item",
                    easing: "linear",
                    queue: false,
                }
            });
        });
    }
    protfolioFinder.on("click", function(e) {
        e.preventDefault();
        var $selector = $(this).attr("data-filter");
        $galleryAll.imagesLoaded().progress(function() {
            $galleryAll.isotope({
                filter: $selector,
                animationOptions: {
                    duration: 750,
                    itemSelector: ".gallery-item",
                    easing: "linear",
                    queue: false,
                }
            });
            return false;
        });
    });

    /* ------------------ WORK FLITER ------------------ */

    var $workFilter = $(".cases-filter"),
        workLength = $workFilter.length,
        workFinder = $workFilter.find("a"),
        $workAll = $("#all-cases");

    // init Isotope For gallery
    workFinder.on("click", function(e) {
        e.preventDefault();
        $workFilter.find("a.active-filter").removeClass("active-filter");
        $(this).addClass("active-filter");
    });
    if (workLength > 0) {
        $workAll.imagesLoaded().progress(function() {
            $workAll.isotope({
                filter: "*",
                animationOptions: {
                    duration: 750,
                    itemSelector: ".work-item",
                    easing: "linear",
                    queue: false,
                }
            });
        });
    }
    workFinder.on("click", function(e) {
        e.preventDefault();
        var $selector = $(this).attr("data-filter");
        $workAll.imagesLoaded().progress(function() {
            $workAll.isotope({
                filter: $selector,
                animationOptions: {
                    duration: 750,
                    itemSelector: ".work-item",
                    easing: "linear",
                    queue: false,
                }
            });
            return false;
        });
    });

    /* ------------------  SCROLL TO ------------------ */

    var aScroll = $('a[data-scroll="scrollTo"]');
    aScroll.on('click', function(event) {
        var target = $($(this).attr('href'));
        if (target.length) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top
            }, 1000);
            if ($(this).hasClass("menu-item")) {
                $(this).parent().addClass("active");
                $(this).parent().siblings().removeClass("active");
            }
        }
    });

    /* ------------------ PROGRESS BAR ------------------ */

    $(".progressbar").each(function() {
        $(this).waypoint(function() {
            var progressBar = $(".progress-bar"),
                progressBarTitle = $(".progress-title .value");
            progressBar.each(function() {
                $(this).css("width", $(this).attr("aria-valuenow") + "%");
            });
            progressBarTitle.each(function() {
                $(this).css('opacity', 1);
            });
        }, {
            triggerOnce: true,
            offset: 'bottom-in-view'
        });
    });

    /* ------------------  AJAX CONTACT FORM  ------------------ */

    var contactForm = $(".contactForm"),
        contactResult = $('.contact-result');
    contactForm.validate({
        debug: false,
        submitHandler: function(contactForm) {
            $(contactResult, contactForm).html('Please Wait...');
            $.ajax({
                type: "POST",
                url: "assets/php/contact.php",
                data: $(contactForm).serialize(),
                timeout: 20000,
                success: function(msg) {
                    $(contactResult, contactForm).html('<div class="alert alert-success" role="alert"><strong>Thank you. We will contact you shortly.</strong></div>').delay(3000).fadeOut(2000);
                },
                error: $('.thanks').show()
            });
            return false;
        }
    });

    /* ------------------ LOAD MORE ------------------ */

    $("#loadMore").on("click", function(e) {
        e.preventDefault();
        $(".content.d-none").slice(0, 3).removeClass('d-none');
        if ($(".content.d-none").length == 0) {
            $("#loadMore").addClass("d-none");
        }
    })

    /* ------------------ ACCORDIONS ------------------ */

    $('.collapse').on('shown.bs.collapse', function() {
        $(this).parent('.card').addClass('active-acc');
    });
    $('.collapse').on('hidden.bs.collapse', function() {
        $(this).parent('.card').removeClass('active-acc');
    });

    /* ------------------  SELECT BOX ------------------ */

    $('select').niceSelect();

    /* ------------------  CONTACT FORM TOGGLE ------------------ */

    $('.contact-types .button').click(function() {
        if ($('.contact-card .contact-body').hasClass($(this).data('form'))) {
            return false
        }
        $(this).siblings('.button').removeClass('active')
        $(this).addClass('active')
        $('.contact-card .contact-body').toggleClass('trackFormActive quoteFormActive');
    })

}(jQuery));