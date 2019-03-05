@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <form action="{{route('admin.albums.store')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="value">Название альбома</label>
                <input type="text" class="form-control" id="groupName" name="value">
            </div>
            <button class="btn btn-primary" type="submit">Создать</button>
        </form>
    </div>
@endsection