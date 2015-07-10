@extends("layouts.default")
@section("title", "Contacto Hotel Viejo Oeste- Doradal Antioquia")
@section("description", "Contamos con personal calificado, el cual está dispuesto a ofrecerle una excelente orientación en todos nuestros planes de hospedaje. ")
@section("facebook_contact")
    <!-- Facebook Conversion Code for Contacto -->
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
    window._fbq.push(['track', '6024279696273', {'value':'0.00','currency':'COP'}]);
    </script>
    <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6024279696273&amp;cd[value]=0.00&amp;cd[currency]=COP&amp;noscript=1" /></noscript>
@stop
@section("content")
    <section class="viejooeste-container-slider" id="viejooeste_container_slider">
        <img id="slider_desktop" src="img/slider/desktop/slider03.jpg" alt="Hotel Viejo Oeste - Doradal Antioquia" onload="ViejoOesteUtils.Global.setHeightSlider('#viejooeste_container_slider')"/>
        <img id="slider_mobile" src="img/slider/mobile/slider03.jpg" alt="Hotel Viejo Oeste - Doradal Antioquia" />
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
                    <div class="viejooeste-icon-container">
                        <span class="viejooeste-icon-contact"></span>
                    </div>
                    <h2>Contáctenos</h2>
                    <p>Permítanos conocer todas sus <strong>dudas y sugerencias</strong> en cuanto a nuestra planes de hospedaje y demás servicios ofrecedos por el Hotel Viejo Oeste.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="viejooeste-service viejooeste-feature-container" id="viejooeste_service">
        <img src="img/mision.jpg" alt="Servicios Hotel Viejo Oeste - Doradal Antioquia" title="Servicios Hotel Viejo Oeste - Doradal Antioquia" onload="ViejoOesteUtils.Global.setHeight('#viejooeste_service')"/>
        <div class="feature imagen-block">
            <div class="block">
                <div class="vertical-align">
                    <h2>Tu oportunidad de tener una experiencia inolvidable</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="viejooeste-mision viejooeste-feature-container">
        <div class="feature text-block">
            <div class="block">
                <div class="vertical-align">
                    <h2>Diligenciar formulario</h2>
                    <?php if (Session::get('alert_success')): ?>
                    <div class="viejooeste-form-success">
                    {{ Session::get('alert_success');}}
                    </div>
                    <?php endif ?>
                    {{ Form::open(array('url' => 'email', 'method' => 'post', 'class' => 'viejooeste-form-contact', "id" => "form")) }}
                        {{Form::token();}}
                        <!-- Nombre -->
                        {{ Form::label("viejooeste-form-name","Nombre:") }}
                        {{Form::text('viejooeste-form-name','',array('placeholder' => 'Nombre Completo', 'required'=>true));}}
                        <!-- Email -->
                        {{ Form::label("viejooeste-form-email","Email:") }}
                        {{Form::email('viejooeste-form-email','',array('placeholder' => 'Email', 'required'=>true));}}
                        <!-- Phone -->
                        {{ Form::label("viejooeste-form-phone","Teléfono:") }}
                        {{Form::number('viejooeste-form-phone','',array('placeholder' => 'Teléfono', 'required'=>true));}}
                        <!-- Subject -->
                        {{ Form::label("viejooeste-form-subject","Asunto:") }}
                        {{Form::text('viejooeste-form-subject','',array('placeholder' => 'Asunto', 'required'=>true));}}
                        <!-- Detail -->
                         {{ Form::label("viejooeste-form-detail","Detalle:") }}
                        {{Form::textarea('viejooeste-form-detail','',array('placeholder' => 'Detalle', 'required'=>true));}}
                        {{Form::submit('Enviar')}}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </section>
    <section class="viejooeste-service viejooeste-feature-container" id="viejooeste_service">
        <img src="img/contact.jpg" alt="Servicios Hotel Viejo Oeste - Doradal Antioquia" title="Servicios Hotel Viejo Oeste - Doradal Antioquia" onload="ViejoOesteUtils.Global.setHeight('#viejooeste_service')"/>
        <div class="feature imagen-block">
            <div class="block">
                <div class="vertical-align">
                    <h2>Muy pronto sabrás de nosotros</h2>
                </div>
            </div>
        </div>
    </section>
@stop