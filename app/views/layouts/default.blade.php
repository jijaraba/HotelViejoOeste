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
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
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
	<link rel="author" href="http://www.hotelviejooeste.com/humans.txt" />
    @yield("facebook_visitantes")
    @yield("facebook_cabain")
    @yield("facebook_contact")
    @yield('googlemaps')
</head>
<body>
    <header>
        <div class="viejooeste-logo">
            <a href="/"><img src="img/logo_desktop.png" alt="Hotel Viejo Oeste - Doradal Antioquia"/></a>
        </div>
        <div class="viejooeste-menu">
            <ul class="display-horizontal col-100">
                <li class="col-60">
                   <a href="{{ URL::route('pages.booking') }}">
                    <span>RESERVAR CABAÑA</span>
                    <span class="viejooeste-icon-reserve fa fa-caret-right fa-2x"></span>
                   </a>
                </li>
                <li class="col-40">
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
                        <p>Fue una experiencia muy bonita. El hotel es increible, una buena recomendación para venir acá</p>
                        <h4>Diana Patricia Quiceno</h4>
                    </div>
                </blockquote>
                <blockquote class="client">
                    <div class="body">
                        <p>Gracias por todo el servicio prestado, pero ante todo por el carisma y la calidad en la atención. Me voy satisfacha. Que Dios siempre bendiga este lugar.</p>
                        <h4>Helena Muñoz</h4>
                    </div>
                </blockquote>
                <blockquote class="client">
                    <div class="body">
                        <p>El Viejo Oeste es un hotel diferente. hay que visitarlo para darse cuenta que es una experiencia saludable y efectiva contra el estrés.</p>
                        <h4>Edwin Padilla</h4>
                    </div>
                </blockquote>
                <blockquote class="client">
                    <div class="body">
                        <p>De los temas más originales que he visto en hotelería es el Viejo Oeste, la presentación de las comidas espectacular, las habitaciones hermosas y la atención 1A. Felicitaciones</p>
                        <h4>Farley Roldán</h4>
                    </div>
                </blockquote>
                <blockquote class="client">
                    <div class="body">
                        <p>Llegué a Doradal por cuestiones laborales, sin embargo decidí quedarme en el hotel Viejo Oeste sabiendo que no podía disfrutar de muchos de sus atracciones, pero oh sorpresa, el servicio del hotel es excelente, la atención es iniguable y la comida deliciosa incluso para un vegetariano como yo</p>
                        <h4>Luis Alfonso Salazar</h4>
                    </div>
                </blockquote>
                <blockquote class="client">
                    <div class="body">
                        <p>Muy bien! Gracias. Felicitaciones. Volveremos</p>
                        <h4>Lina María Arias</h4>
                    </div>
                </blockquote>
                <blockquote class="client">
                    <div class="body">
                        <p>Excelente servicio. Gran creatividad. Diferente. Gracias por atendernos es un gusto visitarlos</p>
                        <h4>Carolina Mejía</h4>
                    </div>
                </blockquote>
                <blockquote class="client">
                    <div class="body">
                        <p>Considero que el servicio fué excelente. La alimentación fabulosa, muy especiales en la atención. ¡Felicitaciones!</p>
                        <h4>María Eugenia Correa</h4>
                    </div>
                </blockquote>
                <blockquote class="client">
                    <div class="body">
                        <p>Todo excelente: Alojamiento, alimentación y atención</p>
                        <h4>Iván Darío Castaño Gómez</h4>
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
                            <li>3207488352 - 3217872254</li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
     </footer>
    <script src="/js/vendor/slick.js/slick.min.js"></script>
    <script src="/js/viejooeste.js"></script>
    @yield("rotator_js")
    @yield('maps')
</body>
</html>