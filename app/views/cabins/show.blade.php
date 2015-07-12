@extends("layouts.cabin")
@section("title", "$cabin->name - Doradal Antioquia")
@section("description", "$cabin->seo_description")
@section("keywords", "$cabin->seo_keywords")
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
    <section class="viejooeste-landing-cabin col-100" id="landing_cabin">
        <ul class="display-horizontal col-100" style="height: 100%">
            <li class="col-75">
                @include('cabins.partials.cabin', array('cabin'=>$cabin))
            </li>
            <li class="col-25 slider-cabin">
                @include('cabins.partials.nav', array('cabins'=>$cabins,'slug'=>$slug))
            </li>
        </ul>
    </section>
@stop