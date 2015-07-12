(function() {
  var ViejoOesteUtils;

  ViejoOesteUtils = {
    Global: {
      setHeight: function(elem) {
        var element, height;
        element = $(elem);
        height = element.height();
        $(".imagen-block .block").height(height);
        return false;
      },
      setHeightSlider: function(elem) {
        var element, height;
        element = $(elem);
        height = element.height();
        $(".container-baseline").height(height);
        return false;
      }
    }
  };

  window.ViejoOesteUtils = ViejoOesteUtils;

}).call(this);

(function() {
  (function($) {

    /*
    Map
     */
    return $(function() {
      var $elementID, address, infowindow, map, mapOptions, marker, point, styledMap, styles, styles1;
      $elementID = $('#viejooesteMap');
      address = 'Hotel Viejo Oeste';
      point = new google.maps.LatLng(5.897282, -74.729793);
      infowindow = new google.maps.InfoWindow({
        content: "<strong>Hotel Viejo Oeste</strong><br>Autopista Medellin-Bogotá, 500 mts después de Doradal"
      });
      mapOptions = {
        zoom: 13,
        center: point,
        mapTypeId: google.maps.MapTypeId.SATELLITE,
        mapTypeControl: false,
        panControl: true,
        panControlOptions: {
          position: google.maps.ControlPosition.TOP_RIGHT
        },
        zoomControl: true,
        zoomControlOptions: {
          style: google.maps.ZoomControlStyle.SMALL,
          position: google.maps.ControlPosition.TOP_RIGHT
        },
        streetViewControl: true,
        streetViewControlOptions: {
          position: google.maps.ControlPosition.TOP_RIGHT
        }
      };
      $elementID.css({
        width: '100%',
        height: '100%'
      });
      styles = [
        {
          "featureType": "landscape",
          "stylers": [
            {
              "hue": "#FFB000"
            }, {
              "saturation": 71.66666666666669
            }, {
              "lightness": -28.400000000000006
            }, {
              "gamma": 1
            }
          ]
        }, {
          "featureType": "road.highway",
          "stylers": [
            {
              "hue": "#E8FF00"
            }, {
              "saturation": -76.6
            }, {
              "lightness": 113
            }, {
              "gamma": 1
            }
          ]
        }, {
          "featureType": "road.arterial",
          "stylers": [
            {
              "hue": "#FF8300"
            }, {
              "saturation": -77
            }, {
              "lightness": 27.400000000000006
            }, {
              "gamma": 1
            }
          ]
        }, {
          "featureType": "road.local",
          "stylers": [
            {
              "hue": "#FF8C00"
            }, {
              "saturation": -66.6
            }, {
              "lightness": 34.400000000000006
            }, {
              "gamma": 1
            }
          ]
        }, {
          "featureType": "water",
          "stylers": [
            {
              "hue": "#00C4FF"
            }, {
              "saturation": 22.799999999999997
            }, {
              "lightness": -11.399999999999991
            }, {
              "gamma": 1
            }
          ]
        }, {
          "featureType": "poi",
          "stylers": [
            {
              "hue": "#9FFF00"
            }, {
              "saturation": 0
            }, {
              "lightness": -23.200000000000003
            }, {
              "gamma": 1
            }
          ]
        }
      ];
      styles1 = [
        {
          stylers: [
            {
              hue: "#d99e0f"
            }, {
              saturation: 50
            }, {
              lightness: -20
            }, {
              gamma: 1.51
            }
          ]
        }, {
          featureType: "road",
          elementType: "geometry",
          stylers: [
            {
              lightness: 100
            }, {
              visibility: "simplified"
            }
          ]
        }, {
          featureType: "road",
          elementType: "labels",
          stylers: [
            {
              visibility: "off"
            }
          ]
        }
      ];
      styledMap = new google.maps.StyledMapType(styles, {
        name: "Styled Map"
      });
      map = new google.maps.Map(document.getElementById("viejooesteMap"), mapOptions);
      map.mapTypes.set('map_style', styledMap);
      map.setMapTypeId('map_style');
      marker = new google.maps.Marker({
        map: map,
        draggable: true,
        animation: google.maps.Animation.DROP,
        position: point,
        title: "Hello World"
      });
      marker.setAnimation(google.maps.Animation.BOUNCE);
      return google.maps.event.addListener(marker, 'click', function() {
        return infowindow.open(map, marker);
      });
    });
  })(jQuery);

}).call(this);

