@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <form action="{{route('admin.categories').'/update/'.$category->id}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="value">Название категории</label>
                <input type="text" class="form-control" id="groupName" name="value" value="{{$category->value}}">
            </div>
            <button class="btn btn-primary" type="submit">Обновить</button>
        </form>
    </div>
@endsection