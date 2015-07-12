@extends("layouts.default")
@section('googlemaps')
    <script type="text/javascript"
            src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDWhjng-wZ9CwP23Um_luPxtr0Z14CjyDs"></script>
@stop
@section('maps')
    <script type="text/javascript">
        function initialize() {
            var mapOptions = {
                center: {lat: -34.397, lng: 150.644},
                zoom: 8
            };
            var map = new google.maps.Map(document.getElementById('viejooesteMap'),
                    mapOptions);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
@stop
@section("title", "Localización Hotel Viejo Ooeste - Doradal Antioquia")
@section("description", "Estamos ubicados a 15 minutos de la Reserva Río Claro y Diagonal a la Hacienda Nápoles")
@section("content")
    <section class="viejooeste-container-slider" id="viejooeste_container_slider">
        <img id="slider_desktop" src="img/slider/desktop/slider04.jpg" alt="Hotel Viejo Oeste - Doradal Antioquia"
             onload="ViejoOesteUtils.Global.setHeightSlider('#viejooeste_container_slider')"/>
        <img id="slider_mobile" src="img/slider/mobile/slider04.jpg" alt="Hotel Viejo Oeste - Doradal Antioquia"/>

        <div class="viejooeste-baseline">
            <div class="container-baseline">
                <div class="center">
                    <h2></h2>

                    <p></p>
                </div>
            </div>
        </div>
        <div class="viejooeste-down" id="viejooeste_indicator">
            <span>Desplazar hacia abajo</span>
            <br>
            <span class="viejooeste-icon-indicator"></span>
        </div>
    </section>
    <section class="viejooeste-mision viejooeste-feature-container">
        <div class="feature text-block">
            <div class="block">
                <div class="vertical-align">
                    <h2>Localización</h2>

                    <p>Estamos ubicados a 500mt diagonal a la <a href="http://www.haciendanapoles.com/"
                                                                 style="color:#e69000;">Hacienda Nápoles</a>, 15 minutos
                        hacia Medellín de la Reserva Natural Río Claro, a 15 minutos hacia Bogotá del malecón de Puerto
                        Trinfo y a escasos minutos de hermosos charcos naturales de la región como San Juan, Sonia y
                        Piedras Blancas.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="map" style="width: 100%; height: 525px;">
        <div id="#viejooesteMap" style="width: 100%; height: 525px;"></div>
    </section>
@stop