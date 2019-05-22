@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <form action="{{route('admin.template.store')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Имя (будет осуществлен поиск в папке templates. Пример test => test.blade.php)</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="description">Описание</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
            <button class="btn btn-primary" type="submit">Создать</button>
        </form>
    </div>
@endsection