@section('content')
    @extends('back.layout')

    @include('back.content-top', ['title' => 'Наши работы'])

    <div class="box box-info group-item-widget"
         data-block="works_list">
        <div class="box-header with-border">
            <h3 class="box-title">Наши работы</h3>
            <button type="submit" class="btn btn-primary pull-right add-flat-item" data-parent="">Добавить</button>
        </div>
        <div class="box-body">

            <div class="groupflat-widget group-item-wrap">
                @foreach($works->works_list_group as $item)
                    @include('back.groups.works_list.works_list_box', ['item' => $item])
                @endforeach
            </div>
        </div>
    </div>

@endsection