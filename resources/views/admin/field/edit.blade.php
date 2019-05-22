@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <form action="{{route('admin.field.update', $field->id)}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="field">Значение</label>
                <input required class="form-control" type="text" id="field" name="value" value="{{$field->value}}">
            </div>
            <div class="form-group">
                <label for="description">Описание</label>
                <input required class="form-control" type="text" id="description" name="description" value="{{$field->description}}">
            </div>
            <button class="btn btn-primary" type="submit">Редактировать</button>
        </form>
    </div>
@endsection