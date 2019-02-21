@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <p class="mt-3">Имя пользователя: {{$user->name}}</p>
        <p>Email: {{$user->email}}</p>
        @if($user->image == null)
            <div>
                <p>Загрузить изображение профиля ?</p>
                <form enctype="multipart/form-data" action="{{route('user.update')}}" method="post">
                    {{csrf_field()}}
                    <p>Новый: <input type="file" id="file" name="image"></p>
                    <ul id="list" style="list-style: none;"></ul>
                    <button class="btn btn-primary" type="submit">Загрузить</button>
                </form>
            </div>
        @else
            <div>
                <img width="400px" src="{{'/storage/profile_images/'.$user->image}}" alt="">
                <p>Обновить изображение профиля ?</p>
                <form enctype="multipart/form-data" action="{{route('user.update')}}" method="post">
                    {{csrf_field()}}
                    <p>Новый: <input type="file" id="file" name="image"></p>
                    <ul id="list" style="list-style: none;"></ul>
                    <button class="btn btn-primary" type="submit">Обновить</button>
                </form>
            </div>
        @endif
        <p class="mt-3">О себе: </p>
        @if($user->description == null)
            <p>Добавить информацию о себе ?</p>
            <form action="{{route('user.update')}}" method="post">
                {{csrf_field()}}
                <textarea name="description" id="description" cols="45" rows="10"></textarea>
                <button class="btn btn-primary" type="submit">Добавить</button>
            </form>
        @else
            <p>{{$user->description}}</p>
            <p>Обновить информацию о себе ?</p>
            <form action="{{route('user.update')}}" method="post">
                {{csrf_field()}}
                <textarea name="description" id="description" cols="45" rows="10"></textarea>
                <button class="btn btn-primary" type="submit">Обновить</button>
            </form>
        @endif
    </div>
@endsection

@section('scripts')
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