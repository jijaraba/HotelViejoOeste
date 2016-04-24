<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield("title")</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="BigMountain" />
    <meta name="description" content="@yield('description')" />
    <meta name="keywords" content="@yield('keywords')" />
    <link rel="stylesheet" href="/css/slick.css?v={{ Hash::make(time()) }}"/>
    <link rel="stylesheet" href="/css/app.css?v={{ Hash::make(time()) }}"/>
    @yield("rotator_css")
    @yield("modal_css")
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="/js/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="/js/Utils.js"></script>
    <script src="/js/vendor/html5shiv/html5shiv.js"></script>
    <script src="/js/modernizr.js"></script>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-42866050-3', 'hotelviejooeste.com');
		ga('send', 'pageview');
	</script>
    <!-- Kissmetrics tracking snippet -->
    <script type="text/javascript">var _kmq = _kmq || [];
        var _kmk = _kmk || '3aeb916ed57218c3b9484afc76160272120bf7be';
        function _kms(u){
            setTimeout(function(){
                var d = document, f = d.getElementsByTagName('script')[0],
                        s = d.createElement('script');
                s.type = 'text/javascript'; s.async = true; s.src = u;
                f.parentNode.insertBefore(s, f);
            }, 1);
        }
        _kms('//i.kissmetrics.com/i.js');
        _kms('//scripts.kissmetrics.com/' + _kmk + '.2.js');
    </script>
    <script src="//cdn.optimizely.com/js/3191530401.js"></script>
	<link rel="author" href="http://www.hotelviejooeste.com/humans.txt" />
    @yield("facebook_visitantes")
    @yield("facebook_cabain")
    @yield("facebook_contact")
    @yield('google_convert')
    @yield('googlemaps')
    @yield('maps')
