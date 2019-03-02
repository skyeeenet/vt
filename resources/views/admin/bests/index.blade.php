@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Пользователь</th>
                    <th>Ссылка на интервью</th>
                    <th>Заголовок</th>
                    <th>Описание</th>
                    <th>Редактировать</th>
                    <th>Удалить</th>
                </tr>
            </thead>
            <tbody>
            @forelse($bests as $best)
                <tr>
                    <td>{{$best->user['name']}}</td>
                    <td>{{$best->interview_url}}</td>
                    <td>{{$best->title}}</td>
                    <td>{{$best->description}}</td>
                    <td><a class="btn btn-primary" href="{{route('admin.bests').'/edit/'.$best->id}}"><i class="far fa-edit"></i></a></td>
                    <td>
                        <form action="{{route('admin.bests').'/delete/'.$best->id}}" method="post">
                            {{csrf_field()}}
                            <button class="btn btn-danger" type="submit"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>Нет данных</td>
                    <td>Нет данных</td>
                    <td>Нет данных</td>
                    <td>Нет данных</td>
                    <td>Нет данных</td>
                    <td>Нет данных</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection