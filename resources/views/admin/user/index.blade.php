@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <h3>Социальные сети</h3>
        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>Аватарка</th>
                <th>Имя</th>
                <th>Email</th>
                <th>Соц.сети</th>
                <th>Роль</th>
                <th>Создан</th>
                <th>Редактировать</th>
                <th>Удалить</th>
            </tr>
            </thead>
            <tbody>
            @forelse($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td><img width="200px" src="{{'/storage/profile_images/'.$user->image}}" alt=""></td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->social}}</td>
                    <td>{{$user->role['value']}}</td>
                    <td>{{$user->created_at}}</td>
                    <td><a class="btn btn-primary" href="{{route('admin.users').'/edit/'.$user->id}}"><i class="far fa-edit"></i></a></td>
                    <td>
                        <form action="{{route('admin.users').'/delete/'.$user->id}}" method="post">
                            {{csrf_field()}}
                            <button class="btn btn-danger" type="submit"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>Пользователи не найдены</td>
                    <td>Пользователи не найдены</td>
                    <td>Пользователи не найдены</td>
                    <td>Пользователи не найдены</td>
                    <td>Пользователи не найдены</td>
                    <td>Пользователи не найдены</td>
                    <td>Пользователи не найдены</td>
                    <td>Пользователи не найдены</td>
                    <td>Пользователи не найдены</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        {{$users->links()}}
    </div>
@endsection