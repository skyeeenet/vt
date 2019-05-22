@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <form action="{{route('admin.administration').'/update'}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="offset">Инвертировать недели ?</label>
                <select class="form-control" name="offset" id="offset">
                    <option @if ($offset->value == 0) selected @endif value="0">Да</option>
                    <option @if ($offset->value == 1) selected @endif value="1">Нет</option>
                </select>
            </div>
            <div class="form-group">
                <label for="admin">Роль администратора</label>
                <select class="form-control" name="admin" id="admin">
                    @foreach($roles as $role)
                        <option  @if(!is_null($admin)) @if($admin->id == $role->id) selected @endif @endif value="{{$role->id}}">{{$role->public_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="lead">Роль старосты</label>
                <select class="form-control" name="lead" id="lead">
                    @foreach($roles as $role)
                        <option @if(!is_null($admin)) @if($lead->value == $role->id) selected @endif @endif value="{{$role->id}}">{{$role->public_name}}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-primary" type="submit">Обновить</button>
        </form>
    </div>
@endsection