@extends('public.layouts.basic')

@section('title'){{$post['short']}} - ПГТУ - Кафедра Информатики@endsection
@section('description'){{$post['short'] . ' - '. $post->author['name']}}. ПГТУ - Кафедра Информатики@endsection

@section('content')
    <main>
        <section>
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="title">Объявления</h1>
                    <div class="d-flex flex-row justify-content-center specDoubledColorLine">
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 mx-3 mx-md-0">
                        <div class="row flex-column mt-4">
                            <p class="roboto18lt">{{$post['value']}}</p>
                            <div class="roboto14md d-flex mt-2">
                                <p> Дата: <span>{{$post->created_at}}</span></p>
                                <p class="ml-4">Автор: <span>{{$post->author['name']}}</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 d-flex flex-column align-items-center align-items-lg-start mb-5 mb-lg-0">
                        <div class="">
                            <form class="search-form m-0" action="{{route('searchads')}}" method="get">
                                    <span><input type="text" name="search" placeholder="Поиск..."><button
                                                type="submit">НАЙТИ</button></span>
                            </form>
                        </div>
                        <div class="d-flex flex-column mt-5 ml-0 ml-lg-4 recent-posts">
                            <h3>Недавние посты</h3>
                            @foreach(Page::getLatestNews() as $item)
                            <a href="/news/{{$item->id}}">{{$item->title}}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection