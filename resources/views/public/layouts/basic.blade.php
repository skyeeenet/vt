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
</head>

<body>
@yield('content')
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
</body>
</html>