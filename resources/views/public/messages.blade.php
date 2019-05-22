@extends('public.layouts.basic')

@section('title')Сообщения - ПГТУ - Кафедра Информатики@endsection
@section('description')Отправленные и получение сообщения@endsection

@section('content')
<main>
    <div class="errors text-center">
        <ul>
            @foreach($errors->all() as $error)
                <li> {{{ $error }}} </li>
            @endforeach
        </ul>
    </div>
    <section class="container mb-3">
        <form action="{{route('messages.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="to">Кому отправить сообщение</label>
                <select class="form-control" name="user" id="to">
                    @foreach($users as $user)
                        @if($user->id != Auth::id()) <option value="{{$user->id}}">{{$user->name}}</option> @endif
                    @endforeach
                </select>
            </div>
            <label for="message">Сообщение</label>
            <textarea class="form-control" name="message" id="message" cols="30" rows="10"></textarea>
            <div class="form-group mt-2">
                <label for=""></label>
                <img src="{{ captcha_src() }}" alt="captcha" class="captcha-img" data-refresh-config="default"><a href="#" id="refresh"><small>обновить</small></a></p>
            </div>
            <input type="text" name="captcha" placeholder="Ответ" required/>
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
                    <th>Очистить</th>
                </tr>
            </thead>
            @foreach($messages as $message)
                <tr>
                    <td>{{$message->created_at}}</td>
                    <td>@if($message->from == Auth::id()) Вы @else {{$message->userFrom['name']}} @endif</td>
                    <td>@if($message->to == Auth::id()) Вы @else {{$message->userTo['name']}} @endif</td>
                    <td>{{$message->message}}</td>
                    <td>
                        <form action="{{route('messages').'/delete/'.$message->id}}" method="post">
                            @csrf
                            <button class="btn btn-danger">Clear</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </section>
</main>
@endsection

@section('scripts')
    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function () {
            $('.message a').click(function(e){
                e.preventDefault();
                console.log('test');
                $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
            });
            $('#refresh').on('click',function(){
                var captcha = $('img.captcha-img');
                var config = captcha.data('refresh-config');
                $.ajax({
                    method: 'GET',
                    url: '/get_captcha/' + config,
                }).done(function (response) {
                    captcha.prop('src', response);
                });
            });
        });
    </script>
@endsection