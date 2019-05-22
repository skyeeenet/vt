@extends('public.layouts.basic')

@section('title')ПГТУ - Кафедра Информатики@endsection

@section('description')Приазовский государственный технический университет - Кафедра Информатики (ВТ). Главная страница кафедры информатики@endsection

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
                            @forelse(Page::getAdsByAmount(3) as $item)
                                <p><a href="{{route('singAdvert', $item->id)}}">{{$item->short}}</a></p>
                                @empty
                                <p>Объявления отсутствуют</p>
                            @endforelse
                        </div>
                        <div class="d-flex justify-content-end">
                            <a class="link" href="{{route('adverts')}}">Все объявления</a>
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
                    <a href="/news">
                        <h2 class="title link">Недавние новости и события</h2>
                    </a>
                    <div class="d-flex flex-row justify-content-center specDoubledColorLine mt-2">
                        <div></div>
                        <div></div>
                    </div>
                </div>

                <div class="row">
                    @foreach($recent_posts as $recent)
                    <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                        <div style="height: 400px;" class="card">
                            <img style="height: 200px;" class="card-img-top" src="{{$recent->image['url']}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-date">{{date('d F Y', strtotime($recent->created_at))}}</h5>
                                <h2 class="mt-3"><a class="card-title" href="{{'/news/'.$recent->slug}}">{{$recent->title}}</a></h2>
                                <p class="card-text mt-4">
                                    {{$recent->short_body . '...'}}
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
        <div id="bg-message"></div>
        <div id="message">
            <ul>
                <li><strong><i class="fas fa-times"></i></strong></li>
                <li><h3 class="text-center mb-3">Здравствуйте</h3></li>
                <li><p class="text-center">Сайт работает в тестовом режиме и все еще наполняется.</p></li>
                <li><p class="text-center">Просим прощения за неудобства</p></li>
            </ul>
        </div>
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

@section('scripts')
    <script>

        function getCookie(name) {
            var matches = document.cookie.match(new RegExp(
                "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
            ));
            return matches ? decodeURIComponent(matches[1]) : undefined;
        }

        $(function() {

            if (!getCookie('test-accept')) {

                var date = new Date;
                date.setDate(date.getDate() + 2);

                document.cookie = "test-accept=true; expires=" + date.toUTCString();

                var $btn_close = $('#message ul li strong');
                var $bg_message = $('#bg-message');
                var $message = $('#message');

                $message.css('display', 'flex');
                $bg_message.css('display', 'block');

                $btn_close.click(function () {
                    $bg_message.fadeOut();
                    $message.fadeOut() ;
                });
            }
        });

    </script>
@endsection