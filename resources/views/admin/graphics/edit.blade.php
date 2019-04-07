@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <form action="{{route('admin.graphics').'/update/'.$graphic->id}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="type">Тип графика</label>
                <select class="form-control" name="type" id="type">
                    <option @if($graphic->type == 'Первая аттестация') selected @endif value="Первая аттестация">Первая аттестация</option>
                    <option @if($graphic->type == 'Вторая аттестация') selected @endif value="Вторая аттестация">Вторая аттестация</option>
                    <option @if($graphic->type == 'Сессия') selected @endif value="Сессия">Сессия</option>
                    <option @if($graphic->type == 'Каникулы') selected @endif value="Каникулы">Каникулы</option>
                </select>
            </div>
            <div class="form-group">
                <label for="date">Сроки</label>
                <input class="form-control" type="date" name="date_begin" id="date" value="{{$graphic->begin}}">
                <input class="form-control" type="date" name="date_end" value="{{$graphic->end}}">
            </div>
            <button class="btn btn-primary" type="submit">Обновить</button>
        </form>
    </div>
@endsection