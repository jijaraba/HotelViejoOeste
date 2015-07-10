@extends("layouts.default")
@section("title", "Cabañas Temáticas - Doradal Antioquia")
@section("description", "Cabañas temáticas al mejor estilo del viejo oeste. Atrévete a vivir una experiencia diferente.")
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
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6024279711073&amp;cd[value]=0.00&amp;cd[currency]=COP&amp;noscript=1" /></noscript>
@stop
@section("content")
    <section class="viejooeste-container-global viejooeste-container-bg viejooeste-cabin-color">
        <div class="viejooeste-container-imagen">
            <img style="width: " src="img/viejooeste-wheel.png" alt="Cabañas Temáticas - Hotel Viejo Oeste"/>
        </div>
        <h2>La mejor propuesta de los hoteles en Doradal Antioquia</h2>
        <p>Nuestras cabañas están ambientadas al mejor estilo del viejo oeste</p>
        <div class="viejooeste-down" id="viejooeste_indicator">
            <span>Desplazar hacia abajo</span>
            <br>
            <span class="viejooeste-icon viejooeste-icon-indicator"></span>
        </div>
    </section>
    <section class="viejooeste-container-content">
        <div class="viejooeste-container-header">
            <h2>Cabañas Temáticas</h2>
            <ul class="viejooeste-container-options" id="viejooeste_container_options">
                <li class="active"><a href="#" data-cabin="buitre">Buitre</a></li>
                <li><a href="#" data-cabin="indio">Indio</a></li>
                <li><a href="#" data-cabin="rifle">Rifle</a></li>
                <li><a href="#" data-cabin="establo">Establo</a></li>
                <li><a href="#" data-cabin="pistolero">Pistolero</a></li>
                <li><a href="#" data-cabin="mineros">Mineros</a></li>
                <li><a href="#" data-cabin="caballos">Caballos</a></li>
                <li><a href="#" data-cabin="cacique">Cacique</a></li>
                <li><a href="#" data-cabin="barril">Barril</a></li>
                <li><a href="#" data-cabin="oasis">Oasis</a></li>
                <li><a href="#" data-cabin="vaqueros">Vaqueros</a></li>
            </ul>
            <form action="#" class="viejooeste-form">
                <label for="viejooeste_select_options">Seleccionar Cabaña</label>
                <select name="viejooeste-select-cabin" id="viejooeste_select_options">
                    <option value="buitre">Buitre</option>
                    <option value="indio">Indio</option>
                    <option value="rifle">Rifle</option>
                    <option value="establo">Establo</option>
                    <option value="pistolero">Pistolero</option>
                    <option value="mineros">Mineros</option>
                    <option value="caballos">Caballos</option>
                    <option value="cacique">Cacique</option>
                    <option value="barril">Barril</option>
                    <option value="oasis">Oasis</option>
                    <option value="vaqueros">Vaqueros</option>
                </select>
            </form>
            <section class="viejooeste-cabin-display" id="viejooeste_cabin_display">
                <!-- Buitre -->
                <div class="cabin cabin-show" id="cabin_buitre">
                    <ul>
                        <li>
                            <div class="info">
                                <h3>Cabaña Buitre (Jacuzzi)</h3>
                                <p>
                                Son aves grandes, emblemáticas del oeste, se elevan sin esfuerzo generando
                                al volar un hermoso espectáculo para la vista; de aspecto poco atractivo pero
                                con un encanto especial al posarse en lo más alto de las rocas.
                                </p>
                                <p>Esta cabaña es un <strong>pequeño nido de amor</strong> para que dejes volar tu imaginación  y te escapes de ti mismo.</p>
                                <p><strong>Capacidad:</strong> 2 personas</p>
                            </div>
                        </li>
                        <li>
                            <div class="imagen">
                                <img src="img/cabin/buitre.png" alt="Cabaña Buitre - Hotel Viejo Oeste"/>
                                <ul>
                                    <li><span>Temporada baja</span><br>Precio: $150.000</li>
                                    <li><span>Temporada alta</span><br>Precio: $300.000</li>
                                    <li style="width:100%">Incluye desayuno al estilo <strong>Viejo Oeste</strong> y consumo del <strong>minibar</strong> de la cabaña</li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <section class="photos" id="viejooeste_change_photo_buitre" >
                                <div id="buitre_photo">
                                    <img src="img/cabin/buitre/large/buitre01.jpg" alt="Cabaña Buitre - Hotel Viejo Oeste"/>
                                </div>
                                <ul id="buitre_photos">
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/buitre/large/buitre01.jpg" alt="Cabaña Buitre - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/buitre/large/buitre02.jpg" alt="Cabaña Buitre - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/buitre/large/buitre05.jpg" alt="Cabaña Buitre - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/buitre/large/buitre06.jpg" alt="Cabaña Buitre - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/buitre/large/buitre07.jpg" alt="Cabaña Buitre - Hotel Viejo Oeste"/>
                                    </li>
                                </ul>
                            </section>
                        </li>
                    </ul>
                </div>
                <!-- Indio -->
                <div class="cabin cabin-hide" id="cabin_indio">
                    <ul>
                        <li>
                            <div class="info">
                                <h3>Cabaña Indio</h3>
                                <p>
                                Hombre fuerte y aguerrido que  siempre vé más allá, tiene la suspicacia para enfrentar cualquier situación, imagina lo inimaginable, lo hace realidad y luego busca los brazos de su amada para entregarle su corazón apasionado.
                                </p>
                                <p>Esta cabaña es simplemente un <strong>idilio de amor</strong>.</p>
                                <p><strong>Capacidad:</strong> 2 personas</p>
                            </div>
                        </li>
                        <li>
                            <div class="imagen">
                                <img src="img/cabin/indio.png" alt="Cabaña Indio - Hotel Viejo Oeste"/>
                                <ul>
                                    <li><span>Temporada baja</span><br>Precio: $120.000</li>
                                    <li><span>Temporada alta</span><br>Precio: $250.000</li>
                                    <li style="width:100%">Incluye desayuno al estilo <strong>Viejo Oeste</strong> y consumo del <strong>minibar</strong> de la cabaña</li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <section class="photos" id="viejooeste_change_photo_indio">
                                <div id="indio_photo">
                                    <img src="img/cabin/indio/large/indio01.jpg" alt="Cabaña Indio - Hotel Viejo Oeste"/>
                                </div>
                                <ul id="indio_photos">
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/indio/large/indio01.jpg" alt="Cabaña Indio - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/indio/large/indio02.jpg" alt="Cabaña Indio - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/indio/large/indio03.jpg" alt="Cabaña Indio - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/indio/large/indio04.jpg" alt="Cabaña Indio - Hotel Viejo Oeste"/>
                                    </li>
                                </ul>
                            </section>
                        </li>
                    </ul>
                </div>
                <!-- Rifle -->
                <div class="cabin cabin-hide" id="cabin_rifle">
                    <ul>
                        <li>
                            <div class="info">
                                <h3>Cabaña Rifle</h3>
                                <p>
                                Dicen que las armas están hechas para igualar a los hombres, en ese viejo oeste así lo creían y por ello adoptaron el rifle como una parte más de su cuerpo, con él se defienden, con él enamoran, con él se divierten, con él viven.</p>
                                <p>
                                Esta cabaña <strong>nos llama</strong> a socializar a vivir intensamente cada espacio, cada recuerdo, cada persona.</p>
                                <p><strong>Capacidad:</strong> 4 personas</p>
                            </div>
                        </li>
                        <li>
                            <div class="imagen">
                                <img src="img/cabin/rifle.png" alt="Cabaña Rifle - Hotel Viejo Oeste"/>
                                <ul>
                                    <li><span>Temporada baja</span><br>Precio: $240.000</li>
                                    <li><span>Temporada alta</span><br>Precio: $400.000</li>
                                    <li style="width:100%">Incluye desayuno al estilo <strong>Viejo Oeste</strong> y consumo del <strong>minibar</strong> de la cabaña</li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <section class="photos" id="viejooeste_change_photo_rifle">
                                <div id="rifle_photo">
                                    <img src="img/cabin/rifle/large/rifle01.jpg" alt="Cabaña Buitre - Hotel Viejo Oeste"/>
                                </div>
                                <ul id="rifle_photos">
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/rifle/large/rifle01.jpg" alt="Cabaña Rifle - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/rifle/large/rifle02.jpg" alt="Cabaña Rifle - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/rifle/large/rifle03.jpg" alt="Cabaña Rifle - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/rifle/large/rifle04.jpg" alt="Cabaña Rifle - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/rifle/large/rifle05.jpg" alt="Cabaña Rifle - Hotel Viejo Oeste"/>
                                    </li>
                                </ul>
                            </section>
                        </li>
                    </ul>
                </div>
                <!-- Establo -->
                <div class="cabin cabin-hide" id="cabin_establo">
                    <ul>
                        <li>
                            <div class="info">
                                <h3>Cabaña Establo</h3>
                                <p>
                                Testigo de los hondos suspiros que el exhausto vaquero deja salir desde lo profundo de su ser, esos suspiros que hacen eco en el desértico oeste y que sólo su caballo sabe comprender.
                                </p>
                                <p>
                                Esta cabaña, nos invita a establecer <strong>vínculos profundos</strong> con nosotros mismos y con nuestros seres queridos
                                </p>
                                <p><strong>Capacidad:</strong> 4 personas</p>
                            </div>
                        </li>
                        <li>
                            <div class="imagen">
                                <img src="img/cabin/establo.png" alt="Cabaña Establo - Hotel Viejo Oeste"/>
                                <ul>
                                    <li><span>Temporada baja</span><br>Precio: $240.000</li>
                                    <li><span>Temporada alta</span><br>Precio: $400.000</li>
                                    <li style="width:100%">Incluye desayuno al estilo <strong>Viejo Oeste</strong> y consumo del <strong>minibar</strong> de la cabaña</li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <section class="photos" id="viejooeste_change_photo_establo">
                                <div id="establo_photo">
                                    <img src="img/cabin/establo/large/establo01.jpg" alt="Cabaña Establo - Hotel Viejo Oeste"/>
                                </div>
                                <ul id="establo_photos">
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/establo/large/establo01.jpg" alt="Cabaña Establo - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/establo/large/establo02.jpg" alt="Cabaña Establo - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/establo/large/establo03.jpg" alt="Cabaña Establo - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/establo/large/establo04.jpg" alt="Cabaña Establo - Hotel Viejo Oeste"/>
                                    </li>
                                </ul>
                            </section>
                        </li>
                    </ul>
                </div>
                <!-- Pistolero -->
                <div class="cabin cabin-hide" id="cabin_pistolero">
                    <ul>
                        <li>
                            <div class="info">
                                <h3>Cabaña Pistolero</h3>
                                <p>
                                Protagonistas del desarrollo histórico, estos pistoleros famosos forajidos del lejano oeste, son el único género capaz de escribir la historia en vez de recrearla.
                                </p>
                                <p>
                                El pistolero es un hombre habilidoso, cansado, harto de todo, que va de pueblo en pueblo huyendo, en busca de todo y de nada.
                                Esta cabaña esta <strong>provista para equilibrar su mente</strong> y brindarle descanso a su cuerpo.
                                </p>
                                <p><strong>Capacidad:</strong> 4 personas</p>
                            </div>
                        </li>
                        <li>
                            <div class="imagen">
                                <img src="img/cabin/pistolero.png" alt="Cabaña Pistolero - Hotel Viejo Oeste"/>
                                <ul>
                                    <li><span>Temporada baja</span><br>Precio: $240.000</li>
                                    <li><span>Temporada alta</span><br>Precio: $400.000</li>
                                    <li style="width:100%">Incluye desayuno al estilo <strong>Viejo Oeste</strong> y consumo del <strong>minibar</strong> de la cabaña</li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <section class="photos" id="viejooeste_change_photo_pistolero">
                                <div id="pistolero_photo">
                                    <img src="img/cabin/pistolero/large/pistolero01.jpg" alt="Cabaña Pistolero - Hotel Viejo Oeste"/>
                                </div>
                                <ul id="pistolero_photos">
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/pistolero/large/pistolero01.jpg" alt="Cabaña Pistolero - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/pistolero/large/pistolero02.jpg" alt="Cabaña Pistolero - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/pistolero/large/pistolero03.jpg" alt="Cabaña Pistolero - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/pistolero/large/pistolero04.jpg" alt="Cabaña Pistolero - Hotel Viejo Oeste"/>
                                    </li>
                                </ul>
                            </section>
                        </li>
                    </ul>
                </div>
                <!-- Mineros -->
                <div class="cabin cabin-hide" id="cabin_mineros">
                    <ul>
                        <li>
                            <div class="info">
                                <h3>Cabaña Mineros (Confort Adicional)</h3>
                                <p>
                                Hombres decididos que pasaron toda su vida en busca de un futuro mejor, con la firme esperanza de llegar a sus hogares y disfrutar de la recompensa por años de esfuerzo.
                                </p>
                                <p>
                                Esta cabaña es la <strong>suite del Viejo Oeste</strong>, está diseñada para deleitarse en el confort y la tranquilidad.
                                </p>
                                <p><strong>Capacidad:</strong> 6 personas</p>
                            </div>
                        </li>
                        <li>
                            <div class="imagen">
                                <img src="img/cabin/mineros.png" alt="Cabaña Mineros - Hotel Viejo Oeste"/>
                                <ul>
                                    <li><span>Temporada baja</span><br>Precio: $360.000</li>
                                    <li><span>Temporada alta</span><br>Precio: $500.000</li>
                                    <li style="width:100%">Incluye desayuno al estilo <strong>Viejo Oeste</strong> y consumo del <strong>minibar</strong> de la cabaña</li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <section class="photos" id="viejooeste_change_photo_mineros">
                                <div id="mineros_photo">
                                    <img src="img/cabin/mineros/large/mineros01.jpg" alt="Cabaña Mineros - Hotel Viejo Oeste"/>
                                </div>
                                <ul id="mineros_photos">
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/mineros/large/mineros01.jpg" alt="Cabaña Mineros - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/mineros/large/mineros02.jpg" alt="Cabaña Mineros - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/mineros/large/mineros03.jpg" alt="Cabaña Mineros - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/mineros/large/mineros04.jpg" alt="Cabaña Mineros - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/mineros/large/mineros05.jpg" alt="Cabaña Mineros - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/mineros/large/mineros06.jpg" alt="Cabaña Mineros - Hotel Viejo Oeste"/>
                                    </li>
                                </ul>
                            </section>
                        </li>
                    </ul>
                </div>
                <!-- Caballos -->
                <div class="cabin cabin-hide" id="cabin_caballos">
                    <ul>
                        <li>
                            <div class="info">
                                <h3>Cabaña Caballos (Jacuzzi)</h3>
                                <p>
                                Criaturas de espíritu indomable cuyo galopeo resuena en el viejo oeste, las aventuras de sus jinetes, son también sus aventuras, por eso se convierten en los cómplices perfectos.
                                </p>
                                <p>
                                Esta cabaña nos transporta al lugar <strong>ideal para  compartir con amigos y familiares</strong> esas hazañas que le dan sentido a la vida. </p>
                                <p><strong>Capacidad:</strong> 6 personas</p>
                            </div>
                        </li>
                        <li>
                            <div class="imagen">
                                <img src="img/cabin/caballos.png" alt="Cabaña Caballos - Hotel Viejo Oeste"/>
                                <ul>
                                    <li><span>Temporada baja</span><br>Precio: $360.000</li>
                                    <li><span>Temporada alta</span><br>Precio: $600.000</li>
                                    <li style="width:100%">Incluye desayuno al estilo <strong>Viejo Oeste</strong> y consumo del <strong>minibar</strong> de la cabaña</li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <section class="photos" id="viejooeste_change_photo_caballos">
                                <div id="caballos_photo">
                                    <img src="img/cabin/caballos/large/caballos06.jpg" alt="Cabaña Caballos - Hotel Viejo Oeste "/>
                                </div>
                                <ul id="caballos_photos">
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/caballos/large/caballos06.jpg" alt="Cabaña Caballos - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/caballos/large/caballos01.jpg" alt="Cabaña Caballos - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/caballos/large/caballos02.jpg" alt="Cabaña Caballos - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/caballos/large/caballos03.jpg" alt="Cabaña Caballos - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/caballos/large/caballos05.jpg" alt="Cabaña Caballos - Hotel Viejo Oeste"/>
                                    </li>
                                </ul>
                            </section>
                        </li>
                    </ul>
                </div>
                <!-- Cacique -->
                <div class="cabin cabin-hide" id="cabin_cacique">
                    <ul>
                        <li>
                            <div class="info">
                                <h3>Cabaña Cacique (Jacuzzi)</h3>
                                <p>
                                La valentía y la sabiduría con la que dirige su pueblo apache, lo convierte en un ser especial, capaz de hacer familia con su voz y paz con su flecha.
                                </p>
                                <p>
                                Esta cabaña está llena de regocijo, hace que evoquemos nuestras raíces.
                                </p>
                                <p><strong>Capacidad:</strong> 10 personas</p>
                            </div>
                        </li>
                        <li>
                            <div class="imagen">
                                <img src="img/cabin/cacique.png" alt="Cabaña Cacique - Hotel Viejo Oeste"/>
                                <ul>
                                    <li><span>Temporada baja</span><br>Precio: $600.000</li>
                                    <li><span>Temporada alta</span><br>Precio: $900.000</li>
                                    <li style="width:100%">Incluye desayuno al estilo <strong>Viejo Oeste</strong> y consumo del <strong>minibar</strong> de la cabaña</li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <section class="photos" id="viejooeste_change_photo_cacique">
                                <div id="cacique_photo">
                                    <img src="img/cabin/cacique/large/cacique08.jpg" alt="Cabaña Cacique - Hotel Viejo Oeste"/>
                                </div>
                                <ul id="cacique_photos">
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/cacique/large/cacique08.jpg" alt="Cabaña Cacique - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/cacique/large/cacique01.jpg" alt="Cabaña Cacique - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/cacique/large/cacique02.jpg" alt="Cabaña Cacique - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/cacique/large/cacique06.jpg" alt="Cabaña Cacique - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/cacique/large/cacique07.jpg" alt="Cabaña Cacique - Hotel Viejo Oeste"/>
                                    </li>
                                </ul>
                            </section>
                        </li>
                    </ul>
                </div>
                <!-- Barril -->
                <div class="cabin cabin-hide" id="cabin_barril">
                    <ul>
                        <li>
                            <div class="info">
                                <h3>Cabaña Barril</h3>
                                <p>
                                De el los vaqueros y pistoleros de la época extraen el líquido que alivia todas sus penas y en él depositan sus desventuras;  cada trago los libera de sí mismos.
                                </p>
                                <p>
                                Esta cabaña nos <strong>embriaga de paz interior</strong> para hacernos descansar en medio de la sencillez.
                                </p>
                                <p><strong>Capacidad:</strong> 7 personas</p>
                            </div>
                        </li>
                        <li>
                            <div class="imagen">
                                <img src="img/cabin/barril.png" alt="Cabaña Barril - Hotel Viejo Oeste"/>
                                <ul>
                                    <li><span>Temporada baja</span><br>Precio: $420.000</li>
                                    <li><span>Temporada alta</span><br>Precio: $500.000</li>
                                    <li style="width:100%">Incluye desayuno al estilo <strong>Viejo Oeste</strong> y consumo del <strong>minibar</strong> de la cabaña</li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <section class="photos" id="viejooeste_change_photo_barril">
                                <div id="barril_photo">
                                    <img src="img/cabin/barril/large/barril01.jpg" alt="Cabaña Barril - Hotel Viejo Oeste"/>
                                </div>
                                <ul id="barril_photos">
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/barril/large/barril01.jpg" alt="Cabaña Barril - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/barril/large/barril02.jpg" alt="Cabaña Barril - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/barril/large/barril03.jpg" alt="Cabaña Barril - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/barril/large/barril04.jpg" alt="Cabaña Barril - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/barril/large/barril05.jpg" alt="Cabaña Barril - Hotel Viejo Oeste"/>
                                    </li>
                                </ul>
                            </section>
                        </li>
                    </ul>
                </div>
                <!-- Oasis -->
                <div class="cabin cabin-hide" id="cabin_oasis">
                    <ul>
                        <li>
                            <div class="info">
                                <h3>Cabaña Oasis</h3>
                                <p>
                                Inspirada en el barril de ron y wiski de la época de la conquista del viejo oeste, donde toman un baño los vaqueros luego de un largo viaje.
                                </p>
                                <p>
                                Esta cabaña es un paraje en <strong>nuestro pequeño desierto</strong> del oeste donde encontramos agua en movimiento rodeada de vegetación, ideal para compartir en familia.
                                </p>
                                <p><strong>Capacidad:</strong> 8 personas</p>
                            </div>
                        </li>
                        <li>
                            <div class="imagen">
                                <img src="img/cabin/oasis.png" alt="Cabaña Oasis - Hotel Viejo Oeste"/>
                                <ul>
                                    <li><span>Temporada baja</span><br>Precio: $480.000</li>
                                    <li><span>Temporada alta</span><br>Precio: $550.000</li>
                                    <li style="width:100%">Incluye desayuno al estilo <strong>Viejo Oeste</strong> y consumo del <strong>minibar</strong> de la cabaña</li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <section class="photos" id="viejooeste_change_photo_oasis">
                                <div id="oasis_photo">
                                    <img src="img/cabin/oasis/large/oasis01.jpg" alt="Cabaña Oasis - Hotel Viejo Oeste"/>
                                </div>
                                <ul id="oasis_photos">
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/oasis/large/oasis01.jpg" alt="Cabaña Oasis - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/oasis/large/oasis02.jpg" alt="Cabaña Oasis - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/oasis/large/oasis03.jpg" alt="Cabaña Oasis - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/oasis/large/oasis04.jpg" alt="Cabaña Oasis - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/oasis/large/oasis05.jpg" alt="Cabaña Oasis - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/oasis/large/oasis06.jpg" alt="Cabaña Oasis - Hotel Viejo Oeste"/>
                                    </li>
                                </ul>
                            </section>
                        </li>
                    </ul>
                </div>
                <!-- Vaqueros -->
                <div class="cabin cabin-hide" id="cabin_vaqueros">
                    <ul>
                        <li>
                            <div class="info">
                                <h3>Cabaña Vaqueros (Jacuzzi)</h3>
                                <p>
                                Sinónimo de incansable, explorador enamorado de su pistola y su caballo, capaz de dar todo por nada, es un luchador con un corazón grande, que hizo de la historia un presente y del presente una pasión por la historia de aquella época.
                                </p>
                                <p>
                                En la cabaña vaqueros están <strong>esas pequeñas cosas que generan pasión</strong>, sólo eso pasión.
                                </p>
                                <p><strong>Capacidad:</strong> 12 personas</p>
                            </div>
                        </li>
                        <li>
                            <div class="imagen">
                                <img src="img/cabin/vaqueros.png" alt="Cabaña Vaqueros - Hotel Viejo Oeste"/>
                                <ul>
                                    <li><span>Temporada baja</span><br>Precio: $720.000</li>
                                    <li><span>Temporada alta</span><br>Precio: $1.000.000</li>
                                    <li style="width:100%">Incluye desayuno al estilo <strong>Viejo Oeste</strong> y consumo del <strong>minibar</strong> de la cabaña</li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <section class="photos" id="viejooeste_change_photo_vaqueros">
                                <div id="vaqueros_photo">
                                    <img src="img/cabin/vaqueros/large/vaqueros07.jpg" alt="Cabaña Vaqueros - Hotel Viejo Oeste"/>
                                </div>
                                <ul id="vaqueros_photos">
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/vaqueros/large/vaqueros07.jpg" alt="Cabaña Vaqueros - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/vaqueros/large/vaqueros02.jpg" alt="Cabaña Vaqueros - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/vaqueros/large/vaqueros03.jpg" alt="Cabaña Vaqueros - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/vaqueros/large/vaqueros04.jpg" alt="Cabaña Vaqueros - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/vaqueros/large/vaqueros05.jpg" alt="Cabaña Vaqueros - Hotel Viejo Oeste"/>
                                    </li>
                                    <li>
                                        <span class="fa fa-eye fa-2x zoom"></span>
                                        <img src="img/cabin/vaqueros/large/vaqueros06.jpg" alt="Cabaña Vaqueros - Hotel Viejo Oeste"/>
                                    </li>
                                </ul>
                            </section>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </section>
@stop