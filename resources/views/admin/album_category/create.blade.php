@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <form action="{{route('admin.groups.store')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="groupName">Название группы</label>
                <input type="text" class="form-control" id="groupName" name="group-name">
            </div>
            <button class="btn btn-primary" type="submit">Создать</button>
        </form>
    </div>
@endsection