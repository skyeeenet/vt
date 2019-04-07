@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Тип</th>
                    <th>Начало</th>
                    <th>Конец</th>
                    <th>Редактировать</th>
                    <th>Удалить</th>
                </tr>
            </thead>
            <tbody>
            @forelse($graphics as $graphic)
                <tr>
                    <td>{{$graphic->type}}</td>
                    <td>{{$graphic->begin}}</td>
                    <td>{{$graphic->end}}</td>
                    <td><a class="btn btn-primary" href="{{route('admin.graphics').'/edit/'.$graphic->id}}"><i class="far fa-edit"></i></a></td>
                    <td>
                        <form action="{{route('admin.graphics').'/delete/'.$graphic->id}}" method="post">
                            {{csrf_field()}}
                            <button class="btn btn-danger" type="submit"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>Графики не найдены</td>
                    <td>Графики не найдены</td>
                    <td>Графики не найдены</td>
                    <td>Графики не найдены</td>
                    <td>Графики не найдены</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection