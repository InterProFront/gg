@section('header')
    <header class="header">
        <div class="header__column">
            <p class="header__text">
                <a href="#offer" class="js-popup-open link">Написать письмо</a>
            </p>
        </div>
        <div class="header__column">
            <div class="header__logo-wrap">
                <img src="img/logo.png" class="header__logo" alt="">
            </div>
        </div>
        <div class="header__column">
            <p class="header__text">
                <span class="header__phone--desctop">{{$static->phone_field}}</span>
                <a href="tel:{{$static->phone_field}}" class="header__phone--mobile link">{{$static->phone_field}}</a>
            </p>
        </div>
    </header>
@endsection