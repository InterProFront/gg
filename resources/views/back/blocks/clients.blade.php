@section('content')
    @extends('back.layout')

    @include('back.content-top', ['title' => 'Отзывы клиентов'])

    <div class="row">
        <div class="col-xs-12">
            <div class="box table-widget">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        Список отзывов
                    </h3>
                    <button type="button" class="btn btn-primary pull-right add-group-item" data-parent="0">Добавить</button>
                    <div class="col-xs-5 pull-right">
                        <input type="text" class="form-control add-item"
                               data-name="client_name"
                               data-block="client"
                               placeholder="Название элемента"
                        >
                    </div>
                </div>

                <div class="box-body">

                    <table class="table table-bordered table-hover dataTable table-widget-selector" role="grid"
                           aria-describedby="example2_info"
                           data-block="clients">
                        <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                colspan="1" aria-sort="ascending"
                                aria-label="">Название
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                colspan="1" aria-label="">Дата
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                colspan="1" aria-label="">Статус публикации
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                colspan="1" aria-label="">Вес
                            </th>
                            <th tabindex="0" rowspan="1"
                                colspan="1" aria-label="">Удаление
                            </th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($clients->client_group as $item)
                            @include('back.groups.client.client_row',['item' => $item])
                        @endforeach

                        </tbody>

                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>


@endsection