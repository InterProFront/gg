<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Работа {{$item->sorter_field}}</h3>
        <button type="submit" class="btn btn-primary pull-right remove-flat-item" data-id="{{$item->id_field}}"
                data-block="works_list">Удалить</button>
    </div>
    <div class="box-body">

        <div class="form-group">
            <label>Изображение</label>
            <div class="dropzone">
                <div class="file-input">
                    <div class="file-preview">
                        <div class="input-group file-caption-main">

                            <div class="file-preview-frame">
                                <div class="kv-file-content">
                                    <img src="{{$item->work_item_field->link}}" class="kv-preview-data file-preview-image" title="{{$item->work_item_field->alt}}" alt="{{$item->work_item_field->alt}}" style="width:auto;height:160px;">
                                </div>
                                <div class="file-thumbnail-footer">
                                    <div class="file-footer-caption" title="{{$item->work_item_field->alt}}">{{$item->work_item_field->name_field}} <br><samp>(425.24 KB)</samp></div>
                                    <div class="file-actions">
                                        <input type="text" class="form-control alt-text" data-block="works_list" data-type="images" data-id="{{$item->id_field}}" data-name="alt" value="{{$item->work_item_field->alt}}">
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
                           data-block="works_list"
                           data-name="work_item"
                           data-type="image"
                           data-id="{{$item->id_field}}">
                </div>
            </div>

        </div>



    </div>
</div>