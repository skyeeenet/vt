@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <h3>Редактирование изображения № {{$image->id}}</h3>
        <form action="{{route('admin.content.images').'/update/'.$image->id}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="url">URL</label>
                <input type="text" class="form-control" id="url" name="url" value="{{$image->url}}">
            </div>
            <div class="form-group">
                <label for="type">Тип</label>
                <select name="type" id="type">
                    <option @if($image->type == 'remote') selected @endif value="remote">Удаленный</option>
                    <option @if($image->type == 'local') selected @endif value="local">Локальный</option>
                </select>
            </div>
            <button class="btn btn-primary" type="submit">Обновить</button>
        </form>
    </div>
@endsection