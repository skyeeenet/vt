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
                    class="d-flex flex-column flex-xl-row justify-content-around align-items-center align-items-xl-start">
                <div class="__gallery flex-column justify-content-center align-items-center">
                    <div
                            class="row d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">
                        <a data-fancybox="gallery" href="../images/person.png">
                            <div style="background-image: url('../images/person.png');"
                                 class="card-gallery-container">
                            </div>
                        </a>
                        <a data-fancybox="gallery" href="../images/person.png">
                            <div style="background-image: url('../images/person.png');"
                                 class="card-gallery-container">
                            </div>
                        </a>
                        <a data-fancybox="gallery" href="../images/person.png">
                            <div style="background-image: url('../images/person.png');"
                                 class="card-gallery-container">
                            </div>
                        </a>
                    </div>
                    <div
                            class="row d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">
                        <a data-fancybox="gallery" href="../images/person.png">
                            <div style="background-image: url('../images/person.png');"
                                 class="card-gallery-container">
                            </div>
                        </a>
                        <a data-fancybox="gallery" href="../images/person.png">
                            <div style="background-image: url('../images/person.png');"
                                 class="card-gallery-container">
                            </div>
                        </a>
                        <a data-fancybox="gallery" href="../images/person.png">
                            <div style="background-image: url('../images/person.png');"
                                 class="card-gallery-container">
                            </div>
                        </a>
                    </div>
                    <div
                            class="row d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">
                        <a data-fancybox="gallery" href="../images/person.png">
                            <div style="background-image: url('../images/person.png');"
                                 class="card-gallery-container">
                            </div>
                        </a>
                        <a data-fancybox="gallery" href="../images/person.png">
                            <div style="background-image: url('../images/person.png');"
                                 class="card-gallery-container">
                            </div>
                        </a>
                        <a data-fancybox="gallery" href="../images/person.png">
                            <div style="background-image: url('../images/person.png');"
                                 class="card-gallery-container">
                            </div>
                        </a>
                    </div>
                    <div class="row d-flex flex-row justify-content-center mt-5 mb-5">
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
                        class="d-flex flex-column justify-content-center align-items-center align-items-xl-start mb-2 mb-lg-0">
                    <div class="mt-2 mb-2 alboomCategory recent-posts">
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