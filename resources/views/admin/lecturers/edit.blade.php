@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <form action="{{route('admin.lecturers').'/update/'.$lecturer->id}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="user">Пользователь</label>
                <select class="form-control" name="user" id="user">
                    @foreach($users as $user)
                        <option @if($user->id == $lecturer->id) selected @endif value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="position">Должность</label>
                <input class="form-control" type="text" id="position" name="position" value="{{$lecturer->position}}">
            </div>
            <div class="form-group">
                <label for="position">Кафедра</label>
                <input class="form-control" type="text" value="{{$lecturer->department}}" id="department" name="department">
            </div>
            <div class="form-group">
                <label for="position">Email</label>
                <input class="form-control" type="email" id="email" name="email" value="{{$lecturer->email}}">
            </div>
            <div class="form-group">
                <label for="position">Телефон</label>
                <input class="form-control" type="text" id="phone" name="phone" value="{{$lecturer->phone}}">
            </div>
            <div class="form-group">
                <label for="position">Facebook</label>
                <input class="form-control" type="text" id="facebook" name="facebook" value="{{$lecturer->facebook}}">
            </div>
            <div class="form-group">
                <label for="position">NTB</label>
                <input class="form-control" type="text" id="ntb" name="ntb" value="{{$lecturer->ntb}}">
            </div>
            <button class="btn btn-primary" type="submit">Обновить</button>
        </form>
    </div>
@endsection