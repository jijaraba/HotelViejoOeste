@extends("layouts.default")
@section("title", "Blog - Doradal Antioquia")
@section("content")
    <section class="viejooeste-container-slider" id="viejooeste_container_slider">
        <img id="slider_desktop" src="img/slider/desktop/slider02.jpg" alt="Hotel Viejo Oeste - Doradal Antioquia" onload="ViejoOesteUtils.Global.setHeightSlider('#viejooeste_container_slider')"/>
        <img id="slider_mobile" src="img/slider/mobile/slider02.jpg" alt="Hotel Viejo Oeste - Doradal Antioquia" />
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
                    <h2>Blog</h2>
                    <article class="entry">
                        <h2>Remodelamos</h2>
                        <p class="date">11 de Marzo de 2015</p>
                        <p>
                        Con el fin de ofrecer un excelente servicio a nuestros clientes y procurando que tengan una experiencia innolvidable nos dimos a la tarea de remodelar nuestras cabañas: Vaqueros, Cacique, Caballos y Mineros. Para una mayor informaciòn pueden visitar nuestra sección
                        <a href="/cabanas-tematicas">Cabañas</a>
                        </p>
                    </article>
                </div>
            </div>
        </div>
    </section>
@stop