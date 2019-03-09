@extends('public.layouts.basic')

@section('content')
<main>
    <section class="container mb-3">
        <form action="{{route('messages.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="to">Кому отправить сообщение</label>
                <select class="form-control" name="user" id="to">
                    @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>
            <label for="message">Сообщение</label>
            <textarea class="form-control" name="message" id="message" cols="30" rows="10"></textarea>
            <button class="btn btn-primary mt-1" type="submit">Отправить</button>
        </form>
    </section>
    <section>
        <table class="table text-center">
            <thead>
                <tr>
                    <th>Время отправки</th>
                    <th>Отправитель</th>
                    <th>Получатель</th>
                    <th>Сообщение</th>
                </tr>
            </thead>
            @foreach($messages as $message)
                <tr>
                    <td>{{$message->created_at}}</td>
                    <td>@if($message->from == Auth::id()) Вы @else {{$message->userFrom['name']}} @endif</td>
                    <td>@if($message->to == Auth::id()) Вы @else {{$message->userTo['name']}} @endif</td>
                    <td>{{$message->message}}</td>
                </tr>
            @endforeach
        </table>
    </section>
</main>
@endsection