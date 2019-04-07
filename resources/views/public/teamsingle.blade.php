@extends('public.layouts.basic')

@section('content')
    <main>
        <div class="container">
            <div class="text-center">
                <h1 class="title">
                    Колектив
                </h1>
                <div class="d-flex flex-row justify-content-center specDoubledColorLine">
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="d-flex flex-row flex-wrap flex-lg-nowrap justify-content-around align-items-center my-5">
                <div>
                    <img class="hoverEffect" src="{{$lecturer['user']['image']}}" alt="person">
                </div>
                <div class="text-center text-lg-left mt-4 mt-lg-0">
                    <div class="personInfo" style="margin-bottom: 40px;">
                        <div>{{$lecturer['user']['name']}}</div>
                        <div>{{$lecturer['position']}}</div>
                    </div>
                    <div><span class="condensed">Должность:</span> {{$lecturer['position']}}</div>
                    <div style="margin-bottom: 40px;"><span class="condensed">Кафедра:</span> {{$lecturer['department']}}</div>
                    <div class="mb-4 condensed">Контакты</div>
                    <div class="d-flex flex-row justify-content-around align-items-center mb-4">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <img src="../images/person_email.png" alt="email" class="blockClick" id="email_click">
                            <div class="text-center condensed mt-2 color_cont">
                                Email
                            </div>
                            <div id="email_popup" class="popup_element">
                                <a href="mailto:#">{{$lecturer['email']}}</a>
                            </div>
                            <!-- /.text-center -->
                        </div>
                        <!-- /.d-flex flex-column justify-content-center align-items-center -->
                        <div class="d-flex flex-column justify-content-center align-items-center blockClick">
                            <img src="../images/person_call.png" alt="phone" class="blockClick" id="phone_click">
                            <div class="text-center condensed mt-2 color_cont">
                                Телефон
                            </div>
                            <div id="phone_popup" class="popup_element">
                                {{$lecturer['phone']}}
                            </div>
                            <!-- /.text-center -->
                        </div>
                        <!-- /.d-flex flex-column justify-content-center align-items-center -->
                        <div class="d-flex flex-column justify-content-center align-items-center blockClick">
                            <img src="../images/person_facebook.png" alt="facebook" class="blockClick"
                                 id="facebook_click">
                            <div class="text-center condensed mt-2 color_cont">
                                Facebook
                            </div>
                            <div id="facebook_popup" class="popup_element">
                                <a href="{{$lecturer['facebook']}}">{{$lecturer['facebook']}}4</a>
                            </div>
                            <!-- /.text-center -->
                        </div>
                        <!-- /.d-flex flex-column justify-content-center align-items-center -->
                    </div>
                    <div class="mb-3 condensed">Наукометрика</div>
                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <div class="mr-4 condensed">Электронный репозиторий НТБ ПГТУ</div>
                        <a href="{{$lecturer['ntb']}}" style="color: inherit;">
                            <div class="buttonGoTo px-3 py-1 roboto16">Перейти</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection