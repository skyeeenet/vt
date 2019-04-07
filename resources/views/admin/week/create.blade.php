@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <form action="{{route('admin.weeks.store')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="weekName">Неделя</label>
                <input type="text" class="form-control" id="weekName" name="week-name">
            </div>
            <button class="btn btn-primary" type="submit">Создать</button>
        </form>
    </div>
@endsection