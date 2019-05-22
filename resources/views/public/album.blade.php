@extends('public.layouts.basic')

@section('title')Альбом - ПГТУ - Кафедра Информатики@endsection
@section('description')Альбом различных метоприятий. ПГТУ - Кафедра информатики@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" media="screen" href="/css/jquery.fancybox.min.css" />
@endsection

@section('content')
    <main>
        <div class="container-fluid">
            <div class="text-center my-5">
                <h1 class="title">Альбом</h1>
                <div class="d-flex flex-row justify-content-center specDoubledColorLine">
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-12 row no-gutters">
                    @foreach($urls as $url)
                    <a class="col-lg-4 col-md-6 d-flex justify-content-center" data-fancybox="gallery" href="{{$url}}">
                        <div style="background-image: url('{{$url}}');"
                             class="card-gallery-container">
                        </div>
                    </a>
                    @endforeach
                </div>
                <aside class="d-flex flex-column col-lg-2 justify-content-start align-items-center align-items-xl-start mb-2 mb-lg-0">
                    <div class="mt-2 mb-2 alboomCategory recent-posts">
                        <h3>Категории</h3>
                        @foreach(Page::getCategories() as $category)
                        <a href="{{'/album/category/'.$category->id}}">{{$category->value}}</a>
                        @endforeach
                    </div>
                </aside>
            </div>
            @isset($images)
            <div class="d-flex justify-content-center mt-3">
                {{ $images->links() }}
            </div>
            @endisset
        </div>
    </main>
@endsection

@section('scripts')
    <script src="{{ asset('scripts/additional/jquery.fancybox.min.js') }}"></script>
@endsection