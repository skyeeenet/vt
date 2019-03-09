@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Конференция</th>
                    <th>Год</th>
                    <th>Редактировать</th>
                    <th>Удалить</th>
                </tr>
            </thead>
            <tbody>
            @forelse($conferences as $conference)
                <tr>
                    <td>{{$conference->type}}</td>
                    <td>{{$conference->year}}</td>
                    <td><a class="btn btn-primary" href="{{route('admin.conferences').'/edit/'.$conference->id}}"><i class="far fa-edit"></i></a></td>
                    <td>
                        <form action="{{route('admin.conferences').'/delete/'.$conference->id}}" method="post">
                            {{csrf_field()}}
                            <button class="btn btn-danger" type="submit"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>Конференции не найдены</td>
                    <td>Конференции не найдены</td>
                    <td>Конференции не найдены</td>
                    <td>Конференции не найдены</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection