<?php $i = 0;?>

@foreach($works as $item)
    <?php $i++;?>
    @if($i === 1)
        <div class="portfolio__wrap" @if($item->sorter_field > 5) style="display: none" @endif>
            <div class="portfolio__column-2-3">
                <a class="portfolio__big-image" href="{{$item->work_item_field->link}}?{{$item->work_item_field->cache_index}}">
                    <img src="{{$item->work_item_field->to_work_resize->link}}?{{$item->work_item_field->cache_index}}" alt="{{$item->work_item_field->alt}}">
                </a>
    @elseif($i === 2)
                <div class="portfolio__small-wrap">
                    <a class="portfolio__small-1-2" href="{{$item->work_item_field->link}}?{{$item->work_item_field->cache_index}}">
                        <img src="{{$item->work_item_field->to_work_resize->link}}?{{$item->work_item_field->cache_index}}" alt="{{$item->work_item_field->alt}}">
                    </a>
    @elseif($i === 3)
                    <a class="portfolio__small-1-2" href="{{$item->work_item_field->link}}?{{$item->work_item_field->cache_index}}">
                        <img src="{{$item->work_item_field->to_work_resize->link}}?{{$item->work_item_field->cache_index}}" alt="{{$item->work_item_field->alt}}">
                    </a>
                </div>
            </div>
    @elseif( $i === 4)
            <div class="portfolio__column-1-3">
                <a class="portfolio__image-wrap" href="{{$item->work_item_field->link}}?{{$item->work_item_field->cache_index}}">
                    <img src="{{$item->work_item_field->to_work_resize->link}}?{{$item->work_item_field->cache_index}}" alt="{{$item->work_item_field->alt}}">
                </a>
    @elseif ($i === 5)
                <a class="portfolio__image-wrap" href="{{$item->work_item_field->link}}?{{$item->work_item_field->cache_index}}">
                    <img src="{{$item->work_item_field->to_work_resize->link}}?{{$item->work_item_field->cache_index}}" alt="{{$item->work_item_field->alt}}">
                </a>
            </div>
        </div>
    @endif
@endforeach