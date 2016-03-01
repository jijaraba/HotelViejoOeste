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

//# sourceMappingURL=Utils.js.map
