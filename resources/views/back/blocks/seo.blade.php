@section('content')
    @extends('back.layout')

    @include('back.content-top', ['title' => 'СЕО Настройки'])

    <div class="box box box-info" xmlns="http://www.w3.org/1999/html">
        <div class="box-header with-border">
            <h3 class="box-title">СЕО настройки страницы</h3>
        </div>

        <div class="box-body">

            <div class="form-group">
                <label>Тайтл страницы</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$static_all_site->seo_title_field}}"
                       data-name="seo_title"
                       data-type="string"
                       data-block="static_all_site"
                       data-id="0">
            </div>

            <div class="form-group">
                <label>СЕО: Описание </label>
                <textarea class="form-control text"
                          type="text" placeholder=""
                          data-name="seo_description"
                          data-type="text"
                          data-block="static_all_site"
                          data-id="0">{{$static_all_site->seo_description_field}}</textarea>
            </div>


            <div class="form-group">
                <label>СЕО: Ключевые слова</label>
                <textarea class="form-control text"
                       type="text" placeholder=""
                       data-name="seo_keywords"
                       data-type="text"
                       data-block="static_all_site"
                       data-id="0">{{$static_all_site->seo_keywords_field}}</textarea>
            </div>

        </div>

    </div>

@endsection