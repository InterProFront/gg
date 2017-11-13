@section('content')
    @extends('back.layout')

    @include('back.content-top', ['title' => 'Как мы работаем'])

    <div class="box box-info group-item-widget"
         data-block="steps">
        <div class="box-header with-border">
            <h3 class="box-title">Как мы работаем</h3>
            <button type="submit" class="btn btn-primary pull-right add-flat-item" data-parent="">Добавить</button>
        </div>
        <div class="box-body">

            <div class="groupflat-widget group-item-wrap">
                @foreach($how_we_work->steps_group as $item)
                    @include('back.groups.steps.steps_box', ['item' => $item])
                @endforeach
            </div>
        </div>
    </div>

@endsection