</head>
<body>
    <header>
        <div class="viejooeste-logo">
            <a href="/"><img src="img/logo_desktop.png" alt="Hotel Viejo Oeste - Doradal Antioquia"/></a>
        </div>
        <div class="viejooeste-menu">
            <ul class="display-horizontal col-100">
                <li class="col-60 gutter-05">
                   <a href="{{ URL::route('pages.booking') }}">
                    <span>RESERVAR CABAÑA</span>
                    <span class="viejooeste-icon-reserve fa fa-caret-right fa-2x"></span>
                   </a>
                </li>
                <li class="col-40 gutter-05">
                    <a href="#" id="viejooeste_menu">
                        <span id="viejooeste_menu_text">MENÚ</span>
                        <span id="viejooeste_menu_icon" class="fa fa-bars fa-lg"></span>
                    </a>
                </li>
            </ul>
        </div>
        <div style="clear:both"></div>
        <nav class="viejooeste-navigator" id="viejooeste_navigator">
            <ul class="viejooeste-menu-content">
                <li>
                    <a href="">
                        <div class="img">
                            <div>
                                <img src="img/viejooeste-icon-location.png" alt="Localización Hotel Viejo Oeste"/>
                            </div>
                        </div>
                        <span>{{ link_to_route("pages.location", "LOCALIZACIÓN") }}</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <div class="img">
                            <div>
                                <img src="img/viejooeste-icon-booking.png" alt="Reservas Hotel Viejo Oeste"/>
                            </div>
                        </div>
                        <span>{{ link_to_route("pages.booking", "RESERVAS") }}</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <div class="img">
                            <div>
                                <img src="img/viejooeste-icon-blog.png" alt="Blog Hotel Viejo Oeste"/>
                            </div>
                        </div>
                        <span>{{ link_to_route("pages.blog", "BLOG") }}</span>
                    </a>
                </li>
            </ul>
            <ul class="viejooeste-menu-main">
                <li>{{ link_to_route("pages.viejooeste", "Hotel Viejo Oeste") }}</li>
                <li>{{ link_to_route("cabins.index", "Cabañas Temáticas") }}</li>
                <li>{{ link_to_route("pages.gallery", "Galería de Fotos") }}</li>
                <li>{{ link_to_route("pages.convenios", "Convenios") }}</li>
                <li>{{ link_to_route("pages.contact", "Contacto") }}</li>
            </ul>
        </nav>
    </header>
    @yield("content")
     <footer>
        <div class="viejooeste-footer-container">
            <h4>¿Qué dicen nuestros clientes?</h4>
            <section id="testimonies" class="testimonies">
                <blockquote class="client">
                    <div class="body">
                        <p>Un sitio magico, de fantasía, original, muy acogedor; nuestros hijos disfrutaron de todo su encanto al igual que nosotros, la atención personalizada sobresale notablemente, gracias por brindarnos un fin de semana diferente, en un lugar diferente, comida diferente.....lo mejor.... La cabana Vaqueros.. Sencillamente espectacular. RECOMENDADO 100%</p>
                        <h4>Javier Orlando Roa y Familia</h4>
                    </div>
                </blockquote>
                <blockquote class="client">
                    <div class="body">
                        <p>Muy buena temática. Muy familiar y acogedor. Buena forma de hacerlo sentir en familia.</p>
                        <h4>Julio Medina</h4>
                    </div>
                </blockquote>
                <blockquote class="client">
                    <div class="body">
                        <p>Excelente. Auténtico. Una opción de turismo con amor (Servicio personalizado), comida deliciosa.</p>
                        <h4>Sebastián Peláez</h4>
                    </div>
                </blockquote>
                <blockquote class="client">
                    <div class="body">
                        <p>Excelente hotel, para disfrutar con amigos y familia, algo distinto para el descanso, lindas habitaciones con el toque del oeste, recomendado.</p>
                        <h4>May Fredy Piedrahita</h4>
                    </div>
                </blockquote>
                <blockquote class="client">
                    <div class="body">
                        <p>Excelente atención por parte del personal del hotel, la comida deliciosa y las habitaciones muy confortables.</p>
                        <h4>Diana Marcela Isaza</h4>
                    </div>
                </blockquote>
                <blockquote class="client">
                    <div class="body">
                        <p>Excelente atención, muy acogedor. Es la segunda vez que venimos y esperamos volver prontamente.</p>
                        <h4>Àngela María Gutiérrez</h4>
                    </div>
                </blockquote>
                <blockquote class="client">
                    <div class="body">
                        <p>Excelente hotel, un servicio inigualable. La comida es espectacular. Volveremos. Mil gracias</p>
                        <h4>Sandra Milena Pulgarín</h4>
                    </div>
                </blockquote>
                <blockquote class="client">
                    <div class="body">
                        <p>Muy agradable, tranquilo y confortable, la atención es excelente. Muchas gracias</p>
                        <h4>Juliet Marcela Ruíz</h4>
                    </div>
                </blockquote>
                <blockquote class="client">
                    <div class="body">
                        <p>Muy buen lugar para el descanso. Un hotel que se sale del formato tradicional para la atención a los clientes. Excelente atención de sus propietarios y empleados haciéndonos sentir como en familia.</p>
                        <h4>Ruby Vélez Rincón</h4>
                    </div>
                </blockquote>
                <blockquote class="client">
                    <div class="body">
                        <p>Excelente, estadía muy agradable. Ambiente muy familiar.</p>
                        <h4>María Eugencia Salazar</h4>
                    </div>
                </blockquote>
                <blockquote class="client">
                    <div class="body">
                        <p>Excelente atención, ambiente familiar, comida fabulosa.</p>
                        <h4>Martha Cecilia Rincón</h4>
                    </div>
                </blockquote>
                <blockquote class="client">
                    <div class="body">
                        <p>Muchas gracias por todas las atenciones, el servicio, la calidez y amabilidad de todos, nos hicieron sentir como en casa. Las habitaciones tienen su encanto. Jaime Gabriel les ha transmitido su magia y amor. Un abrazo</p>
                        <h4>Luis Alejandro Jaramillo</h4>
                    </div>
                </blockquote>
                <blockquote class="client">
                    <div class="body">
                        <p>Excelente atención, lo recomiendo para un descanso en familia.</p>
                        <h4>Maura Moreno</h4>
                    </div>
                </blockquote>
                <blockquote class="client">
                    <div class="body">
                        <p>Muy buen servicio, la atención es excelente. Muchas gracias</p>
                        <h4>María Paula Prada</h4>
                    </div>
                </blockquote>
            </section>
            <div class="clearfix"></div>
            <nav>
                <ul>
                    <li>
                        <ul class="submenu">
                            <li>{{ link_to_route("pages.location", "LOCALIZACIÓN") }}</li>
                            <li>{{ link_to_route("pages.booking", "RESERVAS") }}</li>
                            <li>{{ link_to_route("pages.blog", "BLOG") }}</li>
                        </ul>
                    </li>
                    <li>
                        <ul class="submenu">
                            <li>{{ link_to_route("home", "Home") }}</li>
                             <li>{{ link_to_route("pages.viejooeste", "Hotel Viejo Oeste") }}</li>
                             <li>{{ link_to_route("cabins.index", "Cabañas Temáticas") }}</li>
                             <li>{{ link_to_route("pages.gallery", "Galería de Fotos") }}</li>
                             <li>{{ link_to_route("pages.convenios", "Convenios") }}</li>
                             <li>{{ link_to_route("pages.contact", "Contacto") }}</li>
                         </ul>
                    </li>
                    <li>
                        <ul class="submenu">
                            <li>
                                <a href="http://www.facebook.com/hotelviejooeste" style="padding-right: 10px;" title="www.facebook.com/hotelviejoeste" alt="www.facebook.com/hotelviejoeste"><span class="fa fa-facebook fa-lg"></span></a>
                                <a href="" style="padding-right: 10px;" title="www.instagram.com/hotelviejoeste" alt="www.instagram.com/hotelviejoeste"><span class="fa fa-instagram fa-lg"></span></a>
                                <a href="" style="padding-right: 10px;" title="www.twitter.com/hotelviejoeste" alt="www.twitter.com/hotelviejoeste"><span class="fa fa-twitter fa-lg"></span></a>
                            </li>
                        </ul>

                    </li>
                    <li>
                        <ul class="submenu">
                            <li><strong>Hotel Viejo Oeste - Doradal (Antioquia)</strong></li>
                            <li><span class="fa fa-at fa-lg"></span><span style="margin-left: 5px">Correo:</span> info@hotelviejooeste.com</li>
                            <li><span class="fa fa-cloud fa-lg"></span><span style="margin-left: 5px">Reservas</span></li>
                            <li>3226091747 - 3127323195</li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <div id="viejooeste_audio" class="fa fa-volume-up">
            <audio loop="1" id="viejooeste_play">
               <source src="music/viejooeste.mp3" type="audio/mpeg">
               <source src="music/viejooeste.ogg" type="audio/ogg">
                Your browser does not support the audio element.
            </audio>
        </div>
     </footer>
    <script src="/js/vendor/slick.js/slick.min.js"></script>
    <script src="/js/vendor/magnific-popup/jquery.magnific-popup.js"></script>
    <script src="/js/viejooeste.js"></script>
    @yield("rotator_js")
    @yield("modal_js")
</body>
</html>