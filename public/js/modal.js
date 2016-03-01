(function() {
  var ViejoOesteModal;

  ViejoOesteModal = {
    Main: function() {
      var options;
      options = {
        menu_extended: false,
        animationTime: 1500
      };
      this.init = function(options) {
        $(window).on('scroll', this.onScroll);
        $(window).on('resize', this.onResize);
        this.eventHandler(options);
      };
      this.onScroll = function() {
        $(".viejooeste-mask").hide();
        $('.viejooeste-modal').hide();
      };
      this.onResize = function() {};
      this.eventHandler = function(options) {
        var maskHeight, maskWidth, winH, winW;
        maskHeight = $(document).height();
        maskWidth = $(window).width();
        $('.viejooeste-mask').css({
          'width': maskWidth,
          'height': maskHeight
        });
        $('.viejooeste-mask').fadeIn(options.animationTime);
        $('.viejooeste-mask').fadeTo("slow", 0.4);
        winH = $(window).height();
        winW = $(window).width();
        $(".viejooeste-modal").css('top', winH / 2 - $(".viejooeste-modal").height() / 2);
        $(".viejooeste-modal").css('left', winW / 2 - $(".viejooeste-modal").width() / 2);
        $(".viejooeste-modal").fadeIn(options.animationTime * 2);
        $('.viejooeste-mask').click(function(e) {
          e.preventDefault();
          $(this).hide();
          $('.viejooeste-modal').hide();
          return false;
        });
        $('.viejooeste-modal > .close').click(function(e) {
          e.preventDefault();
          $(".viejooeste-mask").hide();
          $('.viejooeste-modal').hide();
          return false;
        });
      };
      return this.init(options);
    }
  };

  $(function() {
    return window.main = new ViejoOesteModal.Main();
  });

}).call(this);

//# sourceMappingURL=modal.js.map
