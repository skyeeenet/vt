@extends('public.layouts.basic')

@section('content')
    <main>
        <div class="container">
            <div class="text-center my-5">
                <h1 class="title">Конференция “Студенческая Наука”</h1>
                <div class="d-flex flex-row justify-content-center specDoubledColorLine">
                    <div></div>
                    <div></div>
                </div>
            </div>
            <p class="col-12 col-lg-12 mt-4 roboto18">
                Несмотря на то, что в настоящее время существует довольно большое количество методик чего-нибудь, не
                уделено достаточного внимания достоверности полученных результатов из-за отсутствия учета
                чего-нибудь,
                имеющего место в реально Необходимо отметить, что автор анализирует факторы, влияющие на что-нибудь,
                выявляет основные закономерности чего-нибудь, классифицирует типы чего-нибудь. В первой части работы
                назовите автора по имени-отчеству аргументирует необходимость каких-то щтуковин, перечисляет целый
                ряд причин, по которым эти штуковины нужны и могут быть полезными. Рассматриваются современные
                представления о исследуемой штуковине. Наибольшую популярность в последнее время завоевывают
                определенные штуки, например, модели, построенные на основе других штук, например, подходов.
            </p>
        </div>
        <div class="container">
            <!-- 2018-2019 -->
            <div class="conf_dropdown_element_first d-flex flex-row justify-content-center justify-content-lg-start mt-3 px-3 py-2"
                 id="conf_dropdown_button1">
                2018-2019
                <a class="d-none d-lg-block ml-3" href="#">
                    <img src="../images/triangle-down.svg" height="25px" width="25px" alt="dropdown_button">
                </a>
            </div>
            <div class="dropdown_elements mt-5" id="drpdn_el_1">
                <div class="dropdown_element">
                    <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <img src="../images/map-perspective-with-a-placeholder-on-it.png" alt="map">
                            <div>Место проведения:</div>
                            <div>Мариуполь, Карпинского 37а</div>
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-center mt-4 mt-lg-0">
                            <img src="../images/calendar-with-a-clock-time-tools.png" alt="calendar">
                            <div>Время проведения:</div>
                            <div> 18 июня 18:00</div>
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-center mt-4 mt-lg-0">
                            <img src="../images/work-team.png" alt="team">
                            <div>Председатель:</div>
                            <div>Иванов И.В.</div>
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-center mt-4 mt-lg-0">
                            <img src="../images/cv.png" alt="secretary">
                            <div>Секретарь:</div>
                            <div>Иванов И.В.</div>
                        </div>
                    </div>
                    <div class="col-12 offset-lg-3 col-lg-6 mt-5">
                        <div class="d-flex flex-column justify-content-center align-items-center registration">
                            <div>Открыта регистрация</div>
                            <div>На участие в конференции</div>
                            <div class="registration_link"><button class="btn btn-primary" data-toggle="modal"
                                                                   data-target="#myModal">Подать заявку онлайн</button></div>
                            <div>С 18.02 по 22.02</div>
                        </div>
                    </div>
                    <div class="row mt-5 dropdown_elements_menu_text d-none d-lg-flex">
                        <div class="col-lg-4 text-center">Темы докладов</div>
                        <div class="col-lg-4 text-center">Докладчик</div>
                        <div class="col-lg-4 text-center">Руководитель</div>
                    </div>
                    <div class="mb-4 mb-lg-0"></div>
                    <div class="row mt-2 dropdown_elements_menu_element">
                        <div class="col-lg-4 text-center">Тема для доклада номер один</div>
                        <div class="col-lg-4 text-center">Иванов И.В.</div>
                        <div class="col-lg-4 text-center">Иванов И.В.</div>
                    </div>
                    <div class="row mt-2 dropdown_elements_menu_element">
                        <div class="col-lg-4 text-center">Тема для доклада номер один</div>
                        <div class="col-lg-4 text-center">Иванов И.В.</div>
                        <div class="col-lg-4 text-center">Иванов И.В.</div>
                    </div>
                    <div class="row mt-2 dropdown_elements_menu_element">
                        <div class="col-lg-4 text-center">Тема для доклада номер один</div>
                        <div class="col-lg-4 text-center">Иванов И.В.</div>
                        <div class="col-lg-4 text-center">Иванов И.В.</div>
                    </div>
                    <div
                            class="d-flex flex-column justify-content-center align-items-center align-items-lg-start conf_documents">
                        <div class="d-flex flex-row justify-content-between align-items-center">
                            <img src="../images/doc.png" alt="doc">
                            <div>Протокол проведения</div>
                        </div>
                        <div class="d-flex flex-row justify-content-between align-items-center">
                            <img src="../images/pdf.png" alt="pdf">
                            <div>Сборник тезисов докладов</div>
                        </div>
                    </div>
                    <!-- Slider -->
                    <div class="conf_slider mt-5">
                        <div class="d-flex justify-content-center"><img src="../images/sl-1.png" alt=""></div>
                        <div class="d-flex justify-content-center"><img src="../images/sl-1.png" alt=""></div>
                        <div class="d-flex justify-content-center"><img src="../images/sl-1.png" alt=""></div>
                        <div class="d-flex justify-content-center"><img src="../images/sl-1.png" alt=""></div>
                        <div class="d-flex justify-content-center"><img src="../images/sl-1.png" alt=""></div>
                        <div class="d-flex justify-content-center"><img src="../images/sl-1.png" alt=""></div>
                    </div>
                    <!-- Slider end -->
                    <div class="conf_slider_link text-center text-lg-right mt-4">
                        <a href="#">В альбом конференции</a>
                    </div>
                </div>
                <!-- /.dropdown_element -->
                <!-- <div class="d-flex flex-row justify-content-center specDoubledColorLine my-4">
                    <div></div>
                    <div></div>
                </div> -->
            </div>
            <!-- /.dropdown_elements -->
            <!-- 2018-2019 end -->
            <!-- 2017-2018 -->
            <div class="conf_dropdown_element_first d-flex flex-row justify-content-center justify-content-lg-start mt-3 px-3 py-2"
                 id="conf_dropdown_button2">
                2017-2018
                <a class="d-none d-lg-block ml-3" href="#">
                    <img src="../images/triangle-down.svg" height="25px" width="25px" alt="dropdown_button">
                </a>
            </div>
            <div class="dropdown_elements mt-5" id="drpdn_el_2">
                <div class="dropdown_element">
                    <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <img src="../images/map-perspective-with-a-placeholder-on-it.png" alt="map">
                            <div>Место проведения:</div>
                            <div>Мариуполь, Карпинского 37а</div>
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-center mt-4 mt-lg-0">
                            <img src="../images/calendar-with-a-clock-time-tools.png" alt="calendar">
                            <div>Время проведения:</div>
                            <div> 18 июня 18:00</div>
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-center mt-4 mt-lg-0">
                            <img src="../images/work-team.png" alt="team">
                            <div>Председатель:</div>
                            <div>Иванов И.В.</div>
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-center mt-4 mt-lg-0">
                            <img src="../images/cv.png" alt="secretary">
                            <div>Секретарь:</div>
                            <div>Иванов И.В.</div>
                        </div>
                    </div>
                    <div class="col-12 offset-lg-3 col-lg-6 mt-5">
                        <div class="d-flex flex-column justify-content-center align-items-center registration">
                            <div>Открыта регистрация</div>
                            <div>На участие в конференции</div>
                            <div class="registration_link"><button class="btn btn-primary" data-toggle="modal"
                                                                   data-target="#myModal">Подать заявку онлайн</button></div>
                            <div>С 18.02 по 22.02</div>
                        </div>
                    </div>
                    <div class="row mt-5 dropdown_elements_menu_text d-none d-lg-flex">
                        <div class="col-lg-4 text-center">Темы докладов</div>
                        <div class="col-lg-4 text-center">Докладчик</div>
                        <div class="col-lg-4 text-center">Руководитель</div>
                    </div>
                    <div class="mb-4 mb-lg-0"></div>
                    <div class="row mt-2 dropdown_elements_menu_element">
                        <div class="col-lg-4 text-center">Тема для доклада номер один</div>
                        <div class="col-lg-4 text-center">Иванов И.В.</div>
                        <div class="col-lg-4 text-center">Иванов И.В.</div>
                    </div>
                    <div class="row mt-2 dropdown_elements_menu_element">
                        <div class="col-lg-4 text-center">Тема для доклада номер один</div>
                        <div class="col-lg-4 text-center">Иванов И.В.</div>
                        <div class="col-lg-4 text-center">Иванов И.В.</div>
                    </div>
                    <div class="row mt-2 dropdown_elements_menu_element">
                        <div class="col-lg-4 text-center">Тема для доклада номер один</div>
                        <div class="col-lg-4 text-center">Иванов И.В.</div>
                        <div class="col-lg-4 text-center">Иванов И.В.</div>
                    </div>
                    <div
                            class="d-flex flex-column justify-content-center align-items-center align-items-lg-start conf_documents">
                        <div class="d-flex flex-row justify-content-between align-items-center">
                            <img src="../images/doc.png" alt="doc">
                            <div>Протокол проведения</div>
                        </div>
                        <div class="d-flex flex-row justify-content-between align-items-center">
                            <img src="../images/pdf.png" alt="pdf">
                            <div>Сборник тезисов докладов</div>
                        </div>
                    </div>
                    <!-- Slider -->
                    <div class="conf_slider mt-5">
                        <div class="d-flex justify-content-center"><img src="../images/sl-1.png" alt=""></div>
                        <div class="d-flex justify-content-center"><img src="../images/sl-1.png" alt=""></div>
                        <div class="d-flex justify-content-center"><img src="../images/sl-1.png" alt=""></div>
                        <div class="d-flex justify-content-center"><img src="../images/sl-1.png" alt=""></div>
                        <div class="d-flex justify-content-center"><img src="../images/sl-1.png" alt=""></div>
                        <div class="d-flex justify-content-center"><img src="../images/sl-1.png" alt=""></div>
                    </div>
                    <!-- Slider end -->
                    <div class="conf_slider_link text-center text-lg-right mt-4">
                        <a href="#">В альбом конференции</a>
                    </div>
                </div>
                <!-- /.dropdown_element -->
                <!-- <div class="d-flex flex-row justify-content-center specDoubledColorLine my-4">
                    <div></div>
                    <div></div>
                </div> -->
            </div>
            <!-- /.dropdown_elements -->
            <!-- 2017-2018 end -->
        </div>
    </main>
@endsection