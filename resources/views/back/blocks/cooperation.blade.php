@section('content')
    @extends('back.layout')

    @include('back.content-top', ['title' => 'Условия сотрудничества'])

    <div class="box box-info group-item-widget"
         data-block="term">
        <div class="box-header with-border">
            <h3 class="box-title">Условия сотрудничества</h3>
            <button type="submit" class="btn btn-primary pull-right add-flat-item" data-parent="">Добавить</button>
        </div>
        <div class="box-body">

            <div class="groupflat-widget group-item-wrap">
                @foreach($cooperation->term_group as $item)
                    @include('back.groups.term.term_box', ['item' => $item])
                @endforeach
            </div>
        </div>
    </div>

@endsection