@extends("layouts.default")
@section("title", "Galería de Fotos Hotel Viejo Oeste")
@section("description", "Conoce nuestros diferentes espacios, servicios y la decoración de cada una de las cabañas")
@section("rotator_css")
<link rel="stylesheet" href="/css/gridrotator.css"/>
@stop
@section("rotator_js")
<script src="/js/vendor/jquery-gridrotator/jquery.gridrotator.js"></script>
@stop


@section("content")
    <section class="viejooeste-container-global viejooeste-container-bg viejooeste-gallery-color">
        <div class="viejooeste-container-imagen">
            <img src="img/viejooeste-wheel.png" alt="Galería de Fotos - Hotel Viejo Oeste"/>
        </div>
        <h2>Un hotel ideal para el descanso familiar en Doradal</h2>
        <p>Hotel Viejo Oeste, lo mejor del viejo oeste en Doradal Antioquia</p>
        <div class="viejooeste-down" id="viejooeste_indicator">
            <span>Desplazar hacia abajo</span>
            <br>
            <span class="viejooeste-icon viejooeste-icon-indicator"></span>
        </div>
    </section>
    <section class="viejooeste-container-content">
        <div class="viejooeste-container-header">
            <h2>Galería de Fotos</h2>
            <!--
            <ul class="viejooeste-container-options" id="viejooeste_container_options_gallery">
                <li class="active"><a href="#" data-option="global">Todas</a></li>
                <li><a href="#" data-option="espacios">Espacios</a></li>
                <li><a href="#" data-option="cabanas">Cabañas</a></li>
                <li><a href="#" data-option="restaurante">Restaurante</a></li>
            </ul>
            -->
            <section class="viejooeste-gallery-display ri-grid ri-grid-size-4 ri-shadow" id="viejooeste_gallery_display">
                <img class="ri-loading-image" src="img/loading.gif"/>
                <ul class="items">
                    <li class="item global cabanas">
                         <a href="#">
                        <img src="img/gallery/global/large/global28.jpg" alt="Hotel Viejo Oeste - Cabanas"/>
                        </a>
                    </li>

                    <li class="item global restaurante">
                        <a href="#">
                            <img src="img/gallery/global/large/global40.jpg" alt="Hotel Viejo Oeste - Restaurante"/>
                        </a>
                    </li>
                    <li class="item global espacios">
                        <a href="#">
                        <img src="img/gallery/global/large/global01.jpg" alt="Hotel Viejo Oeste - Oasis"/>
                        </a>
                    </li>
                    <li class="item global restaurante">
                         <a href="#">
                        <img src="img/gallery/global/large/global02.jpg" alt="Hotel Viejo Oeste - Restaurante"/>
                        </a>
                    </li>
                      <li class="item global cabanas">
                           <a href="#">
                          <img src="img/gallery/global/large/global25.jpg" alt="Hotel Viejo Oeste - Cabanas"/>
                          </a>
                      </li>
                    <li class="item global cabanas">
                         <a href="#">
                        <img src="img/gallery/global/large/global20.jpg" alt="Hotel Viejo Oeste - Cabanas"/>
                        </a>
                    </li>

                    <li class="item global restaurante">
                        <a href="#">
                            <img src="img/gallery/global/large/global39.jpg" alt="Hotel Viejo Oeste - Restaurante"/>
                        </a>
                    </li>
                    <li class="item global espacios">
                         <a href="#">
                        <img src="img/gallery/global/large/global03.jpg" alt="Hotel Viejo Oeste - Oasis"/>
                        </a>
                    </li>
                    <li class="item global espacios">
                         <a href="#">
                        <img src="img/gallery/global/large/global04.jpg" alt="Hotel Viejo Oeste - Decoración"/>
                        </a>
                    </li>
                    <li class="item global cabanas">
                         <a href="#">
                        <img src="img/gallery/global/large/global19.jpg" alt="Hotel Viejo Oeste - Cabanas"/>
                        </a>
                    </li>
                    <li class="item global cabanas">
                         <a href="#">
                        <img src="img/gallery/global/large/global05.jpg" alt="Hotel Viejo Oeste - Zona Cabañas"/>
                        </a>
                    </li>
                    <li class="item global cabanas">
                         <a href="#">
                        <img src="img/gallery/global/large/global21.jpg" alt="Hotel Viejo Oeste - Cabanas"/>
                        </a>
                    </li>
                    <li class="item global cabanas">
                         <a href="#">
                        <img src="img/gallery/global/large/global29.jpg" alt="Hotel Viejo Oeste - Cabanas"/>
                        </a>
                    </li>
                    <li class="item global espacios">
                         <a href="#">
                        <img src="img/gallery/global/large/global06.jpg" alt="Hotel Viejo Oeste - Oasis"/>
                        </a>
                    </li>

                    <li class="item global restaurante">
                        <a href="#">
                            <img src="img/gallery/global/large/global38.jpg" alt="Hotel Viejo Oeste - Restaurante"/>
                        </a>
                    </li>
                     <li class="item global cabanas">
                          <a href="#">
                         <img src="img/gallery/global/large/global26.jpg" alt="Hotel Viejo Oeste - Cabanas"/>
                         </a>
                     </li>
                    <li class="item global restaurante">
                         <a href="#">
                        <img src="img/gallery/global/large/global07.jpg" alt="Hotel Viejo Oeste - Restaurante"/>
                        </a>
                    </li>
                    <li class="item global restaurante">
                         <a href="#">
                        <img src="img/gallery/global/large/global34.jpg" alt="Hotel Viejo Oeste - Restaurante"/>
                        </a>
                    </li>
                    <li class="item global cabanas">
                         <a href="#">
                        <img src="img/gallery/global/large/global22.jpg" alt="Hotel Viejo Oeste - Cabanas"/>
                        </a>
                    </li>
                     <li class="item global restaurante">
                         <a href="#">
                        <img src="img/gallery/global/large/global08.jpg" alt="Hotel Viejo Oeste - Restaurante"/>
                        </a>
                    </li>
                    <li class="item global restaurante">
                         <a href="#">
                        <img src="img/gallery/global/large/global09.jpg" alt="Hotel Viejo Oeste - Restaurante"/>
                        </a>
                    </li>
                    <li class="item global restaurante">
                         <a href="#">
                        <img src="img/gallery/global/large/global30.jpg" alt="Hotel Viejo Oeste - Restaurante"/>
                        </a>
                    </li>
                     <li class="item global cabanas">
                          <a href="#">
                         <img src="img/gallery/global/large/global24.jpg" alt="Hotel Viejo Oeste - Cabanas"/>
                         </a>
                     </li>
                    <li class="item global restaurante">
                         <a href="#">
                        <img src="img/gallery/global/large/global10.jpg" alt="Hotel Viejo Oeste - Restaurante"/>
                        </a>
                    </li>

                    <li class="item global restaurante">
                        <a href="#">
                            <img src="img/gallery/global/large/global37.jpg" alt="Hotel Viejo Oeste - Restaurante"/>
                        </a>
                    </li>
                    <li class="item global restaurante">
                         <a href="#">
                        <img src="img/gallery/global/large/global11.jpg" alt="Hotel Viejo Oeste - Restaurante"/>
                        </a>
                    </li>
                    <li class="item global restaurante">
                         <a href="#">
                        <img src="img/gallery/global/large/global12.jpg" alt="Hotel Viejo Oeste - Restaurante"/>
                        </a>
                    </li>
                     <li class="item global cabanas">
                          <a href="#">
                         <img src="img/gallery/global/large/global25.jpg" alt="Hotel Viejo Oeste - Cabanas"/>
                         </a>
                     </li>
                     <li class="item global resturante">
                          <a href="#">
                         <img src="img/gallery/global/large/global35.jpg" alt="Hotel Viejo Oeste - Restaurante"/>
                         </a>
                     </li>
                     <li class="item global cabanas">
                          <a href="#">
                         <img src="img/gallery/global/large/global31.jpg" alt="Hotel Viejo Oeste - Cabanas"/>
                         </a>
                     </li>
                    <li class="item global restaurante">
                         <a href="#">
                        <img src="img/gallery/global/large/global13.jpg" alt="Hotel Viejo Oeste - Restaurante"/>
                        </a>
                    </li>
                    <li class="item global restaurante">
                         <a href="#">
                        <img src="img/gallery/global/large/global14.jpg" alt="Hotel Viejo Oeste - Restaurante"/>
                        </a>
                    </li>
                    <li class="item global cabanas">
                         <a href="#">
                        <img src="img/gallery/global/large/global15.jpg" alt="Hotel Viejo Oeste - Cabañas"/>
                        </a>
                    </li>
                    <li class="item global cabanas">
                         <a href="#">
                        <img src="img/gallery/global/large/global22.jpg" alt="Hotel Viejo Oeste - Cabanas"/>
                        </a>
                    </li>
                    <li class="item global restaurante">
                         <a href="#">
                        <img src="img/gallery/global/large/global36.jpg" alt="Hotel Viejo Oeste - Restaurante"/>
                        </a>
                    </li>
                    <li class="item global cabanas">
                         <a href="#">
                        <img src="img/gallery/global/large/global16.jpg" alt="Hotel Viejo Oeste - Cabañas"/>
                        </a>
                    </li>
                    <li class="item global cabanas">
                         <a href="#">
                        <img src="img/gallery/global/large/global17.jpg" alt="Hotel Viejo Oeste - Cabañas"/>
                        </a>
                    </li>
                    <li class="item global cabanas">
                         <a href="#">
                        <img src="img/gallery/global/large/global32.jpg" alt="Hotel Viejo Oeste - Cabañas"/>
                        </a>
                    </li>
                     <li class="item global cabanas">
                          <a href="#">
                         <img src="img/gallery/global/large/global23.jpg" alt="Hotel Viejo Oeste - Cabanas"/>
                         </a>
                     </li>
                    <li class="item global cabanas">
                         <a href="#">
                        <img src="img/gallery/global/large/global18.jpg" alt="Hotel Viejo Oeste - Cabanas"/>
                        </a>
                    </li>
                     <li class="item global cabanas">
                          <a href="#">
                         <img src="img/gallery/global/large/global27.jpg" alt="Hotel Viejo Oeste - Cabanas"/>
                         </a>
                     </li>
                     <li class="item global cabanas">
                          <a href="#">
                         <img src="img/gallery/global/large/global33.jpg" alt="Hotel Viejo Oeste - Cabanas"/>
                         </a>
                     </li>
                </ul>
            </section>
        </div>
    </section>
	<script type="text/javascript">
	$(function() {
		$('#viejooeste_gallery_display').gridrotator({
		    rows: 2,
		    columns: 4,
		    w768 : {
		        rows : 2,
		        columns : 2
		    },
            w480 : {
                rows : 2,
                columns : 2
            },
		    w320 : {
			    rows : 4,
				columns : 2
			},
			w240 : {
				rows : 6,
				columns : 1
			},
			animType: 'random'
		});
	});
    </script>
@stop