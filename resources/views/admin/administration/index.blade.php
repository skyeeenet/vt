@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Категория</th>
                    <th>Редактировать</th>
                    <th>Удалить</th>
                </tr>
            </thead>
            <tbody>
            @forelse($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->value}}</td>
                    <td><a class="btn btn-primary" href="{{route('admin.categories').'/edit/'.$category->id}}"><i class="far fa-edit"></i></a></td>
                    <td>
                        <form action="{{route('admin.categories').'/delete/'.$category->id}}" method="post">
                            {{csrf_field()}}
                            <button class="btn btn-danger" type="submit"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>Категории не найдены</td>
                    <td>Категории не найдены</td>
                    <td>Категории не найдены</td>
                    <td>Категории не найдены</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection