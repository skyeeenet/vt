@extends('public.layouts.basic')

@section('title'){{$post['title']}} - ПГТУ - Кафедра Информатики@endsection
@section('description'){{$post['short_body']}}@endsection

@section('content')
    <main>
        <section>
            <div class="container">
                <div class="text-center my-5">
                    <h2 class="title">Новости</h2>
                    <div class="d-flex flex-row justify-content-center specDoubledColorLine">
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <div class="row">
                    <div class="mx-3 mx-md-0 col-lg-8 col-md-12">
                            <div class="row news-post mb-5">
                                <div class="news-post-inner">
                                    @isset($post->image['url']) <img src="{{$post->image['url']}}" alt=""> @endif
                                    <a href="/news/{{$post->id}}">
                                        <h2 class="link second-title">{{$post['title']}}</h2>
                                    </a>
                                    <div class="d-md-block d-flex flex-column">
                                        <span class="span-with-line mr-3">Дата: <span class="color_cont">{{$post['created_at']}}</span></span>
                                        <span class="ml-md-3 ml-0">Автор: <span class="color_cont">{{$post->author['name']}}</span></span>
                                    </div>
                                    <p class="roboto16 mt-3">
                                        {!! $post->body !!}
                                    </p>
                                </div>
                            </div>
                    </div>
                    <div
                            class="col-lg-4 col-md-12 d-flex flex-column align-items-center align-items-lg-start mb-5 mb-lg-0">
                        <div class="d-none d-lg-block">
                            <form class="search-form m-0" action="#" method="get">
                                    <span><input type="text" placeholder="Поиск..."><button
                                                type="submit">НАЙТИ</button></span>
                            </form>
                        </div>
                        <div class="d-flex flex-column mt-2 mt-lg-5 ml-0 ml-lg-4 recent-posts">
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