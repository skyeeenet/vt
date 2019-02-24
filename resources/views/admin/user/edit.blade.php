@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <h3 class="text-center mt-3 mb-3">Редактирование пользователя № {{$user->id}}</h3>
        <form enctype="multipart/form-data" action="{{route('admin.users').'/update/'.$user->id}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Имя</label>
                <input class="form-control" type="text" id="name" name="name" value="{{$user->name}}">
            </div>
            <div class="form-group">
                <label for="name">Почта</label>
                <input class="form-control" type="email" id="email" name="email" value="{{$user->email}}">
            </div>
            <div>
                <p>Изображение профиля</p>
                <img style="max-width: 300px;" src="{{$user->image}}" alt="Profile photo">
            </div>
            <div class="form-group">
                <label for="image">Обновить изображение</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <div class="form-group">
                <label for="about">О себе</label><br>
                <textarea class="form-control" name="description" id="description" cols="100" rows="10">{{$user->description}}</textarea>
            </div>
            <div class="form-group">
                <label for="role">Роль</label>
                <select class="form-control" name="role" id="role">
                    @foreach($roles as $role)
                        <option @if($user->role_id == $role->id) selected @endif value="{{$role->id}}">{{$role->value}}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-primary" type="submit">Обновить</button>
        </form>
    </div>
@endsection