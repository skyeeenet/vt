@extends('public.layouts.basic')

@section('title')Поиск - ПГТУ - Кафедра Информатики@endsection
@section('description')Результаты поиска. ПГТУ - Кафедра информатики@endsection

@section('content')
    <main>
        <section>
            <div class="container">
                <div class="text-center">
                    <h1 class="title">Результаты поиска</h1>
                    <div class="d-flex flex-row justify-content-center specDoubledColorLine">
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        @forelse($posts_arr as $post)
                        <div class="row news-post mt-5">
                            <div class="news-post-inner">
                                <img src="{{$post->image['url']}}" alt="">
                                <a href="{{$post['id']}}">
                                    <h2>{{$post['title']}}</h2>
                                </a>
                                <span class="span-with-line mr-3">{{$post->created_at}}</span>
                                <span class="ml-3">{{$post->author['name']}}</span>
                                <p class="">
                                    {{$post['short_body']}}
                                </p>
                            </div>
                        </div>
                        @empty
                            <p>Записи не найдены</p>
                        @endforelse
                        @isset($ads_arr)
                            @foreach($ads_arr as $ad)
                                <div class="row news-post mt-5">
                                    <div class="news-post-inner">
                                        <a href="{{$ad['id']}}">
                                            <h2>{{$ad['short']}}</h2>
                                        </a>
                                        <p>{{$ad['value']}}</p>
                                        <span class="span-with-line mr-3">{{$ad->created_at}}</span>
                                        <span class="ml-3">{{$ad->author['name']}}</span>
                                    </div>
                                </div>
                            @endforeach
                            @endisset
                    </div>
                    <div class="col-lg-4 col-md-12 d-flex flex-column align-items-center">
                        <div class="row mt-5">
                            <form class="search-form" action="{{route('search')}}" method="get">
                                    <span><input name="search" type="text" placeholder="Поиск..."><button
                                                type="submit">НАЙТИ</button></span>
                            </form>
                        </div>
                        <div class="row mt-5 d-md-flex flex-md-column align-self-start ml-md-3 recent-posts">
                            <h3>Недавние посты</h3>
                            <a href="#">Заголовок поста номер один</a>
                            <a href="#">Заголовок поста номер два</a>
                            <a href="#">Заголовок поста номер три</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>
@endsection