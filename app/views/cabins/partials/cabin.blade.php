<section class="cabin-detail">
    <h1 class="title">{{ $cabin->name }}</h1>
    <section class="description">{{ $cabin->description }}</section>
    <div class="slider">
        <ul class="col-100 slider-cabin-container">
            <li src="/img/cabin/{{$cabin->slug}}/large/{{ $cabin->slug }}01.jpg" class="col-25 gutter-5">
                <a href="/img/cabin/{{$cabin->slug}}/large/{{ $cabin->slug }}01.jpg">
                    <span class="fa fa-eye fa-2x zoom"></span>
                    <img src="/img/cabin/{{$cabin->slug}}/large/{{ $cabin->slug }}01.jpg" alt="{{ $cabin->name }}"/>
                </a>
            </li>
            <li class="col-25 gutter-5">
                <a href="/img/cabin/{{$cabin->slug}}/large/{{ $cabin->slug }}02.jpg">
                    <span class="fa fa-eye fa-2x zoom"></span>
                    <img src="/img/cabin/{{$cabin->slug}}/large/{{ $cabin->slug }}02.jpg" alt="{{ $cabin->name }}"/>
                </a>
            </li>
            <li class="col-25 gutter-5">
                <a href="/img/cabin/{{$cabin->slug}}/large/{{ $cabin->slug }}03.jpg">
                    <span class="fa fa-eye fa-2x zoom"></span>
                    <img src="/img/cabin/{{$cabin->slug}}/large/{{ $cabin->slug }}03.jpg" alt="{{ $cabin->name }}"/>
                </a>
            </li>
            @if(file_exists(public_path("img/cabin/".$cabin->slug."/large/".$cabin->slug."04.jpg")))
                <li class="col-25 gutter-5">
                    <a href="/img/cabin/{{$cabin->slug}}/large/{{ $cabin->slug }}04.jpg">
                        <span class="fa fa-eye fa-2x zoom"></span>
                        <img src="/img/cabin/{{$cabin->slug}}/large/{{ $cabin->slug }}04.jpg" alt="{{ $cabin->name }}"/>
                    </a>
                </li>
            @endif
            @if(file_exists(public_path("img/cabin/".$cabin->slug."/large/".$cabin->slug."05.jpg")))
                <li class="col-25 gutter-5">
                    <a href="/img/cabin/{{$cabin->slug}}/large/{{ $cabin->slug }}05.jpg">
                        <span class="fa fa-eye fa-2x zoom"></span>
                        <img src="/img/cabin/{{$cabin->slug}}/large/{{ $cabin->slug }}05.jpg" alt="{{ $cabin->name }}"/>
                    </a>
                </li>
            @endif
            @if(file_exists(public_path("img/cabin/".$cabin->slug."/large/".$cabin->slug."06.jpg")))
                <li class="col-25 gutter-5">
                    <a href="/img/cabin/{{$cabin->slug}}/large/{{ $cabin->slug }}06.jpg">
                        <span class="fa fa-eye fa-2x zoom"></span>
                        <img src="/img/cabin/{{$cabin->slug}}/large/{{ $cabin->slug }}06.jpg" alt="{{ $cabin->name }}"/>
                    </a>
                </li>
            @endif
        </ul>
    </div>
    <div class="capacity">Capacidad {{ $cabin->capacity }} personas</div>
    <div class="rate">
        <ul class="display-horizontal col-100">
            <li class="col-45 gutter-5 ls"><span>Temporada baja</span><br>${{ $cabin->rate_ls }}</li>
            <li class="col-10 gutter-5"></li>
            <li class="col-45 gutter-5 hs"><span>Temporada alta</span><br>${{ $cabin->rate_hs }}</li>
            <li class="col-100">
                <p>Incluye desayuno al estilo <strong>Viejo Oeste</strong></p>
                <p><strong>Checkin</strong>: 2:00 p.m. -  <strong>Checkout</strong>: 12:00 p.m.</p>
                <p>Valor hora adicional: $10.000</p>
                <p style="padding-top: 20px;font-weight: bold;">* No reembolsamos dinero</p>
            </li>
        </ul>
    </div>
    <div class="form">
        <a href="#">
            <span>RESERVAR CABAÑA</span>
            <span></span>
        </a>
    </div>
    <img src="/img/landing/{{ $cabin->slug }}_stamp.png" alt="{{ $cabin->name }}"/>
</section>