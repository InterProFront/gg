@section('content')
    @extends('back.layout')

    @include('back.content-top', ['title' => 'Отзывы клиентов'])

    <div class="box box box-info" xmlns="http://www.w3.org/1999/html">
        <div class="box-header with-border">
            <h3 class="box-title">Отзыв</h3>
        </div>

        <div class="box-body">
            <div class="form-group">
                <label>Изображение (200х200)</label>
                <div class="dropzone">
                    <div class="file-input">
                        <div class="file-preview">
                            <div class="input-group file-caption-main">

                                <div class="file-preview-frame">
                                    <div class="kv-file-content">
                                        <img src="{{$item->photo_field->link}}" class="kv-preview-data file-preview-image" title="{{$item->photo_field->alt}}" alt="{{$item->photo_field->alt}}" style="width:auto;height:160px;">
                                    </div>
                                    <div class="file-thumbnail-footer">
                                        <div class="file-footer-caption" title="{{$item->photo_field->alt}}">{{$item->photo_field->name_field}} <br><samp>(425.24 KB)</samp></div>
                                        <div class="file-actions">
                                            <input type="text" class="form-control alt-text" data-block="client" data-type="images" data-id="{{$item->id_field}}" data-name="alt" value="{{$item->photo_field->alt}}">
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="input-group-btn">
                    <button type="button" tabindex="500" title="Clear selected files" class="btn btn-default fileinput-remove fileinput-remove-button"><i class="glyphicon glyphicon-trash"></i>  <span class="hidden-xs">Remove</span></button>
                    <button type="button" tabindex="500" title="Abort ongoing upload" class="btn btn-default hide fileinput-cancel fileinput-cancel-button"><i class="glyphicon glyphicon-ban-circle"></i>  <span class="hidden-xs">Cancel</span></button>
                    <div tabindex="500" class="btn btn-primary btn-file">
                        <i class="glyphicon glyphicon-folder-open"></i>&nbsp;
                        <span class="hidden-xs">Загрузить</span>
                        <input type="file" class="form-control file"
                               data-block="client"
                               data-name="photo"
                               data-type="image"
                               data-id="{{$item->id_field}}">
                    </div>
                </div>

            </div>

            <div class="form-group">
                <label>Имя</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$item->client_name_field}}"
                       data-name="client_name"
                       data-type="string"
                       data-block="client"
                       data-id="{{$item->id_field}}">
            </div>

            <div class="form-group">
                <label>Должность</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$item->prof_field}}"
                       data-name="prof"
                       data-type="string"
                       data-block="client"
                       data-id="{{$item->id_field}}">
            </div>

            <div class="form-group">
                <label>Ссылка</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$item->link_field}}"
                       data-name="link"
                       data-type="string"
                       data-block="client"
                       data-id="{{$item->id_field}}">
            </div>

            <div class="form-group">
                <label>Текст в ссылке</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$item->link_text_field}}"
                       data-name="link_text"
                       data-type="string"
                       data-block="client"
                       data-id="{{$item->id_field}}">
            </div>

            <div class="form-group">
                <label>Отзыв</label>
                <textarea class="form-control text"
                          type="text" placeholder=""
                          data-name="comment"
                          data-type="text"
                          data-block="client"
                          data-id="{{$item->id_field}}">{{$item->comment_field}}</textarea>
            </div>

        </div>
    </div>


@endsection