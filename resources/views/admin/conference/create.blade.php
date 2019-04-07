@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <form action="{{route('admin.conferences.store')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="type">Название конференции</label>
                <input type="text" class="form-control" id="type" name="type">
            </div>
            <div class="form-group">
                <label for="year">Год проведения (2017-2018)</label>
                <input type="text" class="form-control" id="year" name="year">
            </div>
            <button class="btn btn-primary" type="submit">Создать</button>
        </form>
    </div>
@endsection