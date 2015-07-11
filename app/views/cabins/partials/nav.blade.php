<section class="slider-container">
    <ul class="display-vertical" id="slider_container">
        @foreach($cabins as $key => $cabin)
        <li class="{{ setActive($slug,$cabin->slug) }}">
            <a href="{{ URL::route('cabins.slug',$cabin->slug) }}">
                <div class="cabin-detail">
                    <ul class="display-horizontal col-100 cabin">
                        <li class="col-25 number"><em>Capacidad</em><div>{{ $cabin->capacity  }}</div></li>
                        <li class="col-20 imagen">
                            <img src="/img/landing/{{ $cabin->slug }}_stamp.png" alt="{{ $cabin->name }}"/>
                        </li>
                        <li class="col-55 name">{{ $cabin->name }}</li>
                    </ul>
                </div>
            </a>
        </li>
        @endforeach
        <li style="height: 140px"></li>
    </ul>
</section>