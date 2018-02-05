<div class="slider">
    <ul class="slides">
        @for($i = 0; $i < count($sliders); $i++)
            <li>
                <img src="{{ Storage::url( $sliders[$i]->image) }}">
                {{--<div class="caption left-align">
                    <h5 class="light grey-text text-lighten-3">{{ $sliders[$i]->title }}</h5>
                    <p>{{ $sliders[$i]->description }}</p>
                </div>--}}
            </li>
        @endfor
    </ul>
</div>
<div class="mobile-banner">
    <img src="img/mobile-banner.jpg" class="responsive-img" alt="Lacuidad Image"/>
</div>