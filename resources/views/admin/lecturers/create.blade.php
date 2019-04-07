@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <form action="{{route('admin.lecturers.store')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="user">Пользователь</label>
                <select class="form-control" name="user" id="user">
                    @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="position">Должность</label>
                <input class="form-control" type="text" id="position" name="position">
            </div>
            <div class="form-group">
                <label for="position">Кафедра</label>
                <input class="form-control" type="text" value="Информатика" id="department" name="department">
            </div>
            <div class="form-group">
                <label for="position">Email</label>
                <input class="form-control" type="email" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="position">Телефон</label>
                <input class="form-control" type="text" id="phone" name="phone">
            </div>
            <div class="form-group">
                <label for="position">Facebook</label>
                <input class="form-control" type="text" id="facebook" name="facebook">
            </div>
            <div class="form-group">
                <label for="position">NTB</label>
                <input class="form-control" type="text" id="ntb" name="ntb">
            </div>
            <button class="btn btn-primary" type="submit">Создать</button>
        </form>
    </div>
@endsection