@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <form action="{{route('admin.weeks').'/update/'.$week->id}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="groupName">Неделя</label>
                <input type="text" class="form-control" id="groupName" name="week-name" value="{{$week->value}}">
            </div>
            <button class="btn btn-primary" type="submit">Обновить</button>
        </form>
    </div>
@endsection