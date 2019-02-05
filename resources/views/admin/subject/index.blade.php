@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>Предмет</th>
                <th>Редактировать</th>
                <th>Удалить</th>
            </tr>
            </thead>
            <tbody>
            @forelse($subjects as $subject)
                <tr>
                    <td>{{$subject->id}}</td>
                    <td>{{$subject->value}}</td>
                    <td><a class="btn btn-primary" href="{{route('admin.subjects').'/edit/'.$subject->id}}"><i class="far fa-edit"></i></a></td>
                    <td>
                        <form action="{{route('admin.subjects').'/delete/'.$subject->id}}" method="post">
                            {{csrf_field()}}
                            <button class="btn btn-danger" type="submit"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>Предметы не найдены</td>
                    <td>Предметы не найдены</td>
                    <td>Предметы не найдены</td>
                    <td>Предметы не найдены</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection