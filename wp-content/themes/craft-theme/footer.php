    <?php wp_footer(); ?>

    <footer class="text-center" id="main-footer">
      <div class="container-fluid">
        <div class="social-content">
          <h4>SÍGUENOS EN:</h4>
          <ul class="social-links">
            <li>
              <a href="https://www.facebook.com/origamicowork/" target="_blank">
                <?php include (TEMPLATEPATH . '/partials/facebook.php'); ?>
              </a>
            </li>
            <li>
              <a href="https://twitter.com/OrigamiCowork" target="_blank">
                <?php include (TEMPLATEPATH . '/partials/twitter.php'); ?>
              </a>
            </li>
            <li>
              <a href="https://www.instagram.com/origami.cowork/" target="_blank">
                <?php include (TEMPLATEPATH . '/partials/instagram.php'); ?>
              </a>
            </li>
            <li>
              <a href="https://www.linkedin.com/company/origamicowork/" target="_blank">
                <?php include (TEMPLATEPATH . '/partials/linkedin.php'); ?>
              </a>
            </li>
            <li>
              <a href="https://plus.google.com/106522681620298830785" target="_blank">
                <?php include (TEMPLATEPATH . '/partials/google-plus.php'); ?>
              </a>
            </li>
          </ul>
        </div>
        <div class="content-footer">
          <p>Av. Contralmirante Montero (Ex Alberto Del Campo) Nº 421 Of. 6D – Magdalena del Mar</p>
        </div>
      </div>
    </footer>

    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/libs/jquery.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/libs/popper.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/libs/bootstrap.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/libs/swiper.min.js"></script>

    <?php if( is_home() ): ?>

      <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBX4D2ABvJBlhKbjCE5vOF2PAr9fjDRp7I"></script>
      <script type="text/javascript">

        var mainSwiper = new Swiper('#main-slider', {
          paginationClickable: true,
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
          autoplay: {
              delay: 5000
          },
          autoplayDisableOnInteraction: false,
          loop: true
        });

        var brandsSwiper = new Swiper('#brands-slider', {
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
          autoplay: {
              delay: 3000
          },
          autoplayDisableOnInteraction: false,
          loop: true,
          slidesPerView: 5,
          centeredSlides: true,
          breakpoints: {
            768: {
              slidesPerView: 3
            }
          }
        });

        var comunnitySwiper = new Swiper('#comunnity-slider', {
          pagination: {
            el: '.swiper-pagination',
            clickable: true
          },
          slidesPerView: 1,
          autoplay: {
              delay: 8000
          },
          autoplayDisableOnInteraction: false,
          loop: true
        });

        var gmapStyle = [
            {
                "featureType": "all",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "saturation": 36
                    },
                    {
                        "color": "#333333"
                    },
                    {
                        "lightness": 40
                    }
                ]
            },
            {
                "featureType": "all",
                "elementType": "labels.text.stroke",
                "stylers": [
                    {
                        "visibility": "on"
                    },
                    {
                        "color": "#ffffff"
                    },
                    {
                        "lightness": 16
                    }
                ]
            },
            {
                "featureType": "all",
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#fefefe"
                    },
                    {
                        "lightness": 20
                    }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#fefefe"
                    },
                    {
                        "lightness": 17
                    },
                    {
                        "weight": 1.2
                    }
                ]
            },
            {
                "featureType": "landscape",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#f5f5f5"
                    },
                    {
                        "lightness": 20
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#f5f5f5"
                    },
                    {
                        "lightness": 21
                    }
                ]
            },
            {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#dedede"
                    },
                    {
                        "lightness": 21
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#ffffff"
                    },
                    {
                        "lightness": 17
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#ffffff"
                    },
                    {
                        "lightness": 29
                    },
                    {
                        "weight": 0.2
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#ffffff"
                    },
                    {
                        "lightness": 18
                    }
                ]
            },
            {
                "featureType": "road.local",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#ffffff"
                    },
                    {
                        "lightness": 16
                    }
                ]
            },
            {
                "featureType": "transit",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#f2f2f2"
                    },
                    {
                        "lightness": 19
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#e9e9e9"
                    },
                    {
                        "lightness": 17
                    }
                ]
            }
        ];

        // The latitude and longitude of your business / place
        var position = [27.1959739, 78.02423269999997];

        function showGoogleMaps() {

            var latLng = new google.maps.LatLng(position[0], position[1]);

            var mapOptions = {
                zoom: 16, // initialize zoom level - the max value is 21
                streetViewControl: false, // hide the yellow Street View pegman
                scaleControl: true, // allow users to zoom the Google Map
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                center: latLng,
                styles: gmapStyle
            };

            map = new google.maps.Map(document.getElementById('googlemaps'),
                mapOptions);
        }

        google.maps.event.addDomListener(window, 'load', showGoogleMaps);

      </script>

    <?php endif; ?>

    <?php if( is_page('38') ): ?>

      <script src="<?php bloginfo('stylesheet_directory'); ?>/js/libs/slick.min.js"></script>
      <script type="text/javascript">

        $(function(){

          $('.box-service-toggle').on('click', function() {
            var section = $(this).data('section');
            $('.boxes-services').toggleClass('' + section + '-animate');
            $(this).toggleClass('show').parents('.box-service').find('.box-service-opened').toggleClass('show');
          });

          $('.service-back').on('click', function(e) {
            e.preventDefault();
            var section = $(this).data('section');
            $('.boxes-services').toggleClass('' + section + '-animate');
            $(this).parents('.box-service').find('.box-service-toggle').toggleClass('show');
            $(this).parents('.box-service').find('.box-service-opened').toggleClass('show')
          });

        });

        $('#services-process').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          // fade: true,
          asNavFor: '#services-process-nav',
          // autoplay: true,
          // autoplaySpeed: 1000
        });

        $('#services-process-nav').slick({
          slidesToShow: 10,
          slidesToScroll: 1,
          asNavFor: '#services-process',
          dots: false,
          arrows: false,
          // loop: true,
          // centerMode: true,
          focusOnSelect: true,
          autoplay: true,
          autoplaySpeed: 1000
        });

      </script>

    <?php endif; ?>

    <?php if( is_page('64') ): ?>

      <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBX4D2ABvJBlhKbjCE5vOF2PAr9fjDRp7I"></script>
      <script type="text/javascript">

        var gmapStyle = [
            {
                "featureType": "all",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "saturation": 36
                    },
                    {
                        "color": "#333333"
                    },
                    {
                        "lightness": 40
                    }
                ]
            },
            {
                "featureType": "all",
                "elementType": "labels.text.stroke",
                "stylers": [
                    {
                        "visibility": "on"
                    },
                    {
                        "color": "#ffffff"
                    },
                    {
                        "lightness": 16
                    }
                ]
            },
            {
                "featureType": "all",
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#fefefe"
                    },
                    {
                        "lightness": 20
                    }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#fefefe"
                    },
                    {
                        "lightness": 17
                    },
                    {
                        "weight": 1.2
                    }
                ]
            },
            {
                "featureType": "landscape",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#f5f5f5"
                    },
                    {
                        "lightness": 20
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#f5f5f5"
                    },
                    {
                        "lightness": 21
                    }
                ]
            },
            {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#dedede"
                    },
                    {
                        "lightness": 21
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#ffffff"
                    },
                    {
                        "lightness": 17
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#ffffff"
                    },
                    {
                        "lightness": 29
                    },
                    {
                        "weight": 0.2
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#ffffff"
                    },
                    {
                        "lightness": 18
                    }
                ]
            },
            {
                "featureType": "road.local",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#ffffff"
                    },
                    {
                        "lightness": 16
                    }
                ]
            },
            {
                "featureType": "transit",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#f2f2f2"
                    },
                    {
                        "lightness": 19
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#e9e9e9"
                    },
                    {
                        "lightness": 17
                    }
                ]
            }
        ];

        var position = [27.1959739, 78.02423269999997];

        function showGoogleMaps() {

            var latLng = new google.maps.LatLng(position[0], position[1]);

            var mapOptions = {
                zoom: 16,
                streetViewControl: false,
                scaleControl: true,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                center: latLng,
                styles: gmapStyle
            };

            map = new google.maps.Map(document.getElementById('googlemaps'),
                mapOptions);
        }

        google.maps.event.addDomListener(window, 'load', showGoogleMaps);
      </script>

    <?php endif; ?>

  </body>
</html>