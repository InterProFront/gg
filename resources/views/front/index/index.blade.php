@extends('front.layout')
@section('content')
    @include('front.index.meta')
    <section class="hand-gift">
        <h1 class="hand-gift__title block-title">Подарки ручной работы</h1>
        <p class="hand-gift__about-gift">{{$hand->sub_title_field}}</p>
        <div class="hand-gift__slider js-slider">
            @foreach($hand->slider_group as $slide)
                <a href="{{$slide->slide_field->slider_resize->link}}?{{$slide->slide_field->cache_index}}"  >
                    <img src="{{$slide->slide_field->slider_resize->link}}?{{$slide->slide_field->cache_index}}" alt="{{$slide->slide_field->alt}}">
                </a>
            @endforeach
        </div>
        <p class="hand-gift__instagram">{!! $hand->after_text_field !!}</p>
    </section>
    <section class="about">
        <h2 class="about__title block-title">О мастерской GoodGift.kz</h2>
        <div class="about__block-wrap">
            <div class="about__image-wrap">
                <img class="about__img" src="{{$about->first_img_field->link}}?{{$about->first_img_field->cache_index}}" alt="{{$about->first_img_field->alt}}">
            </div>
            <div class="about__text text-block">
                {!! $about->first_text_field !!}
            </div>
        </div>
        <div class="about__block-wrap about__block-wrap--reverse">
            <div class="about__image-wrap">
                <img class="about__img" src="{{$about->second_img_field->link}}?{{$about->second_img_field->cache_index}}" alt="{{$about->second_img_field->alt}}">
            </div>
            <div class="about__text text-block">
                {!! $about->second_text_field !!}
            </div>
        </div>
    </section>
    <section class="how-we-work">
        <h2 class="how-we-work__title block-title">Как мы работаем</h2>
        <ul class="how-we-work__list">
            @foreach($how_work->steps_group as $item)
                <li class="how-we-work__list-item list-item ">
                    <div class="list-item__image-wrap">
                        <img class="list-item__img" src="{{$item->pict_field->link}}?{{$item->pict_field->cache_index}}" alt="{{$item->pict_field->alt}}">
                    </div>
                    <p class="list-item__title">{{$item->title_field}}</p>
                    <p class="list-item__text">{{$item->descr_field}}</p>
                </li>
            @endforeach
        </ul>
    </section>
    <section class="conditions">
        <h2 class="conditions__title block-title">Условия сотрудничества</h2>
        <ul class="conditions__list">
            @foreach($cooperation->term_group as $item)
                <li class="conditions__list-item">
                    <p class="conditions__item-title">{{$item->title_field}}</p>
                    <div class="conditions__item-description">{!! $item->descr_field !!}</div>
                </li>
            @endforeach
        </ul>
    </section>
    <section class="clients">
        <h2 class="clients__title block-title">Наши клиенты</h2>
        <ul class="clients__list">
            @foreach($clients->client_group as $item)
                <li class="clients__client client ">
                    <div class="client__image-wrap">
                        <img class="client__img" src="{{$item->photo_field->link}}?{{$item->photo_field->cache_index}}" alt="{{$item->photo_field->alt}}">
                    </div>
                    <p class="client__name">{{$item->client_name_field}}</p>
                    <p class="client__prof">{{$item->prof_field}}</p>
                    <p class="client__site"><a class="link" rel="noindex" href="{{$item->link_field}}">{{$item->link_text_field}}</a></p>
                    <p class="client__text">{{$item->comment_field}}</p>
                </li>
            @endforeach
        </ul>
        <ul class="clients__clients-logo">
            @foreach($clients->clients_logo_group as $item)
                <li class="clients__logo-wrap"><img class="clients__logo" src="{{$item->logo_field->logo_resize->link}}?{{$item->logo_field->cache_index}}" alt="{{$item->logo_field->alt}}"></li>
            @endforeach
        </ul>
    </section>
    <section class="portfolio portfolio-last" data-last="5">
        <h2 class="portfolio__title block-title">Еще работы</h2>
        @include('front.index.works', ['works' => $works->works_list_group])
    </section>
@endsection
