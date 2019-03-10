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
                        <form class="w-100 d-flex flex-column" action="{{route('user.update')}}" method="post">
                            @csrf
                            <div class="d-flex justify-content-between mb-3">
                                <b class="roboto24">О себе</b>
                                <button type="submit" class="btn btn-primary">Обновить</button>
                            </div>
                            <div class="form-group">
                                <label for="name">Редактировать имя</label>
                                <input class="form-control" type="text" value="{{$user->name}}" name="name">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="description" cols="100" rows="10">{{$user->description}}</textarea>
                            </div>
                            <p class="roboto18lt">Email: <b>{{$user->email}}</b></p>
                            <div class="d-flex flex-column">
                                @foreach($socials as $social)
                                    <div class="form-group">
                                        <label for="name">{{$social->value}}</label>
                                        <p class="d-flex"><img class="mr-2" width="35px" height="35px" src="{{$social->image['url']}}" alt=""><span>{{$social->url}}</span><input placeholder="id" class="form-control" type="text" value="{{str_replace($social->url,'',\App\Models\SocialUser::where([
                                        'user_id' => $user->id,
                                        'social_id' => $social->id
                                        ])->first()['url']) }}" name="{{$social->value}}"></p>
                                    </div>
                                @endforeach
                            </div>
                        </form>
                    </div>
                    <div class="col-xl-4 col-12 d-flex flex-column align-items-center d-xl-block">
                        <form action="{{route('user.update')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div><img style="max-width: 360px;max-height: 450px;" src="@if(is_null($user->image)) /images/noimage.png @else{{$user->image}} @endif" alt="" class="avatar">
                                <div class="w-100 mt-3 mb-3">
                                    <div class="custom-file" style="width: 96%;">
                                        <input type="file" class="custom-file-input" id="customFile" name="image">
                                        <label class="custom-file-label" for="customFile">Обзор...</label>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center w-100">
                                    <button class="btn btn-primary w-100" type="submit">Загрузить</button>
                                </div>
                            </div>
                        </form>
                        <form class="d-flex justify-content-center w-100 mt-2" action="{{route('user.delete')}}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger w-100">Удалить</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection