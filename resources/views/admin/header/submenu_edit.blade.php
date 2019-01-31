@extends('admin.layouts.app_admin')

@section('title') Редактирование подпункта @endsection

@section('content')
<div class="container">
    <div class="jumbotron">
        <div class="d-flex flex-column">
            <h2>Редактирование подпункта</h2>
            <form action="{{'/admin/header/submenu/update/'.$submenu->id}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="sub-menu-item">Подпункт</label>
                    <input type="text" class="form-control" name="sub-menu-item" id="sub-menu-item" value="{{$submenu->value}}">
                </div>
                <div class="form-group">
                    <label for="sub-url-menu">URL Адрес</label>
                    <input type="text" class="form-control" name="sub-url-menu" id="sub-url-menu" value="{{$submenu->url}}">
                </div>
                <button type="submit" class="btn btn-primary">Добавить</button>
            </form>
        </div>
    </div>
</div>
@endsection