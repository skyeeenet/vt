@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Альбом</th>
                    <th>Редактировать</th>
                    <th>Удалить</th>
                </tr>
            </thead>
            <tbody>
            @forelse($albums as $album)
                <tr>
                    <td>{{$album->id}}</td>
                    <td>{{$album->value}}</td>
                    <td><a class="btn btn-primary" href="{{route('admin.albums').'/edit/'.$album->id}}"><i class="far fa-edit"></i></a></td>
                    <td>
                        <form action="{{route('admin.albums').'/delete/'.$album->id}}" method="post">
                            {{csrf_field()}}
                            <button class="btn btn-danger" type="submit"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>Альбомы не найдены</td>
                    <td>Альбомы не найдены</td>
                    <td>Альбомы не найдены</td>
                    <td>Альбомы не найдены</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection