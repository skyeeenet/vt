@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <form action="{{route('admin.conferences').'/update/'.$conference->id}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="type">Название конференции</label>
                <input type="text" class="form-control" id="type" name="type" value="{{$conference->type}}">
            </div>
            <div class="form-group">
                <label for="year">Год проведения</label>
                <input type="text" class="form-control" id="year" name="year" value="{{$conference->year}}">
            </div>
            <button class="btn btn-primary" type="submit">Обновить</button>
        </form>

        <h5 class="text-center">Информация о конференции</h5>

        <form action="{{route('admin.conferences').'/info/update/'.$info->id}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="place">Место проведения</label>
                <input type="text" class="form-control" id="place" name="place" value="{{$info->place}}">
            </div>
            <div class="form-group">
                <label for="year">Время проведения</label>
                <input type="text" class="form-control" id="year" name="time" value="{{$info->time}}">
            </div>
            <div class="form-group">
                <label for="year">Председатель</label>
                <input type="text" class="form-control" id="year" name="chairman" value="{{$info->chairman}}">
            </div>
            <div class="form-group">
                <label for="year">Секретарь</label>
                <input type="text" class="form-control" id="year" name="secretary" value="{{$info->secretary}}">
            </div>
            <div class="form-group">
                <label for="year">Длительность регистрации</label>
                <input type="text" class="form-control" id="year" name="duration" value="{{$info->duration}}">
            </div>
            <div class="form-group">
                <label for="protocol">Протокол проведения</label>
                <input type="text" class="form-control" id="protocol" name="protocol" value="{{$info->protocol}}">
            </div>
            <div class="form-group">
                <label for="theses">Сборник тезисов докладов</label>
                <input type="text" class="form-control" id="theses" name="theses" value="{{$info->theses}}">
            </div>
            <div class="form-group">
                <label for="slider">Слайдер</label>
                <select class="form-control" name="slider" id="slider">
                    @foreach($sliders as $slider)
                        <option @if($info->slider_id == $slider->id) selected @endif value="{{$slider->id}}">{{$slider->id}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="show">Отображать возможность регистрации ?</label>
                <select class="form-control" name="show" id="show">
                    <option @if($info->show_reg == 1) selected @endif value="1">Да</option>
                    <option @if($info->show_reg == 0) selected @endif value="0">Нет</option>
                </select>
            </div>
            <button class="btn btn-primary" type="submit">Обновить</button>
        </form>
        <h5 class="text-center">Добавить докладчика</h5>
        <form action="{{route('admin.conferences').'/users/store/'.$conference->id}}" method="post">
            @csrf
            <div class="form-group">
                <label for="theme">Темы докладов</label>
                <input class="form-control" type="text" id="theme" name="theme">
            </div>
            <div class="form-group">
                <label for="speaker">Докладчик</label>
                <input class="form-control" type="text" id="speaker" name="speaker">
            </div>
            <div class="form-group">
                <label for="head">Руководитель</label>
                <input class="form-control" type="text" id="head" name="head">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Добавить</button>
        </form>

        <table  class="table">
            <thead>
                <tr>
                    <th>Тема доклада</th>
                    <th>Докладчик</th>
                    <th>Руководитель</th>
                    <th>Удалить</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                    <tr>
                        <td>{{$user->theme}}</td>
                        <td>{{$user->speaker}}</td>
                        <td>{{$user->head}}</td>
                        <td>
                            <form action="{{route('admin.conferences').'/users/delete/'.$user->id}}" method="post">
                                {{csrf_field()}}
                                <button class="btn btn-danger" type="submit"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                @empty
                <tr>
                    <td>Пусто !</td>
                    <td>Пусто !</td>
                    <td>Пусто !</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection