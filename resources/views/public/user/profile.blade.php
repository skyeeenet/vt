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
                            <a href="{{route('user.edit')}}" class="roboto18lt btn btn-primary">Редактировать профиль</a>
                        </div>
                        <p class="roboto18">{{$user->description}}</p>
                    </div>
                    <div class="col-xl-4 col-12 d-flex flex-column align-items-center d-xl-block">
                            <div><img style="max-width: 360px;max-height: 450px;" src="@if(is_null($user->image)) /images/noimage.png @else{{$user->image}} @endif" alt="" class="avatar"></div>
                        <div class="d-flex mt-3">
                            @forelse($socials as $social)
                                @if (!is_null($social->url))
                                <a class="mr-2" href="{{$social->url}}"><img width="35px" height="35px" src="{{\App\Models\Social::where('id', $social->social_id)->first()->image['url']}}" alt=""></a>
                                @endif
                            @empty
                            <p class="roboto18lt">Пользователь еще не добавил соц.сети</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection