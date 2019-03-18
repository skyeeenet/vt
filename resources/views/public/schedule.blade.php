@extends('public.layouts.basic')

@section('content')
    <main>
        <section>
            <div class="container">
                <div class="text-center mt-5">
                    <h1 class="title">Расписание</h1>
                    <div class="d-flex flex-row justify-content-center specDoubledColorLine">
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8">
                        <div class="row mt-4 d-flex justify-content-end">
                            <form class="mr-3" action="" method="post">
                                <select name="day" id="day">
                                    <option value="Понедельник">Понедельник</option>
                                    <option value="Вторник">Вторник</option>
                                    <option value="Среда">Среда</option>
                                    <option value="Четверг">Четверг</option>
                                    <option value="Пятница">Пятница</option>
                                    <option value="Суббота">Суббота</option>
                                </select>
                                <select name="week" id="week">
                                    <option value="1">Четная</option>
                                    <option value="2">Нечетная</option>
                                </select>
                                <select name="" id="">
                                    <option value="">ВТ-18</option>
                                    <option value="">ВТ-17</option>
                                </select>
                                <button class="btn btn-primary p-1 schedule-btn" type="submit">Отобразить</button>
                            </form>
                        </div>
                        <div class="schedule-border my-5">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-2 d-flex flex-column align-items-center text-center">
                                    <b>I пара</b>
                                </div>
                                <div class="col-4 d-flex flex-column align-items-center">
                                    <p class="m-0">Основы численных методов</p>
                                </div>
                                <div class="col-2 d-flex flex-column align-items-center">
                                    <img src="../images/lectures.png" alt="">
                                </div>
                                <div class="col-4 d-flex flex-column align-items-center">
                                    <p><b>Ст.Преп.</b></p>
                                    <p><b>Иванов И.И.</b></p>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-2 d-flex flex-column align-items-center text-center">
                                    <b>II пара</b>
                                </div>
                                <div class="col-4 d-flex flex-column align-items-center">
                                    <p class="m-0">Основы численных методов</p>
                                </div>
                                <div class="col-2 d-flex flex-column align-items-center">
                                    <img src="../images/lectures.png" alt="">
                                </div>
                                <div class="col-4 d-flex flex-column align-items-center">
                                    <p><b>Ст.Преп.</b></p>
                                    <p><b>Иванов И.И.</b></p>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-2 d-flex flex-column align-items-center text-center">
                                    <b>III пара</b>
                                </div>
                                <div class="col-4 d-flex flex-column align-items-center">
                                    <p class="m-0">Основы численных методов</p>
                                </div>
                                <div class="col-2 d-flex flex-column align-items-center">
                                    <img src="../images/lectures.png" alt="">
                                </div>
                                <div class="col-4 d-flex flex-column align-items-center">
                                    <p><b>Ст.Преп.</b></p>
                                    <p><b>Иванов И.И.</b></p>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-2 d-flex flex-column align-items-center text-center">
                                    <b>IV пара</b>
                                </div>
                                <div class="col-4 d-flex flex-column align-items-center">
                                    <p class="m-0">Основы численных методов</p>
                                </div>
                                <div class="col-2 d-flex flex-column align-items-center">
                                    <img src="../images/lectures.png" alt="">
                                </div>
                                <div class="col-4 d-flex flex-column align-items-center">
                                    <p><b>Ст.Преп.</b></p>
                                    <p><b>Иванов И.И.</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection