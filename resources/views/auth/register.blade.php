@extends('layouts.app')

@section('styles')
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300);

        .login-page {
            width: 360px;
            padding: 8% 0 0;
            margin: auto;
        }
        .form {
            position: relative;
            z-index: 1;
            background: #FFFFFF;
            max-width: 360px;
            margin: 0 auto 100px;
            padding: 45px;
            text-align: center;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }
        .form input {
            font-family: "Roboto", sans-serif;
            outline: 0;
            background: #f2f2f2;
            width: 100%;
            border: 0;
            margin: 0 0 15px;
            padding: 15px;
            box-sizing: border-box;
            font-size: 14px;
        }
        .form button {
            font-family: "Roboto", sans-serif;
            text-transform: uppercase;
            outline: 0;
            background: #4CAF50;
            width: 100%;
            border: 0;
            padding: 15px;
            color: #FFFFFF;
            font-size: 14px;
            -webkit-transition: all 0.3s ease;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        .form button:hover,.form button:active,.form button:focus {
            background: #43A047;
        }
        .form .message {
            margin: 15px 0 0;
            color: #b3b3b3;
            font-size: 12px;
        }
        .form .message a {
            color: #4CAF50;
            text-decoration: none;
        }
        .form .register-form {
            display: none;
        }
        .container {
            position: relative;
            z-index: 1;
            max-width: 300px;
            margin: 0 auto;
        }
        .container:before, .container:after {
            content: "";
            display: block;
            clear: both;
        }
        .container .info {
            margin: 50px auto;
            text-align: center;
        }
        .container .info h1 {
            margin: 0 0 15px;
            padding: 0;
            font-size: 36px;
            font-weight: 300;
            color: #1a1a1a;
        }
        .container .info span {
            color: #4d4d4d;
            font-size: 12px;
        }
        .container .info span a {
            color: #000000;
            text-decoration: none;
        }
        .container .info span .fa {
            color: #EF3B3A;
        }
        body {
            background: #76b852; /* fallback for old browsers */
            background: -webkit-linear-gradient(right, #76b852, #8DC26F);
            background: -moz-linear-gradient(right, #76b852, #8DC26F);
            background: -o-linear-gradient(right, #76b852, #8DC26F);
            background: linear-gradient(to left, #76b852, #8DC26F);
            font-family: "Roboto", sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        .errors {
            width: 100%;
            display: flex;
            justify-content: center;
        }
        a {
            text-decoration: none;
        }
        #refresh {
            color: rgba(0,0,0,0.4);
        }
        .home-link {
            width: 100%;
            display: flex;
            justify-content: center;
            margin-top: 40px;
        }
        .home-link a {
            font-size: 24px;
            font-family: "Roboto";
            color: white;
        }
        .btn-link {
            display: block;
            margin-top: 10px;
            font-size: 12px;
            font-family: "Roboto";
        }
    </style>
@endsection

@section('content')

    <div class="home-link">
        <a href="/">На главную</a>
    </div>

    <div class="errors">
        <ul>
            @foreach($errors->all() as $error)
                <li> {{{ $error }}} </li>
            @endforeach
        </ul>
    </div>
    <div class="login-page">
        <div class="form">
            <form class="register-form" method="post" action="{{ route('register') }}">
                @csrf
                <input type="text" name="name" placeholder="Имя Фамилия Отчество" required autofocus/>
                <input type="text" name="email" placeholder="Email" required/>
                <input type="password" name="password" placeholder="Пароль" required/>
                <input type="password" name="password_confirmation" required placeholder="Пароль еще раз"/>
                <div class="form-group">
                    <label for=""></label>
                    <img src="{{ captcha_src() }}" alt="captcha" class="captcha-img" data-refresh-config="default"><a href="#" id="refresh"><small>обновить</small></a></p>
                </div>
                <input type="text" name="captcha" placeholder="Ответ" required/>
                <button type="submit">Создать</button>
                <p class="message">Уже есть аккаунт ? <a href="#">Войти</a></p>
            </form>
            <form class="login-form" method="post" action="{{ route('login') }}">
                @csrf
                <input type="text" name="email" placeholder="Email" required autofocus/>
                <input type="password" name="password" placeholder="Пароль" required/>
                <button>Войти</button>

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ 'Забыли пароль ?' }}
                    </a>
                @endif
                <p class="message">Нет аккаунта ? <a href="#">Создать аккаунт</a></p>
            </form>
        </div>
    </div>

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
