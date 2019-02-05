@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <form action="{{route('admin.schedule.store')}}" method="post">
            {{csrf_field()}}
            <select class="form-control mt-4 mb-4" name="group-id">
                @forelse($groups as $group)
                <option value="{{$group->id}}">{{$group->value}}</option>
                @empty
                <p>Данные отсутствуют</p>
                @endforelse
            </select>
            <select class="form-control mt-4 mb-4" name="subject-id">
                @forelse($subjects as $subject)
                    <option value="{{$subject->id}}">{{$subject->value}}</option>
                @empty
                    <p>Данные отсутствуют</p>
                @endforelse
            </select>
            <select class="form-control mt-4 mb-4" name="week-id">
                @forelse($weeks as $week)
                    <option value="{{$week->id}}">{{$week->value}}</option>
                @empty
                    <p>Данные отсутствуют</p>
                @endforelse
            </select>
            <select class="form-control mt-4 mb-4" name="number">
                <option value="1">1 Пара</option>
                <option value="2">2 Пара</option>
                <option value="3">3 Пара</option>
                <option value="4">4 Пара</option>
                <option value="5">5 Пара</option>
                <option value="6">6 Пара</option>
            </select>
            <button class="btn btn-primary" type="submit">Создать</button>
        </form>
    </div>
@endsection