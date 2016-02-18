ViejoOeste =

  Main: ()->

    options =
      menu_extended: false


    @init= (options)->
      $(window).on('scroll', @.onScroll);
      $(window).on('resize', @.onResize);
      @eventHandler(options)
      return


    @onScroll= () ->
      #Detectar posición del nodo
      contained = $("#landing_cabin").height();
      if contained >= $(window).scrollTop()
        $("#slider_container").css("top", ($(window).scrollTop()) + "px");
      return

    @onResize= () ->
      ViejoOesteUtils.Global.setHeightSlider("#viejooeste_container_slider")
      ViejoOesteUtils.Global.setHeight("#viejooeste_service")
      ViejoOesteUtils.Global.setHeight("#viejooeste_spaces")
      return

    @gallery_global= () ->
      $("#viejooeste_gallery_display").find("ul.items > li.global").fadeOut(1000)
      $("#viejooeste_gallery_display").find("ul.items > li.espacios").fadeIn(1000)
      return


    @eventHandler= (options)->

      ## Slider1
      $("#testimonies").slick(
        dots: false,
        autoplay: true,
        autoplaySpeed: 7000,
        slidesToScroll: 1,
        arrows: false,
        infinite: true,
        adaptiveHeight: true
      )

      ##Slider Cabin
      $('.slider-cabin-container').magnificPopup(
        delegate: 'img',
        type: 'image',
        gallery: {
          enabled:true
        }
      )

      ## Convenios Cotrafa
      $("#cotrafa").bind "click", ->
        $("#cotrafa-show").fadeIn("slow");
        $("#coopantex-show").fadeOut("slow");

      ## Convenios Coopantex
      $("#coopantex").bind "click", ->
        $("#coopantex-show").fadeIn("slow");
        $("#cotrafa-show").fadeOut("slow");


      ## Activación de Menú
      menu = $("#viejooeste_menu")
      menu.bind "click", ->
        if options.menu_extended == true
          ## Hide Menu
          $("#viejooeste_navigator").hide();
          $("header").css({"max-height":"170px",'background-color':"rgba(92,92,92,.6)"});
          options.menu_extended = false
          ## Change Options
          $("#viejooeste_menu_text").text("MENÚ")
          $("#viejooeste_menu_icon").removeClass("fa-times").addClass("fa-bars")
          return
        else
          ## Show Menu
          $("#viejooeste_navigator").show();
          $("header").css({"max-height":"380px",'background-color':"rgba(92,92,92,.9)"});
          options.menu_extended = true
          ## Change Options
          $("#viejooeste_menu_text").text("CERRAR")
          $("#viejooeste_menu_icon").removeClass("fa-bars").addClass("fa-times")
          return

      ## Activación de Indicador
      indicator = $("#viejooeste_indicator")
      indicator.bind "click", ->
          $("html, body").animate
              scrollTop: 500
          ,1000

      ## Menu Options Gallery
      options_gallery = $("#viejooeste_container_options_gallery").find("li").click (e) ->
        e.preventDefault()

        ## Remove Active Class
        options_gallery.removeClass("active")
        ## Select Element
        elem = $(this)
        unless elem.hasClass("active")
          elem.addClass("active")
        option_gallery = elem.find("a").data("option")
        switch option_gallery
          when "global" then $("#viejooeste_gallery_display").find("ul.items > li.global").fadeIn(1000)
          when "espacios" then $("#viejooeste_gallery_display").find("ul.items > li.global").fadeOut(1000) $("#viejooeste_gallery_display").find("ul.items > li.espacios").fadeIn(1000)
          when "cabanas" then $("#viejooeste_gallery_display").find("ul.items > li.global").fadeOut(1000) $("#viejooeste_gallery_display").find("ul.items > li.cabanas").fadeIn(1000)
          when "restaurante" then $("#viejooeste_gallery_display").find("ul.items > li.global").fadeOut(1000) $("#viejooeste_gallery_display").find("ul.items > li.restaurante").fadeIn(1000)
          else console.log "Nothig"
        return


      ## Menu Options
      options = $("#viejooeste_container_options").find("li").click (e) ->
        e.preventDefault()
        ## Remove Active Class
        options.removeClass("active")
        ## Select Element
        elem = $(this)
        unless elem.hasClass("active")
          elem.addClass("active")
        ##Hide Cabins
        $(".cabin").each (index) ->
          $(this).addClass("cabin-hide").removeClass("cabin-show")
          return
        ##Cabin Select
        cabin = elem.find("a").data("cabin")
        $("#cabin_#{cabin}").removeClass("cabin-hide").addClass("cabin-show")

      ## Select Options
      $("#viejooeste_select_options").change (e)->
        e.preventDefault()
        ##Hide Cabins
        $(".cabin").each (index) ->
          $(this).addClass("cabin-hide").removeClass("cabin-show")
          return
        ## Select Element
        cabin = $(this).find("option:selected").val()
        ##Cabin Select
        $("#cabin_#{cabin}").removeClass("cabin-hide").addClass("cabin-show")



      ## Show Gallery
      item = $("#viejooeste_gallery_display").find("ul.items > li.item > a").click (e) ->
        e.preventDefault()
        elem = $(this)
        ## To-DO
        return

      ## Show Cabin
      item = $("#viejooeste_cabin_display").find("cabin").click (e) ->
        e.preventDefault()
        elem = $(this)
        ## To-DO
        return

      ## Buitre Change Photo
      buitre = $("#viejooeste_change_photo_buitre")
      buitre.find("#buitre_photos li").click (e) ->
        e.preventDefault()
        #Photo
        photo_path = $(this).find("img").attr("src")
        #Change
        $("div#buitre_photo > img").fadeOut 100, ->
          buitre.find("div#buitre_photo > img").attr("src",photo_path)
          buitre.find("div#buitre_photo > img").fadeIn(1000)
        return

      ## Indio Change Photo
      indio = $("#viejooeste_change_photo_indio")
      indio.find("#indio_photos li").click (e) ->
        e.preventDefault()
        #Photo
        photo_path = $(this).find("img").attr("src")
        #Change
        $("div#indio_photo > img").fadeOut 100, ->
          indio.find("div#indio_photo > img").attr("src",photo_path)
          indio.find("div#indio_photo > img").fadeIn(1000)
        return

      ## Rifle Change Photo
      rifle = $("#viejooeste_change_photo_rifle")
      rifle.find("#rifle_photos li").click (e) ->
        e.preventDefault()
        #Photo
        photo_path = $(this).find("img").attr("src")
        #Change
        $("div#rifle_photo > img").fadeOut 100, ->
          rifle.find("div#rifle_photo > img").attr("src",photo_path)
          rifle.find("div#rifle_photo > img").fadeIn(1000)
        return

      ## Establo Change Photo
      establo = $("#viejooeste_change_photo_establo")
      establo.find("#establo_photos li").click (e) ->
        e.preventDefault()
        #Photo
        photo_path = $(this).find("img").attr("src")
        #Change
        $("div#establo_photo > img").fadeOut 100, ->
          establo.find("div#establo_photo > img").attr("src",photo_path)
          establo.find("div#establo_photo > img").fadeIn(1000)
        return

      ## Pistolero Change Photo
      pistolero = $("#viejooeste_change_photo_pistolero")
      pistolero.find("#pistolero_photos li").click (e) ->
        e.preventDefault()
        #Photo
        photo_path = $(this).find("img").attr("src")
        #Change
        $("div#pistolero_photo > img").fadeOut 100, ->
          pistolero.find("div#pistolero_photo > img").attr("src",photo_path)
          pistolero.find("div#pistolero_photo > img").fadeIn(1000)
        return

      ## Mineros Change Photo
      mineros = $("#viejooeste_change_photo_mineros")
      mineros.find("#mineros_photos li").click (e) ->
        e.preventDefault()
        #Photo
        photo_path = $(this).find("img").attr("src")
        #Change
        $("div#mineros_photo > img").fadeOut 100, ->
          mineros.find("div#mineros_photo > img").attr("src",photo_path)
          mineros.find("div#mineros_photo > img").fadeIn(1000)
        return

      ## Caballos Change Photo
      caballos = $("#viejooeste_change_photo_caballos")
      caballos.find("#caballos_photos li").click (e) ->
        e.preventDefault()
        #Photo
        photo_path = $(this).find("img").attr("src")
        #Change
        $("div#caballos_photo > img").fadeOut 100, ->
          caballos.find("div#caballos_photo > img").attr("src",photo_path)
          caballos.find("div#caballos_photo > img").fadeIn(1000)
        return

      ## Cacique Change Photo
      cacique = $("#viejooeste_change_photo_cacique")
      cacique.find("#cacique_photos li").click (e) ->
        e.preventDefault()
        #Photo
        photo_path = $(this).find("img").attr("src")
        #Change
        $("div#cacique_photo > img").fadeOut 100, ->
          cacique.find("div#cacique_photo > img").attr("src",photo_path)
          cacique.find("div#cacique_photo > img").fadeIn(1000)
        return

      ## Barril Change Photo
      barril = $("#viejooeste_change_photo_barril")
      barril.find("#barril_photos li").click (e) ->
        e.preventDefault()
        #Photo
        photo_path = $(this).find("img").attr("src")
        #Change
        $("div#barril_photo > img").fadeOut 100, ->
          barril.find("div#barril_photo > img").attr("src",photo_path)
          barril.find("div#barril_photo > img").fadeIn(1000)
        return

      ## Oasis Change Photo
      oasis = $("#viejooeste_change_photo_oasis")
      oasis.find("#oasis_photos li").click (e) ->
        e.preventDefault()
        #Photo
        photo_path = $(this).find("img").attr("src")
        #Change
        $("div#oasis_photo > img").fadeOut 100, ->
          oasis.find("div#oasis_photo > img").attr("src",photo_path)
          oasis.find("div#oasis_photo > img").fadeIn(1000)
        return

      ## Vaqueros Change Photo
      vaqueros = $("#viejooeste_change_photo_vaqueros")
      vaqueros.find("#vaqueros_photos li").click (e) ->
        e.preventDefault()
        #Photo
        photo_path = $(this).find("img").attr("src")
        #Change
        $("div#vaqueros_photo > img").fadeOut 100, ->
          vaqueros.find("div#vaqueros_photo > img").attr("src",photo_path)
          vaqueros.find("div#vaqueros_photo > img").fadeIn(1000)
        return

      ##Audio#
      audio_status = 'stop'
      #$("#viejooeste_play").trigger('play');

      $("#viejooeste_audio").click (e) ->
        e.preventDefault()
        if audio_status == 'play'
          #$("#viejooeste_play").trigger('play');
          $("#viejooeste_audio").removeClass("fa-volume-off")
          $("#viejooeste_audio").addClass("fa-volume-up")
          audio_status = 'stop'
        else
          #$("#viejooeste_play").trigger('pause');
          $("#viejooeste_audio").removeClass("fa-volume-up")
          $("#viejooeste_audio").addClass("fa-volume-off")
          audio_status = 'play'

    @init(options)

$ ()->
  window.main = new ViejoOeste.Main();



