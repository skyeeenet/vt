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
            <button class="btn btn-primary" type="submit">Обновить</button>
        </form>
    </div>
@endsection