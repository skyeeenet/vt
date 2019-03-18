@extends('public.layouts.basic')

@section('content')
    <main>
        <section>
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="title">Новости</h1>
                    <div class="d-flex flex-row justify-content-center specDoubledColorLine">
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <div class="row">
                    <div class="mx-3 mx-md-0 col-lg-8 col-md-12">
                        <div class="row news-post mb-5">
                            <div class="news-post-inner">
                                <img src="../images/photo.png" alt="">
                                <a href="#">
                                    <h2 class="link second-title">Заголовок номер один</h2>
                                </a>
                                <div class="d-md-block d-flex flex-column">
                                    <span class="span-with-line mr-3">Дата: <span class="color_cont">Июнь 13, 2019</span></span>
                                    <span class="ml-md-3 ml-0">Автор: <span class="color_cont">Иванов Иван</span></span>
                                </div>
                                <p class="roboto16 mt-3">
                                    There are many variations of passages of Lorem Ipsum available, but the
                                    majority have suffered altera
                                    tion in some form, by injected humour, or randomised words which don’t look
                                    even slightly believable.
                                    If you are going to use a passage of Lorem Ipsum, you need to be sure there
                                    isn’t anything embarrassi
                                    ng hidden in the middle of text.
                                </p>
                            </div>
                        </div>
                        <div class="row news-post mb-5">
                            <div class="news-post-inner">
                                <img src="../images/photo.png" alt="">
                                <a href="#">
                                    <h2 class="link second-title">Заголовок номер один</h2>
                                </a>
                                <div class="d-md-block d-flex flex-column">
                                    <span class="span-with-line mr-3">Дата: <span class="color_cont">Июнь 13, 2019</span></span>
                                    <span class="ml-md-3 ml-0">Автор: <span class="color_cont">Иванов Иван</span></span>
                                </div>
                                <p class="roboto16 mt-3">
                                    There are many variations of passages of Lorem Ipsum available, but the
                                    majority have suffered altera
                                    tion in some form, by injected humour, or randomised words which don’t look
                                    even slightly believable.
                                    If you are going to use a passage of Lorem Ipsum, you need to be sure there
                                    isn’t anything embarrassi
                                    ng hidden in the middle of text.
                                </p>
                            </div>
                        </div>
                        <div class="row news-post mb-5">
                            <div class="news-post-inner">
                                <img src="../images/photo.png" alt="">
                                <a href="#">
                                    <h2 class="link second-title">Заголовок номер один</h2>
                                </a>
                                <div class="d-md-block d-flex flex-column">
                                    <span class="span-with-line mr-3">Дата: <span class="color_cont">Июнь 13, 2019</span></span>
                                    <span class="ml-md-3 ml-0">Автор: <span class="color_cont">Иванов Иван</span></span>
                                </div>
                                <p class="roboto16 mt-3">
                                    There are many variations of passages of Lorem Ipsum available, but the
                                    majority have suffered altera
                                    tion in some form, by injected humour, or randomised words which don’t look
                                    even slightly believable.
                                    If you are going to use a passage of Lorem Ipsum, you need to be sure there
                                    isn’t anything embarrassi
                                    ng hidden in the middle of text.
                                </p>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center my-5">
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