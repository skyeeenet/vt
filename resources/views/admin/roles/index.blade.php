@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Роль</th>
                    <th>Публичное название</th>
                    <th>Редактировать</th>
                    <th>Удалить</th>
                </tr>
            </thead>
            <tbody>
            @forelse($roles as $role)
                <tr>
                    <td>{{$role->id}}</td>
                    <td>{{$role->value}}</td>
                    <td>{{$role->public_name}}</td>
                    <td><a class="btn btn-primary" href="{{route('admin.roles').'/edit/'.$role->id}}"><i class="far fa-edit"></i></a></td>
                    <td>
                        <form action="{{route('admin.roles').'/delete/'.$role->id}}" method="post">
                            {{csrf_field()}}
                            <button class="btn btn-danger" type="submit"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>Роли не найдены</td>
                    <td>Роли не найдены</td>
                    <td>Роли не найдены</td>
                    <td>Роли не найдены</td>
                    <td>Роли не найдены</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection