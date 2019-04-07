@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <form action="{{route('admin.bests.store')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="user">Выберите пользователя</label>
                <select class="form-control" name="user" id="user">
                    @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="url">Ссылка на интервью</label>
                <input class="form-control" type="text" id="url" name="url">
            </div>
            <div class="form-group">
                <label for="title">Заголовок</label>
                <input class="form-control" type="text" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="description">Описание (191 символ максимум)</label>
                <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
            </div>
            <button class="btn btn-primary" type="submit">Добавить</button>
        </form>
    </div>
@endsection