(function() {
  var ViejoOeste;

  ViejoOeste = {
    Main: function() {
      var options;
      options = {
        menu_extended: false
      };
      this.init = function(options) {
        $(window).on('scroll', this.onScroll);
        $(window).on('resize', this.onResize);
        this.eventHandler(options);
      };
      this.onScroll = function() {
        var contained;
        contained = $("#landing_cabin").height();
        if (contained >= $(window).scrollTop()) {
          console.log("sdasdas");
          $("#slider_container").css("top", ($(window).scrollTop()) + "px");
        }
      };
      this.onResize = function() {
        ViejoOesteUtils.Global.setHeightSlider("#viejooeste_container_slider");
        ViejoOesteUtils.Global.setHeight("#viejooeste_service");
        ViejoOesteUtils.Global.setHeight("#viejooeste_spaces");
      };
      this.gallery_global = function() {
        console.log("Hola");
        $("#viejooeste_gallery_display").find("ul.items > li.global").fadeOut(1000);
        $("#viejooeste_gallery_display").find("ul.items > li.espacios").fadeIn(1000);
      };
      this.eventHandler = function(options) {
        var barril, buitre, caballos, cacique, establo, indicator, indio, item, menu, mineros, oasis, options_gallery, pistolero, rifle, vaqueros;
        $("#testimonies").slick({
          dots: false,
          autoplay: true,
          autoplaySpeed: 7000,
          slidesToScroll: 1,
          arrows: false,
          infinite: true,
          adaptiveHeight: true
        });
        $("#cotrafa").bind("click", function() {
          $("#cotrafa-show").fadeIn("slow");
          return $("#coopantex-show").fadeOut("slow");
        });
        $("#coopantex").bind("click", function() {
          $("#coopantex-show").fadeIn("slow");
          return $("#cotrafa-show").fadeOut("slow");
        });
        menu = $("#viejooeste_menu");
        menu.bind("click", function() {
          if (options.menu_extended === true) {
            $("#viejooeste_navigator").hide();
            $("header").css({
              "max-height": "170px",
              'background-color': "rgba(92,92,92,.6)"
            });
            options.menu_extended = false;
            $("#viejooeste_menu_text").text("MENÚ");
            $("#viejooeste_menu_icon").removeClass("fa-times").addClass("fa-bars");
          } else {
            $("#viejooeste_navigator").show();
            $("header").css({
              "max-height": "380px",
              'background-color': "rgba(92,92,92,.9)"
            });
            options.menu_extended = true;
            $("#viejooeste_menu_text").text("CERRAR");
            $("#viejooeste_menu_icon").removeClass("fa-bars").addClass("fa-times");
          }
        });
        indicator = $("#viejooeste_indicator");
        indicator.bind("click", function() {
          return $("html, body").animate({
            scrollTop: 500
          }, 1000);
        });
        options_gallery = $("#viejooeste_container_options_gallery").find("li").click(function(e) {
          var elem, option_gallery;
          e.preventDefault();
          options_gallery.removeClass("active");
          elem = $(this);
          if (!elem.hasClass("active")) {
            elem.addClass("active");
          }
          option_gallery = elem.find("a").data("option");
          switch (option_gallery) {
            case "global":
              $("#viejooeste_gallery_display").find("ul.items > li.global").fadeIn(1000);
              break;
            case "espacios":
              $("#viejooeste_gallery_display").find("ul.items > li.global").fadeOut(1000)($("#viejooeste_gallery_display").find("ul.items > li.espacios").fadeIn(1000));
              break;
            case "cabanas":
              $("#viejooeste_gallery_display").find("ul.items > li.global").fadeOut(1000)($("#viejooeste_gallery_display").find("ul.items > li.cabanas").fadeIn(1000));
              break;
            case "restaurante":
              $("#viejooeste_gallery_display").find("ul.items > li.global").fadeOut(1000)($("#viejooeste_gallery_display").find("ul.items > li.restaurante").fadeIn(1000));
              break;
            default:
              console.log("Nothig");
          }
        });
        options = $("#viejooeste_container_options").find("li").click(function(e) {
          var cabin, elem;
          e.preventDefault();
          options.removeClass("active");
          elem = $(this);
          if (!elem.hasClass("active")) {
            elem.addClass("active");
          }
          $(".cabin").each(function(index) {
            $(this).addClass("cabin-hide").removeClass("cabin-show");
          });
          cabin = elem.find("a").data("cabin");
          return $("#cabin_" + cabin).removeClass("cabin-hide").addClass("cabin-show");
        });
        $("#viejooeste_select_options").change(function(e) {
          var cabin;
          e.preventDefault();
          $(".cabin").each(function(index) {
            $(this).addClass("cabin-hide").removeClass("cabin-show");
          });
          cabin = $(this).find("option:selected").val();
          return $("#cabin_" + cabin).removeClass("cabin-hide").addClass("cabin-show");
        });
        item = $("#viejooeste_gallery_display").find("ul.items > li.item > a").click(function(e) {
          var elem;
          e.preventDefault();
          elem = $(this);
        });
        item = $("#viejooeste_cabin_display").find("cabin").click(function(e) {
          var elem;
          e.preventDefault();
          elem = $(this);
        });
        buitre = $("#viejooeste_change_photo_buitre");
        buitre.find("#buitre_photos li").click(function(e) {
          var photo_path;
          e.preventDefault();
          photo_path = $(this).find("img").attr("src");
          $("div#buitre_photo > img").fadeOut(100, function() {
            buitre.find("div#buitre_photo > img").attr("src", photo_path);
            return buitre.find("div#buitre_photo > img").fadeIn(1000);
          });
        });
        indio = $("#viejooeste_change_photo_indio");
        indio.find("#indio_photos li").click(function(e) {
          var photo_path;
          e.preventDefault();
          photo_path = $(this).find("img").attr("src");
          $("div#indio_photo > img").fadeOut(100, function() {
            indio.find("div#indio_photo > img").attr("src", photo_path);
            return indio.find("div#indio_photo > img").fadeIn(1000);
          });
        });
        rifle = $("#viejooeste_change_photo_rifle");
        rifle.find("#rifle_photos li").click(function(e) {
          var photo_path;
          e.preventDefault();
          photo_path = $(this).find("img").attr("src");
          $("div#rifle_photo > img").fadeOut(100, function() {
            rifle.find("div#rifle_photo > img").attr("src", photo_path);
            return rifle.find("div#rifle_photo > img").fadeIn(1000);
          });
        });
        establo = $("#viejooeste_change_photo_establo");
        establo.find("#establo_photos li").click(function(e) {
          var photo_path;
          e.preventDefault();
          photo_path = $(this).find("img").attr("src");
          $("div#establo_photo > img").fadeOut(100, function() {
            establo.find("div#establo_photo > img").attr("src", photo_path);
            return establo.find("div#establo_photo > img").fadeIn(1000);
          });
        });
        pistolero = $("#viejooeste_change_photo_pistolero");
        pistolero.find("#pistolero_photos li").click(function(e) {
          var photo_path;
          e.preventDefault();
          photo_path = $(this).find("img").attr("src");
          $("div#pistolero_photo > img").fadeOut(100, function() {
            pistolero.find("div#pistolero_photo > img").attr("src", photo_path);
            return pistolero.find("div#pistolero_photo > img").fadeIn(1000);
          });
        });
        mineros = $("#viejooeste_change_photo_mineros");
        mineros.find("#mineros_photos li").click(function(e) {
          var photo_path;
          e.preventDefault();
          photo_path = $(this).find("img").attr("src");
          $("div#mineros_photo > img").fadeOut(100, function() {
            mineros.find("div#mineros_photo > img").attr("src", photo_path);
            return mineros.find("div#mineros_photo > img").fadeIn(1000);
          });
        });
        caballos = $("#viejooeste_change_photo_caballos");
        caballos.find("#caballos_photos li").click(function(e) {
          var photo_path;
          e.preventDefault();
          photo_path = $(this).find("img").attr("src");
          $("div#caballos_photo > img").fadeOut(100, function() {
            caballos.find("div#caballos_photo > img").attr("src", photo_path);
            return caballos.find("div#caballos_photo > img").fadeIn(1000);
          });
        });
        cacique = $("#viejooeste_change_photo_cacique");
        cacique.find("#cacique_photos li").click(function(e) {
          var photo_path;
          e.preventDefault();
          photo_path = $(this).find("img").attr("src");
          $("div#cacique_photo > img").fadeOut(100, function() {
            cacique.find("div#cacique_photo > img").attr("src", photo_path);
            return cacique.find("div#cacique_photo > img").fadeIn(1000);
          });
        });
        barril = $("#viejooeste_change_photo_barril");
        barril.find("#barril_photos li").click(function(e) {
          var photo_path;
          e.preventDefault();
          photo_path = $(this).find("img").attr("src");
          $("div#barril_photo > img").fadeOut(100, function() {
            barril.find("div#barril_photo > img").attr("src", photo_path);
            return barril.find("div#barril_photo > img").fadeIn(1000);
          });
        });
        oasis = $("#viejooeste_change_photo_oasis");
        oasis.find("#oasis_photos li").click(function(e) {
          var photo_path;
          e.preventDefault();
          photo_path = $(this).find("img").attr("src");
          $("div#oasis_photo > img").fadeOut(100, function() {
            oasis.find("div#oasis_photo > img").attr("src", photo_path);
            return oasis.find("div#oasis_photo > img").fadeIn(1000);
          });
        });
        vaqueros = $("#viejooeste_change_photo_vaqueros");
        return vaqueros.find("#vaqueros_photos li").click(function(e) {
          var photo_path;
          e.preventDefault();
          photo_path = $(this).find("img").attr("src");
          $("div#vaqueros_photo > img").fadeOut(100, function() {
            vaqueros.find("div#vaqueros_photo > img").attr("src", photo_path);
            return vaqueros.find("div#vaqueros_photo > img").fadeIn(1000);
          });
        });
      };
      return this.init(options);
    }
  };

  $(function() {
    return window.main = new ViejoOeste.Main();
  });

}).call(this);

//# sourceMappingURL=app.js.map