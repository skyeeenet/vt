@extends('public.layouts.basic')

@section('title')Предложить объявление - ПГТУ - Кафедра Информатики@endsection

@section('description')На этой странице вы можете предложить свое объявление, которое увидят все пользователи. ПГТУ - Кафедра Информатики@endsection

@section('content')
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
    <div class="d-flex justify-content-center">
        <form class="form-group col-md-6" method="post" action="{{route('admin.content.adverts.create')}}">
            @csrf
            <label for="advertShort">Заголовок (отображается на главной странице)</label>
            <input id="advertShort" class="form-control" type="text" name="advertShort" required value="{{ old('advertShort') }}">
            <label for="advertText">Содержание</label>
            <textarea class="form-control" name="advertText" id="advertText" cols="30" rows="10" required>{{ old('advertText') }}</textarea>
            <div class="form-group mt-2">
                <label for=""></label>
                <img src="{{ captcha_src() }}" alt="captcha" class="captcha-img" data-refresh-config="default"><a href="#" id="refresh"><small>обновить</small></a></p>
                <input class="form-control" type="text" name="captcha" placeholder="Ответ" required/>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Отправить</button>
        </form>
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