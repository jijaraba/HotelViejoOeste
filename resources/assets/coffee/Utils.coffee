ViejoOesteUtils =
  Global:
    setHeight: (elem) ->
      element = $ elem
      height = element.height()
      $(".imagen-block .block").height(height)
      false

    setHeightSlider: (elem) ->
      element = $ elem
      height = element.height()
      $(".container-baseline").height(height)
      false

window.ViejoOesteUtils = ViejoOesteUtils

