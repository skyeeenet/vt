@extends('public.layouts.basic')

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
                        @forelse($posts as $post)
                        <div class="row news-post mt-5">
                            <div class="news-post-inner">
                                <img src="../images/photo.png" alt="">
                                <a href="#">
                                    <h2>{{$post['title']}}</h2>
                                </a>
                                <span class="span-with-line mr-3">Дата: Июнь 13, 2019</span>
                                <span class="ml-3">Автор: Иванов Иван</span>
                                <p class="">
                                    {{$post['short_body']}}
                                </p>
                            </div>
                        </div>
                        @empty
                            <p>Записи не найдены</p>
                        @endforelse


                        <div class="row d-flex justify-content-center mt-5 mb-5">
                            <div class="pagination">
                                <a href="#">&laquo;</a>
                                <a href="#">1</a>
                                <a class="active" href="#">2</a>
                                <a href="#">3</a>
                                <a href="#">4</a>
                                <a href="#">5</a>
                                <a href="#">6</a>
                                <a href="#">&raquo;</a>
                            </div>
                        </div>
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