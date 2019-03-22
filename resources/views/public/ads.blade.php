@extends('public.layouts.basic')

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
                        @foreach($posts_arr as $post)
                        <div class="row flex-column mt-4">
                            <a class="second-text" href="/ads/{{$post->id}}"><p class="roboto18lt">{{$post['short']}}</p></a>
                            <div class="roboto14md d-flex mt-2">
                                <p> Дата: <span>{{$post->created_at}}</span></p>
                                <p class="ml-4">Автор: <span>{{$post->author['name']}}</span></p>
                            </div>
                        </div>
                        @endforeach
                        @if(gettype($posts_arr) != "array")
                        <div class="row d-flex justify-content-center my-5">
                             {{$posts_arr->links()}}
                        </div>
                        @endif
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