@extends("layouts.default")
@section("title", "Localización Hotel Viejo Ooeste - Doradal Antioquia")
@section("description", "Por medio de los convenios establecidos con diferentes cooperativas pueden acceder a una experiencia memorable a un costo favorable.")
@section("content")
    <section class="viejooeste-container-slider" id="viejooeste_container_slider">
        <img id="slider_desktop" src="img/slider/desktop/slider05.jpg" alt="Hotel Viejo Oeste - Doradal Antioquia" onload="ViejoOesteUtils.Global.setHeightSlider('#viejooeste_container_slider')"/>
        <img id="slider_mobile" src="img/slider/mobile/slider05.jpg" alt="Hotel Viejo Oeste - Doradal Antioquia" />
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
            <h2>Convenios</h2>
            <p>(Seleccionar Cooperativa)</p>
            <ul class="viejooeste-convenios">
                <li class="convenio" id="coopantex">
                    <img src="/img/coopantex.jpg" alt="Coopantex"/>
                </li>
                <li class="convenio" id="cotrafa">
                    <img src="/img/cotrafa.jpg" alt="Cotrafa"/>
                </li>
            </ul>
            <div class="clearfix"></div>
            <div class="block" id="coopantex-show">
                <div class="vertical-align">
                    <h2>COOPANTEX</h2>
                    <p><a class="link-outbound" href="https://coopantex.coop/">Coopantex</a> y el hotel Viejo Oeste se unen para que disfrutes del único hotel temático de Doradal – Antioquia, con un <i class="discount"></i> de descuento sobre todas nuestras tarifas y como si fuera poco  <a class="link-outbound" href="https://coopantex.coop/">Coopantex</a> te financia la cotización <strong>(desde $200.000 mil pesos)</strong></p>
                    <p>El precio Incluye</p>
                    <ul>
                        <li>Cabaña con aire acondicionado, Televisor en DirecTV y Minibar</li>
                        <li>Desayuno al estilo Viejo Oeste</li>
                        <li>Zona húmeda</li>
                        <li>Zonas comunes</li>
                        <li></li>
                    </ul>
                    <p>
                        Ofrecemos servicio de Restaurante y Bar
                    </p>
                </div>
            </div>
            <div class="block" id="cotrafa-show">
                <div class="vertical-align">
                    <h2>COTRAFA</h2>
                    <p><a class="link-outbound" href="https://coopantex.coop/">Cotrafa</a> y el hotel Viejo Oeste se unen para que disfrutes del único hotel temático de Doradal – Antioquia, con un <i class="discount"></i> de descuento sobre todas nuestras tarifas y como si fuera poco  <a class="link-outbound" href="http://www.cotrafa.com.co//">Cotrafa</a> te financia la cotización <strong>(desde 1 SMLV)</strong></p>
                    <p>El precio Incluye</p>
                    <ul>
                        <li>Cabaña con aire acondicionado, Televisor en DirecTV y Minibar</li>
                        <li>Desayuno al estilo Viejo Oeste</li>
                        <li>Zona húmeda</li>
                        <li>Zonas comunes</li>
                        <li></li>
                    </ul>
                    <p>
                        Ofrecemos servicio de Restaurante y Bar
                    </p>
                </div>
            </div>
        </div>
    </section>
@stop