@extends('public.layouts.basic')

@section('content')
    <main>
        <section>
            <div class="container mt-3">
                <div class="row">
                    <div class="col-lg-8 slck vit_index">
                        @foreach(Page::getSliderById(1)['images'] as $slide)
                        <div class="sliderBLock" style="background-image: url('{{$slide->image['url']}}');">
                            <div class="d-flex flex-column justify-content-center align-items-center ">
                            </div>
                        </div>
                        @endforeach
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
                    @foreach(Page::getLatestNews() as $new)
                    <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                        <div style="height: 400px;" class="card">
                            <img style="height: 200px;" class="card-img-top" src="{{$new->image['url']}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-date">{{$new->created_at}}</h5>
                                <h5 class="mt-3"><a class="card-title" href="{{'/news/'.$new->id}}">{{$new->title}}</a></h5>
                                <p class="card-text mt-4">
                                    {{$new->short_body . '...'}}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
                    <?php $bests = Page::getBests(); ?>
                    @foreach($bests as $best)
                        <div class="thebest-container pt-5 pb-5 d-flex flex-column align-items-center">
                            <div class="best-image" style="background-image: url('{{$best['user']['image']}}');"></div>
                            <a class="d-block mt-3" href="">
                                <h3>{{$best['user']['name']}}</h3>
                            </a>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection