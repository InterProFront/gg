@section('content')
    @extends('back.layout')

    @include('back.content-top', ['title' => 'О Мастерской GoodGift'])

    <div class="box box box-info" xmlns="http://www.w3.org/1999/html">
        <div class="box-header with-border">
            <h3 class="box-title">О мастерской</h3>
        </div>

        <div class="box-body">

            <div class="form-group">
                <label>Изображение (640x480)</label>
                <div class="dropzone">
                    <div class="file-input">
                        <div class="file-preview">
                            <div class="input-group file-caption-main">

                                <div class="file-preview-frame">
                                    <div class="kv-file-content">
                                        <img src="{{$about_block->first_img_field->link}}" class="kv-preview-data file-preview-image" title="{{$about_block->first_img_field->alt}}" alt="{{$about_block->first_img_field->alt}}" style="width:auto;height:160px;">
                                    </div>
                                    <div class="file-thumbnail-footer">
                                        <div class="file-footer-caption" title="{{$about_block->first_img_field->alt}}">{{$about_block->first_img_field->name_field}} <br><samp>(425.24 KB)</samp></div>
                                        <div class="file-actions">
                                            <input type="text" class="form-control alt-text" data-block="about_block" data-type="images" data-id="0" data-name="alt" value="{{$about_block->first_img_field->alt}}">
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
                               data-block="about_block"
                               data-name="first_img"
                               data-type="image"
                               data-id="0">
                    </div>
                </div>

            </div>
            <div class="form-group">
                <label>Текст справа</label>
                <textarea class="form-control text-editor"
                          type="text" placeholder=""
                          data-name="first_text"
                          data-type="text"
                          data-block="about_block"
                          data-id="0">{{$about_block->first_text_field}}</textarea>
            </div>

            <div class="form-group">
                <label>Изображение (640х480)</label>
                <div class="dropzone">
                    <div class="file-input">
                        <div class="file-preview">
                            <div class="input-group file-caption-main">

                                <div class="file-preview-frame">
                                    <div class="kv-file-content">
                                        <img src="{{$about_block->second_img_field->link}}" class="kv-preview-data file-preview-image" title="{{$about_block->second_img_field->alt}}" alt="{{$about_block->second_img_field->alt}}" style="width:auto;height:160px;">
                                    </div>
                                    <div class="file-thumbnail-footer">
                                        <div class="file-footer-caption" title="{{$about_block->second_img_field->alt}}">{{$about_block->second_img_field->name_field}} <br><samp>(425.24 KB)</samp></div>
                                        <div class="file-actions">
                                            <input type="text" class="form-control alt-text" data-block="about_block" data-type="images" data-id="0" data-name="alt" value="{{$about_block->second_img_field->alt}}">
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
                               data-block="about_block"
                               data-name="second_img"
                               data-type="image"
                               data-id="0">
                    </div>
                </div>

            </div>
            <div class="form-group">
                <label>Текст слева</label>
                <textarea class="form-control text-editor"
                          type="text" placeholder=""
                          data-name="second_text"
                          data-type="text"
                          data-block="about_block"
                          data-id="0">{{$about_block->second_text_field}}</textarea>
            </div>


        </div>
    </div>


@endsection