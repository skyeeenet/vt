@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <form action="{{route('admin.graphics.store')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="type">Тип графика</label>
                <select class="form-control" name="type" id="type">
                    <option value="Первая аттестация">Первая аттестация</option>
                    <option value="Вторая аттестация">Вторая аттестация</option>
                    <option value="Сессия">Сессия</option>
                    <option value="Каникулы">Каникулы</option>
                </select>
            </div>
            <div class="form-group">
                <label for="date">Сроки первой аттестации</label>
                <input class="form-control" type="date" name="date_begin" id="date">
                <input class="form-control" type="date" name="date_end">
            </div>
            <button class="btn btn-primary" type="submit">Создать</button>
        </form>
    </div>
@endsection