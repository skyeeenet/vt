@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <h3>Добавить страницу</h3>
        <form action="{{route('admin.pages').'/store'}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="url">Адрес сайт</label>
                <input type="text" class="form-control" id="url" name="url" placeholder="/admin/site">
                <small class="form-text ">Вводить адрес относительно основного домена</small>
                <small class="form-text ">Пример: Полный адрес - http://localhost:8000/admin/content/images ; Вводить в поле url - /admin/content/images</small>
            </div>
            <div class="form-group">
                <label for="title">Заголовок страницы</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <button type="submit" class="btn btn-primary">Добавить</button>
        </form>
        <h3 class="mt-4">Все страницы</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Id страницы</th>
                    <th>Url страницы</th>
                    <th>Id страницы</th>
                    <th>Редактировать</th>
                    <th>Удалить</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pages as $page)
                <tr>
                    <td>{{$page->id}}</td>
                    <td>{{$page->url}}</td>
                    <td>{{$page->title}}</td>
                    <td><a class="btn btn-primary" href="{{route('admin.pages').'/edit/'.$page->id}}"><i class="far fa-trash-alt"></i></a></td>
                    <td>
                        <form action="{{route('admin.pages').'/delete/'.$page->id}}" method="post">
                            {{csrf_field()}}
                            <button class="btn btn-danger"><i class="far fa-edit"></i></button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td>Нет страниц</td>
                    <td>Нет страниц</td>
                    <td>Нет страниц</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection