<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.7/summernote.css" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
<style>
    nav {background: #413F3C;}
    nav ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }
    nav ul:after {
        content: "";
        display: table;
        clear: both;
    }
    nav a {
        text-decoration: none;
        display: block;
        transition: .3s linear;
    }
    .topmenu > li {
        float: left;
        position: relative;
        border-left: 1px solid black;
    }
    .topmenu > li:first-child {border-left: 0;}
    .topmenu > li > a {
        padding: 20px 30px;
        font-size: 12px;
        text-transform: uppercase;
        color: #FEFDFD;
        letter-spacing: 2px;
    }
    .topmenu > li > a.active,
    .submenu a:hover {color: #ddbe86;}
    .topmenu .fa,
    .submenu .fa {
        margin-left: 5px;
        color: inherit;
    }
    .submenu {
        position: absolute;
        z-index: 5;
        min-width: 200px;
        background: white;
        border-top: 1px solid #CBCBCC;
        border-left: 1px solid #CBCBCC;
        border-right: 1px solid #CBCBCC;
        visibility: hidden;
        opacity: 0;
        transform-origin: 0% 0%;
        transform: rotateX(-90deg);
        transition: .3s linear;
    }
    .submenu li {position: relative;}
    .submenu li a {
        color: #282828;
        padding: 10px 20px;
        font-size: 13px;
        border-bottom: 1px solid #CBCBCC;
    }
    .submenu .submenu {
        position: absolute;
        left: 100%;
        top: -1px;
        transition: .3s linear;
    }
    nav li:hover > .submenu {
        transform: rotateX(0deg);
        visibility: visible;
        opacity: 1;
    }
</style>
<header>
        <nav class="mb-4">
            <ul class="topmenu">
                <li><a href="/admin">Admin-Panel <small>alpha</small></a></li>
                <li><a href="{{ route('admin.header.text') }}" class="active">Header<span class="fa fa-angle-down"></span></a>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.header.text') }}">Редактирование текстов/изображений</a></li>
                        <li><a href="{{ route('admin.header.menu') }}">Редактирование меню</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('admin.content.images') }}" class="active">Наполнение<span class="fa fa-angle-down"></span></a>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.content.images') }}">Изображения</a></li>
                        <li><a href="{{ route('admin.content.text') }}">Тексты</a></li>
                        <li><a href="{{ route('admin.content.slider') }}">Создание слайдеров</a></li>
                        <li><a href="{{ route('admin.content.adverts') }}">Объявления</a></li>
                        <li><a href="{{ route('admin.content.posts') }}">Новости</a></li>
                        <li><a href="{{ route('admin.categories') }}">Категории<span class="fa fa-angle-down"></span></a>
                            <ul class="submenu">
                                <li><a href="{{ route('admin.categories') }}">Просмотреть</a></li>
                                <li><a href="{{ route('admin.categories.create') }}">Создать</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('admin.albums') }}">Альбомы<span class="fa fa-angle-down"></span></a>
                            <ul class="submenu">
                                <li><a href="{{ route('admin.albums') }}">Просмотреть</a></li>
                                <li><a href="{{ route('admin.albums.create') }}">Создать</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('admin.conferences') }}">Конференции<span class="fa fa-angle-down"></span></a>
                            <ul class="submenu">
                                <li><a href="{{ route('admin.conferences') }}">Просмотреть</a></li>
                                <li><a href="{{ route('admin.conferences.create') }}">Создать</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="{{ route('admin.schedule') }}" class="active">Расписание<span class="fa fa-angle-down"></span></a>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.schedule') }}">Просмотреть</a></li>
                        <li><a href="{{ route('admin.schedule.create') }}">Создать</a></li>
                        <li><a href="{{ route('admin.groups') }}">Группы<span class="fa fa-angle-down"></span></a>
                            <ul class="submenu">
                                <li><a href="{{ route('admin.groups') }}">Просмотреть</a></li>
                                <li><a href="{{ route('admin.groups.create') }}">Создать</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('admin.subjects') }}">Предметы<span class="fa fa-angle-down"></span></a>
                            <ul class="submenu">
                                <li><a href="{{ route('admin.subjects') }}">Просмотреть</a></li>
                                <li><a href="{{ route('admin.subjects.create') }}">Создать</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('admin.occupation') }}">Виды занятий<span class="fa fa-angle-down"></span></a>
                            <ul class="submenu">
                                <li><a href="{{ route('admin.occupation') }}">Просмотреть</a></li>
                                <li><a href="{{ route('admin.occupation.create') }}">Создать</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('admin.weeks') }}">Недели<span class="fa fa-angle-down"></span></a>
                            <ul class="submenu">
                                <li><a href="{{ route('admin.weeks') }}">Просмотреть</a></li>
                                <li><a href="{{ route('admin.weeks.create') }}">Создать</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('admin.graphics') }}">Графики<span class="fa fa-angle-down"></span></a>
                            <ul class="submenu">
                                <li><a href="{{ route('admin.graphics') }}">Просмотреть</a></li>
                                <li><a href="{{ route('admin.graphics.create') }}">Создать</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="{{ route('admin.users') }}" class="active">Пользователи<span class="fa fa-angle-down"></span></a>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.users') }}">Просмотреть всех</a></li>
                        <li><a href="{{ route('user') }}">Мой профиль</a></li>
                        <li><a href="{{ route('admin.lecturers') }}">Преподаватели<span class="fa fa-angle-down"></span></a>
                            <ul class="submenu">
                                <li><a href="{{ route('admin.lecturers') }}">Просмотреть</a></li>
                                <li><a href="{{ route('admin.lecturers.create') }}">Создать</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('admin.bests') }}">Лучшие студенты<span class="fa fa-angle-down"></span></a>
                            <ul class="submenu">
                                <li><a href="{{ route('admin.bests') }}">Просмотреть</a></li>
                                <li><a href="{{ route('admin.bests.create') }}">Добавить</a></li>
                                <li><a href="{{ route('admin.interviews') }}">Интервью</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('admin.socials') }}">Социальные сети<span class="fa fa-angle-down"></span></a>
                            <ul class="submenu">
                                <li><a href="{{ route('admin.socials') }}">Просмотреть</a></li>
                                <li><a href="{{ route('admin.socials.create') }}">Создать</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="" class="active">Администрирование<span class="fa fa-angle-down"></span></a>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.roles') }}">Роли<span class="fa fa-angle-down"></span></a>
                            <ul class="submenu">
                                <li><a href="{{ route('admin.roles') }}">Просмотреть</a></li>
                                <li><a href="{{ route('admin.roles.create') }}">Создать</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('admin.administration.edit') }}">Переменные среды</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
</header>
@yield('content')
<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.7/summernote.js"></script>
@yield('scripts')
<script>
    $(document).ready(function() {

        $('#body').summernote();

    });
</script>
</body>
</html>