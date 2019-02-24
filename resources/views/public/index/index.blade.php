@extends('public.layouts.basic')

@section('content')
<div class="MAINBOX">
    <header>
        <div class="container-fluid topHeader">
            <div class="container">
                <div
                        class="d-flex flex-row justify-content-around justify-content-md-between align-items-center pt-3 pb-3 pt-lg-2 pb-lg-2">
                    <div
                            class="d-flex flex-column flex-sm-row justify-content-center align-items-center currentWeek">
                        <div>Текущая&nbsp;неделя:&nbsp;</div>
                        <div>Четная</div>
                    </div>
                    <!-- /.currentWeek -->
                    <div
                            class="d-flex flex-column flex-md-row justify-content-around align-items-start align-items-md-center contactsTopHeader">
                        <div class="mt-md-0 mt-md-0 ml-3"><img src="./images/placeholder.svg" heigth="20px"
                                                               width="20px" alt="position"><span class="pl-2">Мариуполь</span></div>
                        <div class="mt-2 mt-md-0 ml-3"><img src="./images/email.svg" heigth="20px" width="20px"
                                                            alt="mail"><span class="pl-2">test@gmail.com</span></div>
                        @if(Auth::guest()) <div class="mt-2 mt-md-0 ml-3">
                            <img src="{{ asset('images/login.svg') }}" height="20px" width="20px" alt="registration"><a
                                    class="btn-reg ml-2" href="/register">Регистрация</a>
                        </div>
                        @else
                            <div class="mt-2 mt-md-0 ml-3">
                                <img src="{{ asset('images/login.svg') }}" height="20px" width="20px" alt="registration"><a
                                        class="btn-reg ml-2" href="/admin">Админ-панель</a>
                            </div>
                        @endif
                    </div>
                    <!-- /.contactsTopHeader -->
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
            <div class="container">
                <div class="col-md-4">
                    <a class="ml-2 navbar-brand" href="#">LOGO</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="col-md-10 collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active mr-md-3">
                            <a class="nav-link" href="#">Главная <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown mr-md-3">
                            <a class="nav-link dropdown-toggle" href="#" id="enrollee" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                абитуриенту
                            </a>
                            <div class="dropdown-menu" aria-labelledby="enrollee">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown mr-md-3">
                            <a class="nav-link dropdown-toggle" href="#" id="student" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                студенту
                            </a>
                            <div class="dropdown-menu" aria-labelledby="student">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown mr-md-3">
                            <a class="nav-link dropdown-toggle" href="#" id="department" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                кафедра
                            </a>
                            <div class="dropdown-menu" aria-labelledby="department">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Контакты</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section>
            <div class="container mt-3">
                <div class="row">
                    <div class="col-lg-8 slck vit_index">
                        <div class="sliderBLock card">
                            <div class="d-flex flex-column justify-content-center align-items-center ">
                            </div>
                        </div>
                        <div class="sliderBLock card">
                            <div class="d-flex flex-column justify-content-center align-items-center ">
                            </div>
                        </div>
                        <div class="sliderBLock card">
                            <div class="d-flex flex-column justify-content-center align-items-center ">
                            </div>
                        </div>
                    </div>
                    <!-- /.col-lg-8 -->
                    <div class="col-lg-4 declaration">
                        <div class="text-center pt-3 pb-2 declarationHead">
                            Объявления
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-center declaration-text">
                            <p> Недавние события повлекли за собой массу протестов1 </p>
                            <p> Недавние события повлекли за собой массу протестов2 </p>
                            <p> Недавние события повлекли за собой массу протестов3 </p>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a class="link" href="#">Все объявления</a>
                        </div>
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container.mt-3.mb-3 -->
        </section>
        <section>
            <div class="container mt-5">
                <div class="w-100 d-flex flex-column align-items-center margin-bottom">
                    <a href="#">
                        <h2 class="title link">Недавние новости и события</h2>
                    </a>
                    <div class="d-flex flex-row justify-content-center specDoubledColorLine mt-2">
                        <div></div>
                        <div></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                        <div class="card">
                            <img class="card-img-top" src="./images/img.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-date">Апрель 17, 2018</h5>
                                <h5 class="mt-3"><a class="card-title" href="#">Заголовок новости</a></h5>
                                <p class="card-text mt-4">
                                    Краткое описание новости свозможностью
                                    перехода на страницус более детальным
                                    описанием...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                        <div class="card">
                            <img class="card-img-top" src="./images/img.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-date">Апрель 17, 2018</h5>
                                <h5 class="mt-3"><a class="card-title" href="#">Заголовок новости</a></h5>
                                <p class="card-text mt-4">
                                    Краткое описание новости свозможностью
                                    перехода на страницус более детальным
                                    описанием...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                        <div class="card">
                            <img class="card-img-top" src="./images/img.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-date">Апрель 17, 2018</h5>
                                <h5 class="mt-3"><a class="card-title" href="#">Заголовок новости</a></h5>
                                <p class="card-text mt-4">
                                    Краткое описание новости свозможностью
                                    перехода на страницус более детальным
                                    описанием...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-md-5 mt-sm-5 mt-5 mt-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="./images/img.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-date">Апрель 17, 2018</h5>
                                <h5 class="mt-3"><a class="card-title" href="#">Заголовок новости</a></h5>
                                <p class="card-text mt-4">
                                    Краткое описание новости свозможностью
                                    перехода на страницус более детальным
                                    описанием...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-md-5 mt-sm-5 mt-5 mt-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="./images/img.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-date">Апрель 17, 2018</h5>
                                <h5 class="mt-3"><a class="card-title" href="#">Заголовок новости</a></h5>
                                <p class="card-text mt-4">
                                    Краткое описание новости свозможностью
                                    перехода на страницус более детальным
                                    описанием...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-md-5 mt-sm-5 mt-5 mt-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="./images/img.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-date">Апрель 17, 2018</h5>
                                <h5 class="mt-3"><a class="card-title" href="#">Заголовок новости</a></h5>
                                <p class="card-text mt-4">
                                    Краткое описание новости свозможностью
                                    перехода на страницус более детальным
                                    описанием...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-12 d-flex justify-content-center">
                        <a class="btn btn-main" href="">Больше новостей</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="pb-5">
            <div class="container mt-5">
                <div class="w-100 d-flex flex-column align-items-center pt-5 mb-3">
                    <h2 class="title">Почему именно мы ?</h2>
                    <div class="d-flex flex-row justify-content-center specDoubledColorLine mt-2">
                        <div></div>
                        <div></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-5 mt-sm-5 mt-md-0 mt-lg-4">
                        <div class="adv-item d-flex flex-column align-items-center">
                            <img class="pt-3" src="./images/service-1.png" alt="">
                            <div class="p-3">
                                <h2 class="card-title t-transf-cap adv-title text-center">Заголовок номер 1</h2>
                                <p class="adv-main-text">
                                    Описание преимущества описание
                                    преимущества описание преисущества
                                    описание преимущества
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-5 mt-sm-5 mt-md-0 mt-lg-4">
                        <div class="adv-item d-flex flex-column align-items-center">
                            <img class="pt-3" src="./images/service-1.png" alt="">
                            <div class="p-3">
                                <h2 class="card-title t-transf-cap adv-title text-center">Заголовок номер 1</h2>
                                <p class="adv-main-text">
                                    Описание преимущества описание
                                    преимущества описание преисущества
                                    описание преимущества
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-md-5 mt-sm-5 mt-5 mt-lg-4">
                        <div class="adv-item d-flex flex-column align-items-center">
                            <img class="pt-3" src="./images/service-1.png" alt="">
                            <div class="p-3">
                                <h2 class="card-title t-transf-cap adv-title text-center">Заголовок номер 1</h2>
                                <p class="adv-main-text">
                                    Описание преимущества описание
                                    преимущества описание преисущества
                                    описание преимущества
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-md-5 mt-sm-5 mt-5 mt-lg-4">
                        <div class="adv-item d-flex flex-column align-items-center">
                            <img class="pt-3" src="./images/service-1.png" alt="">
                            <div class="p-3">
                                <h2 class="card-title t-transf-cap adv-title text-center">Заголовок номер 1</h2>
                                <p class="adv-main-text">
                                    Описание преимущества описание
                                    преимущества описание преисущества
                                    описание преимущества
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-md-5 mt-sm-5 mt-5 mt-lg-4">
                        <div class="adv-item d-flex flex-column align-items-center">
                            <img class="pt-3" src="./images/service-1.png" alt="">
                            <div class="p-3">
                                <h2 class="card-title t-transf-cap adv-title text-center">Заголовок номер 1</h2>
                                <p class="adv-main-text">
                                    Описание преимущества описание
                                    преимущества описание преисущества
                                    описание преимущества
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt-md-5 mt-sm-5 mt-5 mt-lg-4">
                        <div class="adv-item d-flex flex-column align-items-center">
                            <img class="pt-3" src="./images/service-1.png" alt="">
                            <div class="p-3">
                                <h2 class="card-title t-transf-cap adv-title text-center">Заголовок номер 1</h2>
                                <p class="adv-main-text">
                                    Описание преимущества описание
                                    преимущества описание преисущества
                                    описание преимущества
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="w-100 d-flex flex-column align-items-center mt-5">
                <h2 class="title">Лучшие студенты</h2>
                <div class="d-flex flex-row justify-content-center specDoubledColorLine mt-2">
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="container mt-5">
                <div id="thebest">
                    <div class="thebest-container pt-5 pb-5">
                        <img src="images/best.jpeg" alt="">
                        <a class="d-block mt-3" href="">
                            <h3>Иванов Иван</h3>
                        </a>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="thebest-container pt-5 pb-5">
                        <img src="images/best.jpeg" alt="">
                        <a class="d-block mt-3" href="">
                            <h3>Иванов Иван</h3>
                        </a>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="thebest-container pt-5 pb-5">
                        <img src="images/best.jpeg" alt="">
                        <a class="d-block mt-3" href="">
                            <h3>Иванов Иван</h3>
                        </a>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="thebest-container pt-5 pb-5">
                        <img src="images/best.jpeg" alt="">
                        <a class="d-block mt-3" href="">
                            <h3>Иванов Иван</h3>
                        </a>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="vit_footer_container margin-top">
            <div class="container pt-5 pb-5 vit_footer_container">
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <div class="nav flex-column align-items-start">
                            <p class="vit_foot_main_text">последние обновления</p>
                            <p class="vit_foot_text">текст 1</p>
                            <p class="vit_foot_text">текст 1</p>
                            <p class="vit_foot_text">текст 1</p>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <div class="nav flex-column align-items-start">
                            <p class="vit_foot_main_text">последние обновления</p>
                            <p class="vit_foot_text">текст 1</p>
                            <p class="vit_foot_text">текст 1</p>
                            <p class="vit_foot_text">текст 1</p>
                        </div>
                    </div>
                    <div class="col d-flex  justify-content-center">
                        <form class="search-form m-0" action="#" method="get">
                                <span class="bg-white"><input type="text" placeholder="Поиск..."><button
                                            type="submit">НАЙТИ</button></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection