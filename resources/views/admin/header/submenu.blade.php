@extends('admin.layouts.app_admin')
@section('title') Редактирование меню @endsection

@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Главная</a></li>
            <li class="breadcrumb-item"><a href="/admin/header/menu">Меню</a></li>
            <li class="breadcrumb-item active">Редактирование меню</li>
        </ol>
    </div>
    <h2>Редактирование пунктов меню</h2>
    <div class="container d-flex flex-column align-items-center">
        <div class="jumbotron d-flex">
            <div class="d-flex flex-column mr-5">
                <h2>Основной пункт</h2>
                <form action="{{'/admin/header/menu/update/'.$menu->id}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="menu-item">Пункт меню</label>
                        <input type="text" class="form-control" name="menu-item" id="menu-item" value="{{$menu->item}}">
                    </div>
                    <div class="form-group">
                        <label for="url-menu">URL Адрес</label>
                        <input type="text" class="form-control" name="url-menu" id="url-menu" value="{{$menu->url}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Применить</button>
                </form>
            </div>

            <div class="d-flex flex-column">
                <h2>Добавление подпункта</h2>
                <form action="{{'/admin/header/submenu/create/'.$menu->id}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="sub-menu-item">Подпункт</label>
                        <input type="text" class="form-control" name="sub-menu-item" id="sub-menu-item" value="">
                    </div>
                    <div class="form-group">
                        <label for="sub-url-menu">URL Адрес</label>
                        <input type="text" class="form-control" name="sub-url-menu" id="sub-url-menu" value="">
                    </div>
                    <button type="submit" class="btn btn-primary">Добавить</button>
                </form>
            </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>Подпункт</th>
                    <th>URL Адрес</th>
                    <th>Редактировать</th>
                    <th>Удалить</th>
                </tr>
            </thead>
            <tbody>
            @forelse($menu->submenu as $item)
                <tr>
                    <td>{{$item->value}}</td>
                    <td>{{$item->url}}</td>
                    <td>
                        <a href="{{'/admin/header/submenu/update/'.$item->id}}" class="btn btn-primary text-center"><i class="fas fa-edit"></i></a>
                    </td>
                    <td>
                        <form action="{{'/admin/header/submenu/delete/'.$item->id}}" method="post">
                            {{csrf_field()}}
                            <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td>Подпункты отсутствуют</td>
                    <td>Подпункты отсутствуют</td>
                    <td>Подпункты отсутствуют</td>
                    <td>Подпункты отсутствуют</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection