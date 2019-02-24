@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Пользователь</th>
                    <th>Должность</th>
                    <th>Кафедра</th>
                    <th>Email</th>
                    <th>Телефон</th>
                    <th>Facebook</th>
                    <th>НТБ</th>
                    <th>Редактировать</th>
                    <th>Удалить</th>
                </tr>
            </thead>
            <tbody>
            @forelse($lecturers as $lecturer)
                <tr>
                    <td>{{$lecturer->user['name']}}</td>
                    <td>{{$lecturer->position}}</td>
                    <td>{{$lecturer->department}}</td>
                    <td>{{$lecturer->email}}</td>
                    <td>{{$lecturer->phone}}</td>
                    <td>{{$lecturer->facebook}}</td>
                    <td>{{$lecturer->ntb}}</td>
                    <td><a class="btn btn-primary" href="{{route('admin.lecturers').'/edit/'.$lecturer->id}}"><i class="far fa-edit"></i></a></td>
                    <td>
                        <form action="{{route('admin.lecturers').'/delete/'.$lecturer->id}}" method="post">
                            {{csrf_field()}}
                            <button class="btn btn-danger" type="submit"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>Преподаватели не найдены</td>
                    <td>Преподаватели не найдены</td>
                    <td>Преподаватели не найдены</td>
                    <td>Преподаватели не найдены</td>
                    <td>Преподаватели не найдены</td>
                    <td>Преподаватели не найдены</td>
                    <td>Преподаватели не найдены</td>
                    <td>Преподаватели не найдены</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection