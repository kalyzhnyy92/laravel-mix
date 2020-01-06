<div class="card">
    <div class="card__house">
        <div class="card__slider">
            @foreach ($card->img as $image)
                <div class="card__wezom">
                    <a class="card__fancybox" data-fancybox="{{$card->rel}}" href="{{ $image->src }}">
                        <img class="card__img" src="{{ $image->src }}" alt="{{$image->alt}}">
                    </a>
                </div>
            @endforeach
        </div>
        <div class="card__label">
            <div class="card-front">{{$card->label}}</div>
        </div>
        <div class="buttons">
            <div class="buttons__icon">
                <svg class="buttons__heart" viewBox="0 0 20 20" width="30px" height="30px">
                    <use xlink:href="img/sprite.svg#{{$card->name}}"></use>
                </svg>
            </div>
        </div>
        <a href="#" class="card__text" target="blank">{!!$card->title!!}</a>
    </div>
    <div class="card__adres">
        <div class="card-place">{{$card->place}}</div>
        @if ($card->icon)
            <div class="card-metro">
                <svg class="card__svg" viewBox="0 0 20 20" width="25" height="25">
                    <use xlink:href="img/sprite.svg#{{$card->icons}}"></use>
                </svg>
            </div>
        @endif
        <div class="card-price">{!!$card->price!!}</div>
        <div class="card__decision">{!!$card->decision!!}</div>
    </div>
</div>