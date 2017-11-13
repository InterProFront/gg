
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Условие {{$item->sorter_field}}</h3>
        <button type="submit" class="btn btn-primary pull-right remove-flat-item" data-id="{{$item->id_field}}"
                data-block="term">Удалить
        </button>
    </div>
    <div class="box-body">

        <div class="form-group">
            <label>Заголовок</label>
            <input class="form-control string"
                   type="text" placeholder=""
                   value="{{$item->title_field}}"
                   data-name="title"
                   data-type="string"
                   data-block="term"
                   data-id="{{$item->id_field}}">
        </div>
        <div class="form-group">
            <label>Текст</label>
            <textarea class="form-control text-editor"
                      type="text" placeholder=""
                      data-name="descr"
                      data-type="text"
                      data-block="term"
                      data-id="{{$item->id_field}}">{{$item->descr_field}}</textarea>
        </div>

    </div>
</div>