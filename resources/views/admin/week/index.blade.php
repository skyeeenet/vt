@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>Неделя</th>
                <th>Редактировать</th>
                <th>Удалить</th>
            </tr>
            </thead>
            <tbody>
            @forelse($weeks as $week)
                <tr>
                    <td>{{$week->id}}</td>
                    <td>{{$week->value}}</td>
                    <td><a class="btn btn-primary" href="{{route('admin.weeks').'/edit/'.$week->id}}"><i class="far fa-edit"></i></a></td>
                    <td>
                        <form action="{{route('admin.weeks').'/delete/'.$week->id}}" method="post">
                            {{csrf_field()}}
                            <button class="btn btn-danger" type="submit"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>Недели не найдены</td>
                    <td>Недели не найдены</td>
                    <td>Недели не найдены</td>
                    <td>Недели не найдены</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection