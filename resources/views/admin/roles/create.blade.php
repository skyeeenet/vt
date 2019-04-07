@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <form action="{{route('admin.roles.store')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="role">Роль</label>
                <input type="text" class="form-control" id="role" name="role">
            </div>
            <div class="form-group">
                <label for="public">Публичное навание</label>
                <input type="text" class="form-control" id="public" name="public">
            </div>
            <button class="btn btn-primary" type="submit">Создать</button>
        </form>
    </div>
@endsection