@section('content')
    @extends('back.layout')

    @include('back.content-top', ['title' => 'Общие настройки'])

    <div class="box box box-info" xmlns="http://www.w3.org/1999/html">
        <div class="box-header with-border">
            <h3 class="box-title">Статичные поля страницы</h3>
        </div>

        <div class="box-body">

            <div class="form-group">
                <label>Номер телефона</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$static_all_site->phone_field}}"
                       data-name="phone"
                       data-type="string"
                       data-block="static_all_site"
                       data-id="0">
            </div>

            <div class="form-group">
                <label>Метрики ( scripts )</label>
                <textarea class="form-control string"
                          type="text" placeholder=""
                          data-name="metrik_script"
                          data-type="text"
                          data-block="static_all_site"
                          data-id="0">{{$static_all_site->metrik_script_field}}</textarea>
            </div>


            <div class="form-group">
                <label>Метрики ( noscripts )</label>
                <textarea class="form-control string"
                       type="text" placeholder=""
                       data-name="metrik_noscript"
                       data-type="text"
                       data-block="static_all_site"
                       data-id="0">{{$static_all_site->metrik_noscript_field}}</textarea>
            </div>

        </div>

    </div>

@endsection