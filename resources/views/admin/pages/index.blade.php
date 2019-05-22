@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Шаблон</th>
                    <th>Заголовок</th>
                    <th>H1</th>
                    <th>Ссылка</th>
                    <th>Редактировать</th>
                    <th>Удалить</th>
                </tr>
            </thead>
            <tbody>
            @forelse($pages as $page)
                <tr>
                    <td>{{$page->id}}</td>
                    <td>{{$page['template']['name']}}</td>
                    <td>{{$page->seo_title}}</td>
                    <td>{{$page->seo_h1}}</td>
                    <td>{{'/page/'.$page->slug}}</td>
                    <td><a class="btn btn-primary" href="{{route('admin.page.edit', ['page' => $page->id])}}"><i class="far fa-edit"></i></a></td>
                    <td>
                        <form action="{{route('admin.page.delete', ['page' => $page->id])}}" method="post">
                            {{csrf_field()}}
                            <button class="btn btn-danger" type="submit"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>Страницы не найдены</td>
                    <td>Страницы не найдены</td>
                    <td>Страницы не найдены</td>
                    <td>Страницы не найдены</td>
                    <td>Страницы не найдены</td>
                    <td>Страницы не найдены</td>
                    <td>Страницы не найдены</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection