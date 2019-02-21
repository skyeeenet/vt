@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <h3>Социальные сети</h3>
        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>Иконка</th>
                <th>Социальная сети</th>
                <th>Редактировать</th>
                <th>Удалить</th>
            </tr>
            </thead>
            <tbody>
            @forelse($socials as $social)
                <tr>
                    <td>{{$social->id}}</td>
                    <td><img width="300px" src="{{$social->image['url']}}" alt=""></td>
                    <td>{{$social->value}}</td>
                    <td><a class="btn btn-primary" href="{{route('admin.socials').'/edit/'.$social->id}}"><i class="far fa-edit"></i></a></td>
                    <td>
                        <form action="{{route('admin.socials').'/delete/'.$social->id}}" method="post">
                            {{csrf_field()}}
                            <button class="btn btn-danger" type="submit"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>Социальные сети не найдены</td>
                    <td>Социальные сети не найдены</td>
                    <td>Социальные сети не найдены</td>
                    <td>Социальные сети не найдены</td>
                    <td>Социальные сети не найдены</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        {{$socials->links()}}
    </div>
@endsection