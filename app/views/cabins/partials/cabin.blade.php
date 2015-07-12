<section class="cabin-detail">
    <h1 class="title">{{ $cabin->name }}</h1>
    <section class="description">{{ $cabin->description }}</section>
    <div class="slider">
        <ul class="col-100">
            <li class="col-25 gutter-5">
                <img src="/img/cabin/{{$cabin->slug}}/large/{{ $cabin->slug }}01.jpg" alt="{{ $cabin->name }}"/>
            </li>
            <li class="col-25 gutter-5">
                <img src="/img/cabin/{{$cabin->slug}}/large/{{ $cabin->slug }}02.jpg" alt="{{ $cabin->name }}"/>
            </li>
            <li class="col-25 gutter-5">
                <img src="/img/cabin/{{$cabin->slug}}/large/{{ $cabin->slug }}03.jpg" alt="{{ $cabin->name }}"/>
            </li>
            @if(file_exists(public_path("img/cabin/".$cabin->slug."/large/".$cabin->slug."04.jpg")))
            <li class="col-25 gutter-5">
                <img src="/img/cabin/{{$cabin->slug}}/large/{{ $cabin->slug }}04.jpg" alt="{{ $cabin->name }}"/>
            </li>
            @endif
        </ul>
    </div>
    <div class="capacity">Capacidad {{ $cabin->capacity }}</div>
    <div class="rate">
        <ul class="display-horizontal col-100">
            <li class="col-50 gutter-5 ls"><span>Temporada baja</span><br>${{ $cabin->rate_ls }}</li>
            <li class="col-50 gutter-5 hs"><span>Temporada alta</span><br>${{ $cabin->rate_hs }}</li>
            <li class="col-100">Incluye desayuno al estilo <strong>Viejo Oeste</strong> y consumo del <strong>minibar</strong> de la cabaña</li>
        </ul>
    </div>
    <div class="form"></div>
    <img src="/img/landing/{{ $cabin->slug }}_stamp.png" alt="{{ $cabin->name }}"/>
</section>