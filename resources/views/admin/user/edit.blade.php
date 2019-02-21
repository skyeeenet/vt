@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <h3 class="text-center mt-3 mb-3">Редактирование пользователя № {{$user->id}}</h3>
        <form action="{{route('admin.users').'/update/'.$user->id}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Имя</label>
                <input class="form-control" type="text" id="name" name="name" value="{{$user->name}}">
            </div>
            <div class="form-group">
                <label for="name">Почта</label>
                <input class="form-control" type="email" id="email" name="email" value="{{$user->email}}">
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