@extends('admin.layouts.app_admin')

@section('content')
<div class="container">
    <h2>Объявления</h2>
    <form action="{{route('admin.content.adverts.create')}}" method="post">
        {{csrf_field()}}
        <h3>Добавить объявление</h3>
        @if(Session::get('success') == 'true')
            <div class="alert-success d-flex justify-content-center pt-3 mb-4">
                <p>Пост отправлен на модерацию</p>
            </div>
        @endif
        <div class="d-flex justify-content-center">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="advertShort">Заголовок (выводится на главной странице)</label>
            <input type="text" class="form-control" id="advertShort" name="advertShort" required>
        </div>
        <div class="form-group">
            <label for="advertText">Содержание объявления</label>
            <input type="text" class="form-control" id="advertText" name="advertText" required>
        </div>
        <div class="form-group mt-2">
            <label for=""></label>
            <img src="{{ captcha_src() }}" alt="captcha" class="captcha-img" data-refresh-config="default"><a href="#" id="refresh"><small>обновить</small></a></p>
            <input class="form-control" type="text" name="captcha" placeholder="Ответ" required/>
        </div>
        <button type="submit" class="btn btn-primary mb-3">Добавить</button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th>Дата</th>
                <th>Автор</th>
                <th>Краткое описание</th>
                <th>Опубликовано</th>
                <th>Редактировать</th>
                <th>Удалить</th>
            </tr>
        </thead>
        <tbody>
            @forelse($adverts as $advert)
            <tr>
                <td>{{$advert->created_at}}</td>
                <td>{{$advert->author['name']}}<br>{{$advert->author['email']}}</td>
                <td>{{$advert->short}}</td>
                <td>{{$advert->is_show}}</td>
                <td><a class="btn btn-primary" href="{{route('admin.content.adverts').'/edit/'.$advert->id}}"><i class="far fa-edit"></i></a></td>
                <td>
                    <form action="{{route('admin.content.adverts').'/delete/'.$advert->id}}" method="post">
                        {{csrf_field()}}
                        <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td>Данные отсутствуют</td>
                <td>Данные отсутствуют</td>
                <td>Данные отсутствуют</td>
                <td>Данные отсутствуют</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    {{$adverts->links()}}
</div>
@endsection

@section('scripts')

    <script>
        $(document).ready(function () {
            $('.message a').click(function(e){
                e.preventDefault();
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