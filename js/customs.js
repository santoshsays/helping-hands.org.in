(function ($) {
    "use strict";

var client = $('.client_logo');
if (client.length) {
  client.owlCarousel({
    items: 7,
    loop: true,
    dots: false,
    autoplay: true,
    autoplayHoverPause: true,
    autoplayTimeout: 5000,
    nav: false,
    smartSpeed: 2000,
    margin: 5,
    responsive: {
      0: {
        items: 3
      },
      577: {
        items:3,
      },
      991: {
        items:5,
      },
      1200: {
        items: 7,
      }
    },
  });
}


    //--------  Carousel --------// 
    if ($('#our-major-cause').length) {
      $('#our-major-cause').owlCarousel({
          loop: true,
          margin: 30,
          items: 3,
          nav: false,
          dots: true,
          responsiveClass: true,
          // autoplay: 2500,
          slideSpeed: 300,
          paginationSpeed: 500,
          responsive: {
              0: {
                  items: 1,
              },
              768: {
                  items: 2,
              },
              1224: {
                  items: 3
              }
          }
      })
  }


   

if ($.fn.owlCarousel) {
        var clientArea = $('.client-area');
        clientArea.owlCarousel({
            items: 2,
            loop: true,
            autoplay: true,
            smartSpeed: 1000,
            margin: 40,
            autoplayTimeout: 7000,
            nav: true,
            navText: [('<i class="zmdi zmdi-chevron-left"></i>'), ('<i class="zmdi zmdi-chevron-right"></i>')],
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 2,
                    margin: 15
                },
                992: {
                    margin: 20
                },
                1200: {
                    margin: 40
                }
            }
        });
    }



}(jQuery));