<!doctype html>
<html>
<?php $menu = \App\Models\Menu::with('submenu')->get(); ?>
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
            <div
                    class="d-flex flex-row justify-content-around justify-content-md-between align-items-center pt-3 pb-3 pt-lg-2 pb-lg-2">
                <div
                        class="d-flex flex-column flex-sm-row justify-content-center align-items-center currentWeek">
                    <div>Текущая&nbsp;неделя:&nbsp;</div>
                    <div>Четная</div>
                </div>
                <!-- /.currentWeek -->
                <div
                        class="d-flex flex-column flex-md-row justify-content-around align-items-start align-items-md-center contactsTopHeader">
                    <div class="mt-md-0 mt-md-0 ml-3"><img src="./images/placeholder.svg" heigth="20px"
                                                           width="20px" alt="position"><span class="pl-2">Мариуполь</span></div>
                    <div class="mt-2 mt-md-0 ml-3"><img src="./images/email.svg" heigth="20px" width="20px"
                                                        alt="mail"><span class="pl-2">test@gmail.com</span></div>
                    @if(Auth::guest()) <div class="mt-2 mt-md-0 ml-3">
                        <img src="{{ asset('images/login.svg') }}" height="20px" width="20px" alt="registration"><a
                                class="btn-reg ml-2" href="/register">Вход/Регистрация</a>
                    </div>
                    @else
                        <div class="mt-2 mt-md-0 ml-3 user-form">
                            <a href="#">{{Auth::user()->name}}</a>
                            <ul>
                                <li><a href="/user">Мой профиль</a></li>
                                @if(Auth::user()->role['value'] == 'Admin') <li><a href="/admin">Админка</a></li> @endif
                                <li> <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}"
                                          method="POST"style="display: none;">
                                        {{ csrf_field() }}
                                    </form></li>
                            </ul>
                        </div>
                    @endif
                </div>
                <!-- /.contactsTopHeader -->
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
        <div class="container">
            <div class="col-md-4">
                <a class="ml-2 navbar-brand" href="#">LOGO</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="col-md-10 collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    @forelse($menu as $item)
                        @if (isset($item['submenu'][0]))
                            <li class="nav-item dropdown mr-md-3">
                                <a class="nav-link dropdown-toggle" href="#" id="enrollee" role="button"
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
                                <a class="nav-link" href="{{$item['url']}}">{{$item['item']}}<span class="sr-only">(current)</span></a>
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
                    <div class="nav flex-column align-items-start">
                        <p class="vit_foot_main_text p-0">Разработчики</p>
                        <p class="vit_foot_text m-0">Тилинин С.В.</p>
                        <p class="vit_foot_text m-0">Клычков В.А.</p>
                        <p class="vit_foot_text m-0">Симон Н.В.</p>
                        <p class="vit_foot_text m-0">Крутиков В.А.</p>
                        <p class="vit_foot_text m-0">Грирорьев В.В.</p>
                    </div>
                </div>
                <div class="col-lg-4 d-flex justify-content-center">
                    <div class="nav flex-column align-items-start">
                        <p class="vit_foot_main_text">Контакты</p>
                        <div class="mt-md-0 mt-md-0 "><img src="./images/placeholder.svg" heigth="20px"
                                                           width="20px" alt="City"><span class="pl-2 color_cont">Мариуполь</span></div>
                        <div class="pt-2 mt-md-0"><img src="./images/email.svg" heigth="20px" width="20px"
                                                       alt="Mail"><span class="pl-2 color_cont">test@gmail.com</span></div>
                        <div class="mt-md-0 mt-md-0 pt-2"><img src="./images/support.svg" heigth="20px"
                                                               width="20px" alt="Support"><span class="pl-2 color_cont">Обратная связь</span></div>
                        <div class="mt-2 mt-md-0 ml-3">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex  justify-content-center">
                    <form class="search-form m-0" action="#" method="get">
                                <span class="bg-white"><input type="text" placeholder="Поиск..."><button
                                            type="submit">НАЙТИ</button></span>
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
@yield('scripts')
</div>
</body>
</html>