@extends("layouts.default")
@section("title", "Reseña Histórica Hotel Viejo Oeste - Doradal Antioquia")
@section("description", "En el Hotel Viejo Oeste generamos momentos memorables para nuestros clientes ofreciendo el mejor servicio hotelero en Doradal Antioquia")
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
                    <h1>Misión</h1>
                    <p>Generar en nuestros clientes momentos memorables en cada una de sus visitas, tomando como pilar fundamental la diferencia en todo lo que hacemos.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="viejooeste-service viejooeste-feature-container" id="viejooeste_service">
        <img src="img/mision.jpg" alt="Servicios Hotel Viejo Oeste - Doradal Antioquia" title="Servicios Hotel Viejo Oeste - Doradal Antioquia" onload="ViejoOesteUtils.Global.setHeight('#viejooeste_service')"/>
        <div class="feature imagen-block">
            <div class="block">
                <div class="vertical-align">
                    <h2>El Viejo Oeste es la diferencia ...</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="viejooeste-mision viejooeste-feature-container">
        <div class="feature text-block">
            <div class="block">
                <div class="vertical-align">
                    <h2>Visión</h2>
                    <p>Ser reconocidos como el hotel con los más altos estándares de calidad en el servicio al cliente.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="viejooeste-service viejooeste-feature-container" id="viejooeste_service">
        <img src="img/vision.jpg" alt="Servicios Hotel Viejo Oeste - Doradal Antioquia" title="Servicios Hotel Viejo Oeste - Doradal Antioquia" onload="ViejoOesteUtils.Global.setHeight('#viejooeste_service')"/>
        <div class="feature imagen-block">
            <div class="block">
                <div class="vertical-align">
                    <h2>Una Visión orientada al servicio al cliente</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="viejooeste-mision viejooeste-feature-container">
        <div class="feature text-block">
            <div class="block">
                <div class="vertical-align">
                    <div class="viejooeste-icon-container">
                        <span class="viejooeste-icon-mision"></span>
                    </div>
                    <h2>Valores</h2>
                    <ul class="list">
                        <li>Respeto</li>
                        <li>Innovación</li>
                        <li>Confianza</li>
                        <li>Pasión</li>
                        <li>Responsabilidad</li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="viejooeste-service viejooeste-feature-container" id="viejooeste_service">
        <img src="img/employees.jpg" alt="Empleados Hotel Viejo Oeste - Doradal Antioquia" title="Empleados Hotel Viejo Oeste - Doradal Antioquia" onload="ViejoOesteUtils.Global.setHeight('#viejooeste_service')"/>
        <div class="feature imagen-block">
            <div class="block">
                <div class="vertical-align">
                    <h2></h2>
                </div>
            </div>
        </div>
    </section>
    <section class="viejooeste-mision viejooeste-feature-container">
        <div class="feature text-block">
            <div class="block">
                <div class="vertical-align">
                    <h2>Nuestros Empleados</h2>
                    <p>Siempre dispuestos a brindarles el mejor servicio</p>
                </div>
            </div>
        </div>
    </section>
    <section class="viejooeste-service viejooeste-feature-container" id="viejooeste_service">
        <img src="img/values.jpg" alt="Servicios Hotel Viejo Oeste - Doradal Antioquia" title="Servicios Hotel Viejo Oeste - Doradal Antioquia" onload="ViejoOesteUtils.Global.setHeight('#viejooeste_service')"/>
        <div class="feature imagen-block">
            <div class="block">
                <div class="vertical-align">
                    <h2>Nuestros clientes son nuestra razón de ser</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="viejooeste-mision viejooeste-feature-container">
        <div class="feature text-block">
            <div class="block">
                <div class="vertical-align">
                    <div style="width:30%;height: 30%;position: relative;margin: 0px auto">
                    <img src="img/logo_3x.png" alt="Logo Hotel Viejo Oeste"/>
                    </div>
                    <h2>Logo</h2>
                    <ul class="list">
                        <li><strong>El Círculo</strong></li>
                        <li><span>Simboliza el mundo creamos para nuestros clientes, inspirado en el Viejo Oeste</span></li>
                        <li><strong>El Cactus:</strong></li>
                        <li><span>el cactus es por excelencia icono de los paisajes del viejo oeste, representa la vida misma:  se debe tener raíces fuertes que te brinden estabilidad, debes cuidarte sin ánimo de herir a nadie y debes tener la suficiente fortaleza para resistir los momentos difíciles, pero también debes mostrarte vigoroso, dando así gracias por vivir.</span></li>
                        <li><strong>El Vaquero:</strong></li>
                        <li><span>Simboliza todos los viajeros que llegan a nuestro hotel con la ilusión de <strong class="type_2">vivir una experiencia que trascienda en el tiempo.</strong></span></li>
                        <li><strong>El Caballo:</strong></li>
                        <li><span>Simboliza el cómplice del vaquero, aquel que vive y disfruta con él las aventuras que le dan sentido a su vida; así nos sentimos en el Viejo Oeste cómplices de cada uno de nuestros nuestros clientes.</span></li>
                        <li><strong>El Rayo de Sol:</strong></li>
                        <li><span>Simboliza el caluroso clima de Doradal, Antioquia.</span></li>
                        <li><span><strong class="type_3">*</strong> El Logo es un valioso aporte de nuestro amigo y aliado el señor <strong>César Londoño</strong>, a él todo nuestro agradecimiento.</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="viejooeste-service viejooeste-feature-container" id="viejooeste_service">
        <img src="img/services.jpg" alt="Origen Hotel Viejo Oeste - Doradal Antioquia" title="Servicios Hotel Viejo Oeste - Doradal Antioquia" onload="ViejoOesteUtils.Global.setHeight('#viejooeste_service')"/>
        <div class="feature imagen-block">
            <div class="block">
                <div class="vertical-align">
                    <h2>Una experiencia que trasciende en el tiempo ...</h2>
                </div>
            </div>
        </div>
    </section>
@stop