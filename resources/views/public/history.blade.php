@extends('public.layouts.basic')

@section('title')История кафедры - ПГТУ - Кафедра Информатики@endsection
@section('description')История кафедры информатики@endsection

@section('content')
    <main>
        <section>
            <div class="container">
                <div class="d-flex flex-column align-items-center mb-5 mt-5 mt-lg-0">
                    <div class="text-center">
                        <h1 class="title">История кафедры</h1>
                        <div class="d-flex flex-row justify-content-center specDoubledColorLine">
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="d-flex w-100 flex-column justify-content-center align-items-center d-lg-block mt-5">
                        <div class="float-none float-lg-right mb-5 mb-lg-0 mx-3"><img width="300px" height="400px" src="{{$image}}" alt=""></div>
                        <p class="roboto16lt">
                            {!! $text !!}
                        </p>
                    </div>
                </div>
                <div class="history_slick">
                    @foreach(Page::getSliderById(2)['images'] as $slide)
                        <div class="d-flex justify-content-center"><img src="{{$slide->image['url']}}" alt=""></div>
                    @endforeach
                </div>
                <div class="d-flex flex-column align-items-center mb-5 mt-5">
                    <p class="roboto16lt">
                        {!! Page::getTextById(5)['value'] !!}
                    </p>
                </div>
            </div>
        </section>
    </main>
@endsection