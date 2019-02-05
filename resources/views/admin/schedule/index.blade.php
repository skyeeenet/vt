@extends('admin.layouts.app_admin')

@section('content')
<div class="container">

    <select name="" id="group_id">
        @foreach($groups as $group)
            <option value="{{$group->id}}">{{$group->value}}</option>
        @endforeach
    </select>

    <table class="table">
        <thead>
            <tr>
                <th>Неделя</th>
                <th>Пара</th>
                <th>Группа</th>
                <th>Предмет</th>
                <th>Редактировать</th>
                <th>Удалить</th>
            </tr>
        </thead>
        <tbody id="table-body">

        </tbody>
    </table>
</div>
@endsection

@section('scripts')
    <script>
        var group = $('#group_id');

        group.ready(function () {

            var group_id = group.val();

            $.ajax({
                url: 'schedule/'+group_id,
                dataType : "json",
                type: "GET",
                success: function(data){
                    printData(data);
                },
                error: function () {
                    alert('Во время выполнения запроса произошла ошибка');
                }
            });
        });

        group.change(function () {

            var group_id = group.val();

            $.ajax({
                url: 'schedule/'+group_id,
                dataType : "json",
                type: "GET",
                success: function(data){
                    printData(data);
                },
                error: function () {
                    alert('Во время выполнения запроса произошла ошибка');
                }
            });
        });

        var printData = function (data) {

            var body = $('#table-body');

            body.empty();

            data.forEach(function (item) {

                body.append('<tr>'+'<td>'+item['week']['value']+'</td>'
                        +'<td>'+item['number']+'</td>'
                        +'<td>'+item['group']['value']+'</td>'
                        +'<td>'+item['subject']['value']+'</td>'
                        +'<td><a class="btn btn-primary" href="schedule/edit/'+item['id']+'"><i class="far fa-edit"></i></a></td>'
                        +'<td><form action="schedule/delete/'+item['id']+'" method="post">{{csrf_field()}}<button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button></form></td>'
                    +'</tr>');
            });
        }
    </script>
@endsection