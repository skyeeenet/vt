@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>Иконка</th>
                <th>Вид занятия</th>
                <th>Редактировать</th>
                <th>Удалить</th>
            </tr>
            </thead>
            <tbody>
            @forelse($occupations as $occupation)
                <tr>
                    <td>{{$occupation->id}}</td>
                    <td><img width="300px" src="{{$occupation->image['url']}}" alt=""></td>
                    <td>{{$occupation->value}}</td>
                    <td><a class="btn btn-primary" href="{{route('admin.occupation').'/edit/'.$occupation->id}}"><i class="far fa-edit"></i></a></td>
                    <td>
                        <form action="{{route('admin.occupation').'/delete/'.$occupation->id}}" method="post">
                            {{csrf_field()}}
                            <button class="btn btn-danger" type="submit"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>Занятия не найдены</td>
                    <td>Занятия не найдены</td>
                    <td>Занятия не найдены</td>
                    <td>Занятия не найдены</td>
                    <td>Занятия не найдены</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        {{$occupations->links()}}
    </div>
@endsection