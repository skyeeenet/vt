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
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/admin">Админ-панель <small>alpha</small> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Header
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('admin.header.text') }}">Редактирование текстов/изображений</a>
                        <a class="dropdown-item" href="{{ route('admin.header.menu') }}">Редактирование меню</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="content" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Наполнение
                    </a>
                    <div class="dropdown-menu" aria-labelledby="content">
                        <a class="dropdown-item" href="{{ route('admin.content.images') }}">Изображения</a>
                        <a class="dropdown-item" href="{{ route('admin.content.text') }}">Тексты</a>
                        <a class="dropdown-item" href="{{ route('admin.content.slider') }}">Настройка слайдеров</a>
                        <a class="dropdown-item" href="{{ route('admin.content.adverts') }}">Объявления</a>
                        <a class="dropdown-item" href="{{ route('admin.content.posts') }}">Новости</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="content" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Страницы
                    </a>
                    <div class="dropdown-menu" aria-labelledby="content">
                        <a class="dropdown-item" href="{{ route('admin.pages.index.index') }}">Главная</a>
                        <a class="dropdown-item" href="{{ route('admin.content.adverts') }}">Объявления</a>
                        <a class="dropdown-item" href="{{ route('admin.content.posts') }}">Новости</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="content" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Расписание
                    </a>
                    <div class="dropdown-menu" aria-labelledby="content">
                        <a class="dropdown-item" href="{{ route('admin.schedule') }}">Просмотреть</a>
                        <a class="dropdown-item" href="{{ route('admin.schedule.create') }}">Создать</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="content" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Группы
                    </a>
                    <div class="dropdown-menu" aria-labelledby="content">
                        <a class="dropdown-item" href="{{ route('admin.groups') }}">Просмотреть</a>
                        <a class="dropdown-item" href="{{ route('admin.groups.create') }}">Создать</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="content" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Предметы
                    </a>
                    <div class="dropdown-menu" aria-labelledby="content">
                        <a class="dropdown-item" href="{{ route('admin.subjects') }}">Просмотреть</a>
                        <a class="dropdown-item" href="{{ route('admin.subjects.create') }}">Создать</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="content" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Недели
                    </a>
                    <div class="dropdown-menu" aria-labelledby="content">
                        <a class="dropdown-item" href="{{ route('admin.weeks') }}">Просмотреть</a>
                        <a class="dropdown-item" href="{{ route('admin.weeks.create') }}">Создать</a>
                    </div>
                </li>
            </ul>
        </div>
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