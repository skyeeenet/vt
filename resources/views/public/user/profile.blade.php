@extends('public.layouts.basic')

@section('content')
    <main>
        <section>
            <div class="container">
                <div class="text-center mb-5">
                    <h1 class="title">
                        Профиль пользователя
                    </h1>
                    <div class="d-flex flex-row justify-content-center specDoubledColorLine">
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <p class="text-center mb-5 roboto24">Добро пожаловать, {{$user->name}}</p>
                <div class="row flex-column-reverse flex-xl-row">
                    <div class="col-xl-8 col-12 mt-5 mt-xl-0">
                        <div class="d-flex justify-content-between mb-3">
                            <b class="roboto24">О себе</b>
                            <a href="{{route('user.edit')}}" class="roboto18lt">Изменить</a>
                        </div>
                        <p class="roboto18">{{$user->description}}</p>
                    </div>
                    <div class="col-xl-4 col-12 d-flex flex-column align-items-center d-xl-block">
                        <form action="{{route('user.update')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div><img style="max-width: 360px;max-height: 450px;" src="{{$user->image}}" alt="" class="avatar">
                                <div class="d-flex justify-content-around mt-3">
                                    <div class="custom-file" style="width: 200px;">
                                        <input type="file" class="custom-file-input" id="customFile" name="image">
                                        <label class="custom-file-label" for="customFile">Изменить</label>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Применить</button>
                                </div>
                                <p class="text-center mt-3"><a href="#" class="text-danger roboto18lt">Удалить</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection