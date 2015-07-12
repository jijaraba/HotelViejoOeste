@extends("layouts.default")
@section("title", "Hotel Viejo Oeste - Doradal Antioquia")
@section("description", "Estamos ubicados en Doradal Antioquia, nuestra propuesta se basa en caracterizar cada cabaña al mejor estilo del viejo oeste")
@section("keywords", "hoteles en doradal, cabañas temáticas, sitios turíticos en doradal, hospedaje en doradal")
@section("facebook_visitantes")
    <!-- Facebook Conversion Code for Visitantes -->
    <script>(function () {
            var _fbq = window._fbq || (window._fbq = []);
            if (!_fbq.loaded) {
                var fbds = document.createElement('script');
                fbds.async = true;
                fbds.src = '//connect.facebook.net/en_US/fbds.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(fbds, s);
                _fbq.loaded = true;
            }
        })();
        window._fbq = window._fbq || [];
        window._fbq.push(['track', '6024279725873', {'value': '1.00', 'currency': 'COP'}]);
    </script>
    <noscript><img height="1" width="1" alt="" style="display:none"
                   src="https://www.facebook.com/tr?ev=6024279725873&amp;cd[value]=1.00&amp;cd[currency]=COP&amp;noscript=1"/>
    </noscript>
@stop
@section("content")
    <section class="viejooeste-container-slider" id="viejooeste_container_slider">
        <img id="slider_desktop" src="img/slider/desktop/slider06.jpg" alt="Hotel Viejo Oeste - Doradal Antioquia"
             onload="ViejoOesteUtils.Global.setHeightSlider('#viejooeste_container_slider')"/>
        <img id="slider_mobile" src="img/slider/mobile/slider06.jpg" alt="Hotel Viejo Oeste - Doradal Antioquia"/>

        <div class="viejooeste-baseline">
            <div class="container-baseline">
                <div class="center">
                    <h2>Un hotel ideal para el descanso</h2>

                    <p>Nos basamos en el viejo oeste para caracterizar nuestros servicios.</p>
                </div>
            </div>
        </div>
        <div class="viejooeste-down" id="viejooeste_indicator">
            <span>Desplazar hacia abajo</span>
            <br>
            <span class="viejooeste-icon-indicator"></span>
        </div>
    </section>
    <section class="viejooeste-gallery viejooeste-feature-container">
        <div class="feature text-block">
            <div class="block">
                <div class="vertical-align">
                    <div class="viejooeste-icon-container">
                        <span class="viejooeste-icon-gallery"></span>
                    </div>
                    <h2>{{ link_to_route('pages.gallery', "Ver galería") }}</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="viejooeste-service viejooeste-feature-container" id="viejooeste_service">
        <img src="img/services.jpg" alt="Servicios Hotel Viejo Oeste - Doradal Antioquia"
             title="Servicios Hotel Viejo Oeste - Doradal Antioquia"
             onload="ViejoOesteUtils.Global.setHeight('#viejooeste_service')"/>

        <div class="feature imagen-block">
            <div class="block">
                <div class="vertical-align">
                    <h2>Atrévete a vivir la experiencia</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="viejooeste-cabin viejooeste-feature-container">
        <div class="feature text-block">
            <div class="block">
                <div class="vertical-align">
                    <div class="viejooeste-icon-container">
                        <span class="viejooeste-icon-cabin"></span>
                    </div>
                    <h2>{{ link_to_route('cabins.index', "Cabañas temáticas") }}</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="viejooeste-spaces viejooeste-feature-container" id="viejooeste_spaces">
        <img src="img/spaces.jpg" alt="Espacios Hotel Viejo Oeste - Doradal Antioquia"
             title="Espacios Hotel Viejo Oeste - Doradal Antioquia"
             onload="ViejoOesteUtils.Global.setHeight('#viejooeste_spaces')"/>

        <div class="feature imagen-block">
            <div class="block">
                <div class="vertical-align">
                    <h2>Espacio ideal para el descanso familiar</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="viejooeste-mision viejooeste-feature-container">
        <div class="feature text-block">
            <div class="block">
                <div class="vertical-align">
                    <div class="viejooeste-icon-container">
                        <span class="viejooeste-icon-cabin"></span>
                    </div>
                    <h1>{{ link_to_route('pages.viejooeste', "Hotel Viejo Oeste") }}</h1>

                    <p>El Hotel Viejo Oeste caracteriza todos sus servicios bajo el enfoque del viejo oeste logrando
                        convertirse en la mejor propuesta de todos los <strong>hoteles en Doradal</strong> Antioquia.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="viejooeste-spaces viejooeste-feature-container" id="viejooeste_spaces">
        <img src="img/hotelviejooeste.jpg" alt="Espacios Hotel Viejo Oeste - Doradal Antioquia"
             title="Espacios Hotel Viejo Oeste - Doradal Antioquia"
             onload="ViejoOesteUtils.Global.setHeight('#viejooeste_spaces')"/>

        <div class="feature imagen-block">
            <div class="block">
                <div class="vertical-align">
                    <h2>El mejor hotel en Doradal Antioquia</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="viejooeste-mision viejooeste-feature-container">
        <div class="feature text-block">
            <div class="block">
                <div class="vertical-align">
                    <h1>Doradal Antioquia</h1>

                    <p>Estamos ubicados en una de las regiones de Antioquia con mayor crecimiento en turismo en los
                        últimos años. Ven y conoce a Doradal de mano de nuestras ofertas y actividades</p>
                </div>
            </div>
        </div>
    </section>
    <section class="viejooeste-spaces viejooeste-feature-container" id="viejooeste_spaces">
        <img src="img/hotelviejooeste_pool.jpg" alt="Espacios Hotel Viejo Oeste - Doradal Antioquia"
             title="Espacios Hotel Viejo Oeste - Doradal Antioquia"
             onload="ViejoOesteUtils.Global.setHeight('#viejooeste_spaces')"/>

        <div class="feature imagen-block">
            <div class="block">
                <div class="vertical-align">
                    <h2>Te esperamos ...</h2>
                </div>
            </div>
        </div>
    </section>
@stop