@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <form action="{{route('admin.pages').'/update/'.$page->id}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="url">Адрес страницы</label>
                <input type="text" class="form-group" id="url" name="url" value="{{$page->url}}">
            </div>
            <div class="form-group">
                <label for="title">Заголовок страницы</label>
                <input type="text" class="form-group" id="title" name="title" value="{{$page->title}}">
            </div>
            <button class="btn btn-primary" type="submit">Обновить</button>
        </form>
    </div>
@endsection