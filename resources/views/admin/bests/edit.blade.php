@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <form action="{{route('admin.bests').'/update/'.$best->id}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="user">Выберите пользователя</label>
                <select class="form-control" name="user" id="user">
                    @foreach($users as $user)
                        <option @if($user->id == $best->user_id) selected @endif value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="url">Ссылка на интервью</label>
                <input class="form-control" type="text" id="url" name="url" value="{{$best->interview_url}}">
            </div>
            <div class="form-group">
                <label for="title">Заголовок</label>
                <input class="form-control" type="text" id="title" name="title" value="{{$best->title}}">
            </div>
            <div class="form-group">
                <label for="description">Описание (191 символ максимум)</label>
                <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{$best->description}}</textarea>
            </div>
            <button class="btn btn-primary" type="submit">Обновить</button>
        </form>
    </div>
@endsection