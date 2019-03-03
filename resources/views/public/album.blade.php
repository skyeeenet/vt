@extends('public.layouts.basic')

@section('styles')
    <link rel="stylesheet" type="text/css" media="screen" href="/css/jquery.fancybox.min.css" />
@endsection

@section('content')
    <main>
        <div class="container">
            <div class="text-center my-5">
                <h1 class="title">Альбом</h1>
                <div class="d-flex flex-row justify-content-center specDoubledColorLine">
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div
                    class="d-flex flex-column-reverse flex-xl-row justify-content-around align-items-center align-items-xl-start">
                <div class="flex-column justify-content-center align-items-center">
                    <!-- ROW 1 -->
                    <div class="d-flex flex-column flex-md-row justify-content-center align-items-center">
                        <div
                                class="d-flex flex-row flex-md-column justify-content-between align-items-center alboomSmallPhotoRow">
                            <a data-fancybox="gallery" href="../images/Прямоугольник 5.png">
                                <!-- preview -->
                                <img src="../images/Прямоугольник 5.png" alt="gallery_photo">
                            </a>
                            <a data-fancybox="gallery" href="../images/Прямоугольник 5.png">
                                <!-- preview -->
                                <img src="../images/Прямоугольник 5.png" alt="gallery_photo">
                            </a>
                        </div>
                        <!-- /.alboomSmallPhotoRow -->
                        <div
                                class="d-flex flex-row flex-md-column justify-content-between align-items-center alboomSmallPhotoRow">
                            <a data-fancybox="gallery" href="../images/Прямоугольник 5.png">
                                <!-- preview -->
                                <img src="../images/Прямоугольник 5.png" alt="gallery_photo">
                            </a>
                            <a data-fancybox="gallery" href="../images/Прямоугольник 5.png">
                                <!-- preview -->
                                <img src="../images/Прямоугольник 5.png" alt="gallery_photo">
                            </a>
                        </div>
                        <!-- /.alboomSmallPhotoRow -->
                        <div class="alboomBigPhoto">
                            <a data-fancybox="gallery" href="../images/Прямоугольник 5 копия 5.png">
                                <!-- preview -->
                                <img src="../images/Прямоугольник 5 копия 5.png" alt="gallery_photo">
                            </a>
                        </div>
                        <!-- /.alboomBigPhoto -->
                    </div>
                    <!-- /.d-flex flex-column justify-content-center align-items-center -->
                    <!-- ROW 1 END -->
                    <!-- ROW 2 -->
                    <div class="d-flex flex-column flex-md-row-reverse justify-content-center align-items-center">
                        <div
                                class="d-flex flex-row flex-md-column justify-content-between align-items-center alboomSmallPhotoRow">
                            <a data-fancybox="gallery" href="../images/Прямоугольник 5.png">
                                <!-- preview -->
                                <img src="../images/Прямоугольник 5.png" alt="gallery_photo">
                            </a>
                            <a data-fancybox="gallery" href="../images/Прямоугольник 5.png">
                                <!-- preview -->
                                <img src="../images/Прямоугольник 5.png" alt="gallery_photo">
                            </a>
                        </div>
                        <!-- /.alboomSmallPhotoRow -->
                        <div
                                class="d-flex flex-row flex-md-column justify-content-between align-items-center alboomSmallPhotoRow">
                            <a data-fancybox="gallery" href="../images/Прямоугольник 5.png">
                                <!-- preview -->
                                <img src="../images/Прямоугольник 5.png" alt="gallery_photo">
                            </a>
                            <a data-fancybox="gallery" href="../images/Прямоугольник 5.png">
                                <!-- preview -->
                                <img src="../images/Прямоугольник 5.png" alt="gallery_photo">
                            </a>
                        </div>
                        <!-- /.alboomSmallPhotoRow -->
                        <div class="alboomBigPhoto">
                            <a data-fancybox="gallery" href="../images/Прямоугольник 5 копия 5.png">
                                <!-- preview -->
                                <img src="../images/Прямоугольник 5 копия 5.png" alt="gallery_photo">
                            </a>
                        </div>
                        <!-- /.alboomBigPhoto -->
                    </div>
                    <!-- /.d-flex flex-column justify-content-center align-items-center -->
                    <!-- ROW 2 END -->
                    <div class="row d-flex justify-content-center mt-5 mb-5">
                        <div class="pagination roboto18lt">
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
                <div
                        class="d-flex flex-column justify-content-center align-items-center align-items-xl-start mb-4 mb-lg-0">
                    <div class="row mt-5">
                        <form class="search-form m-0" action="#" method="get">
                                <span><input type="text" placeholder="Поиск..."><button
                                            type="submit">НАЙТИ</button></span>
                        </form>
                    </div>
                    <div class="row mt-5 d-flex flex-column justify-content-start align-items-start alboomCategory">
                        <h3>Категории</h3>
                        <a href="#">Категория 1</a>
                        <a href="#">Категория 2</a>
                        <a href="#">Категория 3</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('scripts')
    <script src="{{ asset('scripts/additional/jquery.fancybox.min.js') }}"></script>
@endsection