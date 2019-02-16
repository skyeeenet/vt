@extends('admin.layouts.app_admin')

@section('content')
    <div class="container d-flex flex-column align-items-center">
        <div class="jumbotron w-25">
            <form action="{{route('admin.schedule').'/update/'.$schedule->id}}" method="post">
                {{csrf_field()}}
                <label for="week">Неделя</label>
                <div class="form-group">
                    <select class="form-control" name="week_id" id="week">
                        @forelse($weeks as $week)
                            <option @if($week->id == $schedule->week_id) selected @endif value="{{$week->id}}">{{$week->value}}</option>
                        @empty
                            <option value="">Пусто</option>
                        @endforelse
                    </select>
                </div>
                <label for="group">Группа</label>
                <div class="form-group">
                    <select class="form-control" name="group_id" id="group">
                        @forelse($groups as $group)
                            <option @if($group->id == $schedule->group_id) selected @endif value="{{$group->id}}">{{$group->value}}</option>
                        @empty
                            <option value="">Пусто</option>
                        @endforelse
                    </select>
                </div>
                <label for="subject">Предмет</label>
                <div class="form-group">
                    <select class="form-control" name="subject_id" id="subject">
                        @forelse($subjects as $subject)
                            <option @if($subject->id == $schedule->subject_id) selected @endif value="{{$subject->id}}">{{$subject->value}}</option>
                        @empty
                            <option value="">Пусто</option>
                        @endforelse
                    </select>
                </div>
                <label for="number">Пара</label>
                <div class="form-group">
                    <select class="form-control" name="number" id="number">
                        <option @if($schedule->number == 1) selected @endif value="1">1</option>
                        <option @if($schedule->number == 2) selected @endif value="2">2</option>
                        <option @if($schedule->number == 3) selected @endif value="3">3</option>
                        <option @if($schedule->number == 4) selected @endif value="4">4</option>
                        <option @if($schedule->number == 5) selected @endif value="5">5</option>
                        <option @if($schedule->number == 6) selected @endif value="6">6</option>
                    </select>
                </div>
                <label for="day">День</label>
                <select class="form-control mt-4 mb-4" name="day" id="day">
                    <option @if($schedule->number == 'Понедельник') selected @endif value="Понедельник">Понедельник</option>
                    <option @if($schedule->number == 'Вторник') selected @endif value="Вторник">Вторник</option>
                    <option @if($schedule->number == 'Среда') selected @endif value="Среда">Среда</option>
                    <option @if($schedule->number == 'Четверг') selected @endif value="Четверг">Четверг</option>
                    <option @if($schedule->number == 'Пятница') selected @endif value="Пятница">Пятница</option>
                    <option @if($schedule->number == 'Суббота') selected @endif value="Суббота">Суббота</option>
                    <option @if($schedule->number == 'Воскресенье') selected @endif value="Воскресенье">Воскресенье</option>
                </select>
                <button class="btn btn-primary" type="sumbit">Обновить</button>
            </form>
        </div>
    </div>
@endsection