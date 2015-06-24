@extends("layouts.cabin")
@section("title", "Cabañas Temáticas - Doradal Antioquia")
@section("description", "Cabañas temáticas al mejor estilo del viejo oeste. Estamos ubicados en Doradal Antioquia")
@section("keywords", "hoteles en doradal, cabañas temáticas, sitios turíticos")
@section("facebook_cabain")
    <!-- Facebook Conversion Code for Cabañas -->
    <script>(function() {
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
        window._fbq.push(['track', '6024279711073', {'value':'0.00','currency':'COP'}]);
    </script>
@stop
@section("content")
    <section class="viejooeste-container-slider" id="viejooeste_container_slider">
        <div class="viejooeste-baseline">
            <div class="container-baseline" style="padding-left:0px;padding-right: 0px;">
                <div class="center" style="height: 100%;display:block">
                    <div ui-view="viewCabin"></div>
                </div>
            </div>
        </div>
    </section>
@stop