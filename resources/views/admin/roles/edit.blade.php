@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <form action="{{route('admin.roles').'/update/'.$role->id}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="role">Роль</label>
                <input type="text" class="form-control" id="role" name="role" value="{{$role->value}}">
            </div>
            <div class="form-group">
                <label for="public">Публичное название</label>
                <input type="text" class="form-control" id="public" name="public" value="{{$role->public_name}}">
            </div>
            <button class="btn btn-primary" type="submit">Обновить</button>
        </form>
    </div>
@endsection