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
