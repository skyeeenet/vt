@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <form action="{{route('admin.subjects.store')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="subjectpName">Название предмета</label>
                <input type="text" class="form-control" id="subjectName" name="subject-name">
            </div>
            <button class="btn btn-primary" type="submit">Создать</button>
        </form>
    </div>
@endsection