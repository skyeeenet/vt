@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <form action="{{route('admin.groups').'/update/'.$group->id}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="groupName">Название группы</label>
                <input type="text" class="form-control" id="groupName" name="group-name" value="{{$group->value}}">
            </div>
            <button class="btn btn-primary" type="submit">Обновить</button>
        </form>
    </div>
@endsection