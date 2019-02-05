@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <form action="{{route('admin.subjects').'/update/'.$subject->id}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="groupName">Название предмета</label>
                <input type="text" class="form-control" id="groupName" name="subject-name" value="{{$subject->value}}">
            </div>
            <button class="btn btn-primary" type="submit">Обновить</button>
        </form>
    </div>
@endsection