@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">
        <div class="jumbotron d-flex flex-column align-items-center">
            <form action="{{ route('admin.header.text.update') }}" enctype="multipart/form-data" method="post">
                {{ csrf_field() }}
                <h2>Редактировать контакты: </h2>
                <p>Местонахождение: <input type="text" name="place" value="@isset($arr['place']) {{ $arr['place'] }} @endisset"></p>
                <p>Email: <input type="email" name="email" value="@isset($arr['email']) {{ $arr['email'] }} @endisset"></p>
                <p>Телефон: <input type="text" name="phone" value="@isset($arr['phone']) {{ $arr['phone'] }} @endisset"></p>
                <h2>Редактировать логотип: </h2>
                <p>Надпись: <input type="text" name="logo-text" value="@isset($arr['logo-text']) {{ $arr['logo-text'] }} @endisset"></p>
                <p>Текущий: <img src="@isset($arr['logo']) {{ $arr['logo'] }} @endisset" style="max-width: 100px; max-height: 100px;" alt="Логотип"></p>
                <p>Новый: <input type="file" id="file" name="logo"></p>
                <ul id="list" style="list-style: none;"></ul>
                <div>
                    <input class="btn btn-primary" type="submit">
                    <a class="btn btn-secondary" href="{{ route('admin.header.text') }}">Отмена</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        function showFile(e) {
            var files = e.target.files;
            for (var i = 0, f; f = files[i]; i++) {
                if (!f.type.match('image.*')) continue;
                var fr = new FileReader();
                fr.onload = (function(theFile) {
                    return function(e) {
                        var li = document.createElement('li');
                        li.innerHTML = "<img style='max-width:100px;max-height:100px;' src='" + e.target.result + "' />";
                        document.getElementById('list').insertBefore(li, null);
                    };
                })(f);

                fr.readAsDataURL(f);
            }
        }
        document.getElementById('file').addEventListener('change', showFile, false);
    </script>
@endsection