ViejoOesteModal =

  Main: ()->

    options =
      menu_extended: false,
      animationTime: 1500,


    @init= (options)->
      $(window).on('scroll', @.onScroll);
      $(window).on('resize', @.onResize);
      @eventHandler(options)
      return


    @onScroll= () ->
      $(".viejooeste-mask").hide();
      $('.viejooeste-modal').hide();
      return

    @onResize= () ->
      return

    @eventHandler= (options)->

      maskHeight = $(document).height()
      maskWidth = $(window).width()

      $('.viejooeste-mask').css({'width':maskWidth,'height':maskHeight})
      $('.viejooeste-mask').fadeIn(options.animationTime);
      $('.viejooeste-mask').fadeTo("slow",0.4);

      winH = $(window).height()
      winW = $(window).width()
      $(".viejooeste-modal").css('top', winH/2-$(".viejooeste-modal").height()/2)
      $(".viejooeste-modal").css('left', winW/2-$(".viejooeste-modal").width()/2)
      $(".viejooeste-modal").fadeIn(options.animationTime * 2)


      $('.viejooeste-mask').click (e) ->
        e.preventDefault()
        $(this).hide()
        $('.viejooeste-modal').hide()
        false


      $('.viejooeste-modal > .close').click (e) ->
        e.preventDefault()
        $(".viejooeste-mask").hide()
        $('.viejooeste-modal').hide()
        false

      return

    @init(options)

$ ()->
  window.main = new ViejoOesteModal.Main();
