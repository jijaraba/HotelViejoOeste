@extends("layouts.default")
@section('googlemaps')
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false"></script>
@stop
@section('maps')
{{ HTML::script('/js/map.js')}}
@stop
@section("title", "Localización Hotel Viejo Ooeste - Doradal Antioquia")
@section("description", "Estamos ubicados a 15 minutos de la Reserva Río Claro y Diagonal a la Hacienda Nápoles")
@section("content")
    <section class="viejooeste-container-slider" id="viejooeste_container_slider">
        <img id="slider_desktop" src="img/slider/desktop/slider04.jpg" alt="Hotel Viejo Oeste - Doradal Antioquia" onload="ViejoOesteUtils.Global.setHeightSlider('#viejooeste_container_slider')"/>
        <img id="slider_mobile" src="img/slider/mobile/slider04.jpg" alt="Hotel Viejo Oeste - Doradal Antioquia" />
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
                    <p>Estamos ubicados a 15 minutos de la reserva natural Río Claro y diagonal a la Hacienda Nápoles</p>
                </div>
            </div>
        </div>
    </section>
    <section class="map" style="width: 100%; height: 525px;">
        <div id="#viejooesteMap" style="width: 420px; height: 525px;"></div>
    </section>
@stop