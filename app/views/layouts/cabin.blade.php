<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield("title")</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="BigMountain" />
    <meta name="description" content="@yield('description')" />
    <meta name="keywords" content="@yield('keywords')" />
    <link rel="stylesheet" href="/css/app.css?v={{ Hash::make(time()) }}"/>
    @yield("rotator_css")
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="/js/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="/js/vendor/html5shiv/html5shiv.js"></script>
    <script src="/js/Utils.js"></script>
    <script src="/js/modernizr.js"></script>
    @if(App::environment() != 'local')
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
    @yield("facebook_cabain")
    @endif
    <script src="//cdn.optimizely.com/js/3191530401.js"></script>
	<link rel="author" href="http://www.hotelviejooeste.com/humans.txt" />
</head>
<body style="background-color: #f2e6cc">
    <header>
        <div class="viejooeste-logo">
            <a href="/"><img src="/img/logo_desktop.png" alt="Hotel Viejo Oeste - Doradal Antioquia"/></a>
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
                                <img src="/img/viejooeste-icon-location.png" alt="Localización Hotel Viejo Oeste"/>
                            </div>
                        </div>
                        <span>{{ link_to_route("pages.location", "LOCALIZACIÓN") }}</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <div class="img">
                            <div>
                                <img src="/img/viejooeste-icon-booking.png" alt="Reservas Hotel Viejo Oeste"/>
                            </div>
                        </div>
                        <span>{{ link_to_route("pages.booking", "RESERVAS") }}</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <div class="img">
                            <div>
                                <img src="/img/viejooeste-icon-blog.png" alt="Blog Hotel Viejo Oeste"/>
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
    <section class="viejooeste-container-slider" id="viejooeste_container_slider">
        <div class="viejooeste-baseline">
            <div class="container-baseline-cabin" style="padding-left:0px;padding-right: 0px;">
                <div class="center" style="height: 100%;display:block">
                    @yield('content')
                </div>
            </div>
        </div>
    </section>
    <script src="/js/vendor/slick.js/slick.min.js"></script>
    <script src="/js/vendor/magnific-popup/jquery.magnific-popup.js"></script>
    <script src="/js/viejooeste.js"></script>
</body>
</html>