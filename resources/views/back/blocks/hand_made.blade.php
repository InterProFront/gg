@section('content')
    @extends('back.layout')

    @include('back.content-top', ['title' => 'Подарки ручной работы'])

    <div class="box box box-info" xmlns="http://www.w3.org/1999/html">
        <div class="box-header with-border">
            <h3 class="box-title">Подарки ручной работы</h3>
        </div>

        <div class="box-body">


            <div class="form-group">
                <label>Текст под заголовком</label>
                <textarea class="form-control text"
                          type="text" placeholder=""
                          data-name="sub_title"
                          data-type="text"
                          data-block="hand_made"
                          data-id="0">{{$hand_made->sub_title_field}}</textarea>
            </div>


            <div class="form-group">
                <label>Текст после слайдера</label>
                <textarea class="form-control text"
                          type="text" placeholder=""
                          data-name="after_text"
                          data-type="text"
                          data-block="hand_made"
                          data-id="0">{{$hand_made->after_text_field}}</textarea>
            </div>

        </div>
    </div>

    <div class="box box-info group-item-widget"
         data-block="slider">
        <div class="box-header with-border">
            <h3 class="box-title"> Главный слайдер </h3>
            <button type="submit" class="btn btn-primary pull-right add-flat-item" data-parent="">Добавить</button>
        </div>
        <div class="box-body">

            <div class="groupflat-widget group-item-wrap">
                @foreach($hand_made->slider_group as $item)
                    @include('back.groups.slider.slider_box', ['item' => $item])
                @endforeach
            </div>
        </div>
    </div>

@endsection