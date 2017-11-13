@section('content')
    @extends('back.layout')

    @include('back.content-top', ['title' => 'Логотипы клиентов'])

    <div class="box box-info group-item-widget"
         data-block="clients_logo">
        <div class="box-header with-border">
            <h3 class="box-title">Логотипы</h3>
            <button type="submit" class="btn btn-primary pull-right add-flat-item" data-parent="">Добавить</button>
        </div>
        <div class="box-body">

            <div class="groupflat-widget group-item-wrap">
                @foreach($clients->clients_logo_group as $item)
                    @include('back.groups.clients_logo.clients_logo_box', ['item' => $item])
                @endforeach
            </div>
        </div>
    </div>

@endsection