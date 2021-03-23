(function (e) {
    "use strict";
    var n = window.storer_JS || {};

   
    n.header = function(){
        e(".twp-user").has("ul").addClass("drop-down");
        // profile
        e("#header-user").on("click",function(ev){
            ev.preventDefault();
            // e(this).toggleClass('active-account-menu');
            e("#header-user .twp-account-menu").slideToggle();
            e("#header-cart .twp-cart-content").slideUp();
            e('.twp-account-menu  li:first-child a').focus();
            // e('#header-cart .twp-icon-section').removeClass('active-mini-cart');
        });

        // e(document).keyup(function(j) {
        //   if (j.key === "Escape") { // escape key maps to keycode `27`
        //       if( e("#header-user .twp-icon-section").hasClass('active-account-menu') ){
        //         e('#header-user .twp-icon-section').toggleClass('active-account-menu');
        //         e("#header-user .twp-account-menu").slideToggle();
        //       }
        //   }
        // });

        e('.skip-link-menu-account-end').focus(function(){
          if( e("#header-user .twp-icon-section").hasClass('active-account-menu') ){
            e('#header-user .twp-icon-section').focus();
          }
        });

        // cart
        e("#header-cart .twp-icon-section").on("click",function(ev){
            ev.preventDefault();
            e(this).toggleClass('active-mini-cart');
            e("#header-cart .twp-cart-content").slideToggle();
            e("#header-user .twp-account-menu").slideUp();
            e('.woocommerce-mini-cart li:first-child .remove').focus();
            e('#header-user .twp-icon-section').removeClass('active-account-menu');
        });

        e(document).keyup(function(j) {
          if (j.key === "Escape") { // escape key maps to keycode `27`
              if( e("#header-cart .twp-icon-section").hasClass('active-mini-cart') ){
                e('#header-cart .twp-icon-section').toggleClass('active-mini-cart');
                e("#header-cart .twp-cart-content").slideToggle();
              }
          }
        });

        e('.skip-link-minicart-end').focus(function(){
          if( e("#header-cart .twp-icon-section").hasClass('active-mini-cart') ){
            e('#header-cart .twp-icon-section').focus();
          }
        });

        // offcanvas
        e("#twp-offcanvas").on("click",function(){
            e(".twp-offcanvas-section").addClass("show");
            e("#overlay").toggleClass("show");
            e("body").css("overflow","hidden");
        });

        e("#offcanvas-close,#overlay").on("click",function(){
            e(".twp-offcanvas-section").removeClass("show");
            e("#overlay").toggleClass("show");
            e("body").css("overflow","visible");
        });
       
    }
    n.stickyHeader = function () {
        var siteBranding = document.getElementById("site-branding");
        var stickyHeader = document.getElementById("sticky-header");
        if( siteBranding != null && stickyHeader!=null){
            var sticky = stickyHeader.offsetTop;
            if (window.pageYOffset > sticky) {
                siteBranding.classList.add("sticky");
            }else{
                siteBranding.classList.remove("sticky");
            }
        }
      };
    n.mobileMenu = function () {
        e("#menu-icon").on("click",function(){
          e(".twp-mobile-menu").addClass("show");
          e("#primary-menu").clone().appendTo(".twp-mobile-menu-wraper");
          e("#overlay").toggleClass("show");
          e("body").css("overflow","hidden");
          e('.mobile-menu-close').focus();

          setTimeout(function () {
              e('#mobile-menu-close button').focus();
          }, 300);

          e('.skpi-link-responsive-menu-start').focus(function(){
            e('.twp-mobile-menu-wraper ul li:last-child a').focus();
          });
          e('.skpi-link-responsive-menu-end').focus(function(){
            e('#mobile-menu-close button').focus();
          });

          e(document).keyup(function(j) {
            if (j.key === "Escape") { // escape key maps to keycode `27`
                if( e(".twp-mobile-menu").hasClass("show") ){
                  e(".twp-mobile-menu").removeClass("show");
                  e(".twp-mobile-menu #primary-menu").remove();
                  e("#overlay").toggleClass("show");
                  e("body").css("overflow","visible");
                }
            }
          });

        });
        e("#mobile-menu-close,#overlay").on("click",function(){
            e(".twp-mobile-menu").removeClass("show");
            e(".twp-mobile-menu #primary-menu").remove();
            e("#overlay").toggleClass("show");
            e("body").css("overflow","visible");
        });
    };
    n.navigation = function(){
        // navigation menu
        if(e("#primary-menu").hasClass("twp-nav-menu")){
            e("div.twp-nav-menu>ul>li,ul.twp-nav-menu>li").has("ul").addClass("down-arrow");
            e("div.twp-nav-menu>ul>li li,ul.twp-nav-menu>li li").has("ul").addClass("right-arrow");
        }
        if(e("#nav-feature-cat").children("ul")){
            e(".twp-feature-category-list>ul>li").has("ul").addClass("down-arrow");
        }
        e(".twp-feature-category-list>ul>li").on("click",function(ev){
            ev.preventDefault();
            e(this).children("ul").slideToggle();
        })
        // Featured category
        e("#featured-category").on("click",function(ev){
            ev.preventDefault();
            e("#site-navigation .twp-feature-category-list").slideToggle();
            e(this).toggleClass('featured-category-active');
        })
        e('.skip-link-featured-cat-end').focus(function(){
          e('#featured-category').focus();
        });

        e(document).keyup(function(j) {
          if (j.key === "Escape") { // escape key maps to keycode `27`
              if( e("#featured-category").hasClass('featured-category-active') ){
                e('#featured-category').removeClass('featured-category-active');
                e("#site-navigation .twp-feature-category-list").slideToggle();
              }
          }
        });

    }
    n.scrollTop = function(){
        e('#scroll-top').on('click', function(ev) {
            e("html, body").animate({
                scrollTop: 0
            }, 500);
            return false;
        });
    }
    n.slider = function(){
        e(".twp-banner-slider").slick({
            autoplay: true,
            infinite: false,
            speed: 300,
            arrow: true,
            dots: true,
            fade: true,
            slidesToShow: 1,
            slidesToScroll: 1,
        });
        e(".twp-home-widget-section .twp-carosuel-widget-slider").slick({
            autoplay: false,
            infinite: false,
            speed: 300,
            dots: false,
            slidesToShow: 6,
            slidesToScroll: 1,
            prevArrow: e('.twp-carousel-prev'),
            nextArrow: e('.twp-carousel-next'),
            responsive: [
                {
                  breakpoint: 1050,
                  settings: {
                    slidesToShow: 4,
                  }
                },
                {
                  breakpoint: 768,
                  settings: {
                    slidesToShow: 3,
                  }
                },
                {
                  breakpoint: 576,
                  settings: {
                    slidesToShow: 2,
                  }
                },
            ],
        });
        e(".widget-area .twp-carosuel-widget-slider").slick({
            autoplay: false,
            infinite: false,
            speed: 300,
            dots: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            prevArrow: e('.twp-carousel-prev'),
            nextArrow: e('.twp-carousel-next'),
        });

        e(".wp-block-gallery.columns-1,.wp-block-gallery.columns-1 .blocks-gallery-grid,.gallery-columns-1").slick({
            autoplay:false,
            infinite: false,
            speed: 300,
            arrow: true,
            dots: false,
            slidesToShow: 1,
            slidesToScroll: 1,
        });
    }
    n.select = function(){
        e(".twp-select2,.woocommerce-ordering select,select.attribute_pa_color").select2({
            'allowClear': true
        });
    }
    n.magnificPopUp = function () {
        e('.wp-block-gallery,.gallery').each(function () {
          e(this).magnificPopup({
              delegate: 'a',
              type: 'image',
              closeOnContentClick: false,
              closeBtnInside: false,
              mainClass: 'mfp-with-zoom mfp-img-mobile',
              image: {
                  verticalFit: true,
                  titleSrc: function (item) {
                      return item.el.attr('title');
                  }
              },
              gallery: {
                  enabled: true
              },
              zoom: {
                  enabled: true,
                  duration: 300,
                  opener: function (element) {
                      return element.find('img');
                  }
              }
          });
      });
    };
    n.sticky_sidebar = function () {
      e('.sticky-content-editor, .widget-area').theiaStickySidebar({
          additionalMarginTop: 30
      });
    },
    e(window).on('load', function () { 
        e('#preloader-wrapper').fadeOut(); 
        e('#preloader').delay(350).fadeOut('slow');  
        e('body').delay(350).css({ 'overflow': 'visible' });
    });

    e(document).ready(function(){
        n.header();
        n.navigation();
        n.mobileMenu();
        n.slider();
        n.scrollTop();
        n.magnificPopUp();
        n.select();
        n.sticky_sidebar();
    });
    e(window).scroll(function () {
        n.stickyHeader();
  });
})(jQuery);

