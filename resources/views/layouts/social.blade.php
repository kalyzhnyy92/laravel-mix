<div class="social">
    <h2 class="social__title">Мы в соц. сетях</h2>
    <div class="social__icon justify-content-between align-items-center">
        @foreach($mock->social as $social)
            <a class="social__link" href="{{$social->href}}" target="blank">
                <svg class="{{$social->name}}">
                    <use xlink:href="img/sprite.svg#{{$social->icon}}"></use>
                </svg>
            </a>
        @endforeach
    </div>
</div>