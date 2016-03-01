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
          $("#slider_container").css("top", ($(window).scrollTop()) + "px");
        }
      };
      this.onResize = function() {
        ViejoOesteUtils.Global.setHeightSlider("#viejooeste_container_slider");
        ViejoOesteUtils.Global.setHeight("#viejooeste_service");
        ViejoOesteUtils.Global.setHeight("#viejooeste_spaces");
      };
      this.gallery_global = function() {
        $("#viejooeste_gallery_display").find("ul.items > li.global").fadeOut(1000);
        $("#viejooeste_gallery_display").find("ul.items > li.espacios").fadeIn(1000);
      };
      this.eventHandler = function(options) {
        var audio_status, barril, buitre, caballos, cacique, establo, indicator, indio, item, menu, mineros, oasis, options_gallery, pistolero, rifle, vaqueros;
        $("#testimonies").slick({
          dots: false,
          autoplay: true,
          autoplaySpeed: 7000,
          slidesToScroll: 1,
          arrows: false,
          infinite: true,
          adaptiveHeight: true
        });
        $('.slider-cabin-container').magnificPopup({
          delegate: '> li > a',
          type: 'image',
          gallery: {
            enabled: true
          }
        });
        $('.new-pool').magnificPopup({
          delegate: '> li > a',
          type: 'image',
          gallery: {
            enabled: true
          }
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
        vaqueros.find("#vaqueros_photos li").click(function(e) {
          var photo_path;
          e.preventDefault();
          photo_path = $(this).find("img").attr("src");
          $("div#vaqueros_photo > img").fadeOut(100, function() {
            vaqueros.find("div#vaqueros_photo > img").attr("src", photo_path);
            return vaqueros.find("div#vaqueros_photo > img").fadeIn(1000);
          });
        });
        audio_status = 'stop';
        $("#viejooeste_play").trigger('play');
        return $("#viejooeste_audio").click(function(e) {
          e.preventDefault();
          if (audio_status === 'play') {
            $("#viejooeste_play").trigger('play');
            $("#viejooeste_audio").removeClass("fa-volume-off");
            $("#viejooeste_audio").addClass("fa-volume-up");
            return audio_status = 'stop';
          } else {
            $("#viejooeste_play").trigger('pause');
            $("#viejooeste_audio").removeClass("fa-volume-up");
            $("#viejooeste_audio").addClass("fa-volume-off");
            return audio_status = 'play';
          }
        });
      };
      return this.init(options);
    }
  };

  $(function() {
    return window.main = new ViejoOeste.Main();
  });

}).call(this);

//# sourceMappingURL=viejooeste.js.map
