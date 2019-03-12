<!doctype html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ПГТУ - Кафедра Информатики</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- Animate CSS-->
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/animate.css') }}" />
    <!-- Another CSS -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/main.css') }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/slick.css') }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/slick-theme.css') }}" />
    @yield('styles')
    <style>
        .user-form {
            position: relative;
        }
        .user-form ul {
            display: none;
            position: absolute;
            top: 22px;
            z-index: 100;
            background-color: white;
        }
        .user-form ul li {
            min-width: 150px;
            padding: 10px;
        }
        .user-form ul li {
            border-bottom: 1px solid black;
        }
        .user-form:hover ul {
            display: block;
        }
    </style>
</head>
<body>
<div class="MAINBOX">
<header>
    <div class="container-fluid topHeader">
        <div class="container">
            <div class="d-flex flex-row justify-content-around justify-content-md-between align-items-center pt-3 pb-3 pt-lg-2 pb-lg-2">
                <div class="d-flex flex-column flex-sm-row justify-content-center align-items-center currentWeek">
                    <div>Текущая&nbsp;неделя:&nbsp;</div>
                    <div id="current_week">Четная</div>
                </div>
                <!-- /.currentWeek -->
                <div class="d-flex flex-column flex-md-row justify-content-around align-items-start align-items-md-center contactsTopHeader">
                    <div class="mt-md-0 mt-md-0 ml-3"><img src="/images/placeholder.svg" heigth="20px"
                                                           width="20px" alt="position"><span class="pl-2">{{Page::getHeaderByType('place')}}</span></div>
                    <div class="mt-2 mt-md-0 ml-3"><img src="/images/email.svg" heigth="20px" width="20px"
                                                        alt="mail"><span class="pl-2">{{Page::getHeaderByType('email')}}</span></div>
                    @if(Auth::guest()) <div class="mt-2 mt-md-0 ml-3">
                        <img src="{{ asset('images/login.svg') }}" height="20px" width="20px" alt="registration"><a
                                class="btn-reg ml-2" href="/register">Вход/Регистрация</a>
                    </div>
                    @else
                        <ul class="ml-3 navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link profile dropdown-toggle roboto14-standard" href="#" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Иванов Иван Иванович
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/user">Мой профиль</a>
                                    @if(Auth::user()->role['value'] == 'Admin') <a class="dropdown-item" href="/admin">Админка</a> @endif
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Выйти
                                    </a>
                                    <form id="logout-form" action="{{ url('/logout') }}"
                                          method="POST"style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </li>
                        </ul>
                    @endif
                </div>
                <!-- /.contactsTopHeader -->
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
        <div class="container">
            <div class="col-md-4 col-2">
                <a class="ml-md-2 ml-0 navbar-brand roboto18" href="/"><img style="width: {{Page::getHeaderByType('width').'px'}}; height: {{Page::getHeaderByType('height').'px'}};" class="mr-3 navbar-logo" src="{{Page::getHeaderByType('logo')}}" alt="">{{Page::getHeaderByType('logo-text')}}</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="col-md-8 col-10 collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    @forelse(Page::getMenu() as $item)
                        @if (isset($item['submenu'][0]))
                            <li class="nav-item dropdown mr-md-3">
                                <a class="nav-link dropdown-toggle roboto18lt" href="#" id="enrollee" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{$item['item']}}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="enrollee">
                                    @foreach($item['submenu'] as $subitem)
                                        <a class="dropdown-item" href="{{$subitem['url']}}">{{$subitem['value']}}</a>
                                    @endforeach
                                </div>
                            </li>
                        @else
                            <li class="nav-item active mr-md-3">
                                <a class="nav-link roboto18lt" href="{{$item['url']}}">{{$item['item']}}<span class="sr-only"></span></a>
                            </li>
                        @endif
                    @empty
                        <p>Меню не заполнено</p>
                    @endforelse
                </ul>
            </div>
        </div>
    </nav>
</header>
@yield('content')
<footer>
    <div class="vit_footer_container margin-top">
        <div class="container pt-5 vit_footer_container">
            <div class="row">
                <div class="col-lg-4 d-flex justify-content-center">
                    <div class="nav w-100 flex-column align-items-center">
                        <p class="vit_foot_main_text p-0">Разработчики</p>
                        <p class="vit_foot_text m-0">Тилинин С.В.</p>
                        <p class="vit_foot_text m-0">Клычков В.А.</p>
                        <p class="vit_foot_text m-0">Симон Н.В.</p>
                        <p class="vit_foot_text m-0">Крутиков В.А.</p>
                        <p class="vit_foot_text m-0">Григорьев В.А.</p>
                    </div>
                </div>
                <div class="col-lg-4 mt-3 mt-lg-0 d-flex justify-content-center">
                    <div class="nav w-100 flex-column align-items-center">
                        <p class="vit_foot_main_text text-center">Контакты</p>
                        <div class="mt-md-0 mt-md-0 "><img src="/images/placeholder.svg" heigth="20px"
                                                           width="20px" alt="City"><span class="pl-2 color_cont">{{Page::getHeaderByType('place')}}</span></div>
                        <div class="pt-2 mt-md-0"><img src="/images/email.svg" heigth="20px" width="20px"
                                                       alt="Mail"><span class="pl-2 color_cont">{{Page::getHeaderByType('email')}}</span></div>
                        <div class="mt-md-0 mt-md-0 pt-2"><img src="/images/support.svg" heigth="20px"
                                                               width="20px" alt="Support"><span class="pl-2 color_cont">Обратная связь</span></div>
                    </div>
                </div>
                <div class="col-lg-4 mt-3 mt-lg-0 d-flex justify-content-center">
                    <form class="search-form m-0" action="{{route('search')}}" method="get">
                                <span class="bg-white"><input type="text" name="search" placeholder="Поиск..."><button type="submit">НАЙТИ</button></span>
                    </form>
                </div>
            </div>

        </div>
        <div class="text-center pt-4 pb-3 text-secondary roboto16">
            Copyright &copy; 2019 All rights reserved. Developed by <a
                    href="https://github.com/devitvt">DevItVt</a>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
<!-- Another JS -->
<script src="{{ asset('scripts/additional/slick.min.js') }}"></script>
<script src="{{ asset('scripts/__main__.js') }}"></script>
    <script>

        ajax('/api/offset', callWeek);
        function callWeek (resp) {
            offset = resp['offset'];
            getWeek(offset);
        }
        function ajax(url, callback) {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', url);
            xhr.onreadystatechange = function(){
                if (this.readyState == 4) {
                    if (this.status == 200)
                        callback(JSON.parse(this.responseText));
                    // иначе сетевая ошибка
                }
            };
            xhr.send(null);
        }

        function getWeek(offset){
            var now = new Date();
            now.setTime(Date.parse(now));
            var FirstSeptYear=now.getFullYear();
            if (now.getMonth()<8) FirstSeptYear=FirstSeptYear-1;
            var FirstSept = new Date('09/01/'+FirstSeptYear);
            var day = FirstSept.getDay();
            if(day == 0)
            {day=7;}
            --day;
            FirstSept.setTime(Date.parse(FirstSept) -day*86400000);
            var i = parseInt(offset);                                              //для изменения четности вручную изменить на 0 или 1
            while(now>FirstSept){
                FirstSept.setTime(Date.parse(FirstSept)+604800000);
                i++;
            }
            if (i%2 == 0) {
                document.getElementById('current_week').innerHTML = 'Парная';
            }
            else {
                document.getElementById('current_week').innerHTML = 'Непарная';
            }
            return;
        }
    </script>
@yield('scripts')
</div>
</body>
</html>