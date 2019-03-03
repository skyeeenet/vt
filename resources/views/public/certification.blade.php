@extends('public.layouts.basic')

@section('content')
    <main>
        <section>
            <div class="container">
                <div class="text-center mt-5">
                    <h1 class="title">Дипломирование</h1>
                    <div class="d-flex flex-row justify-content-center specDoubledColorLine">
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <span class="dox-text">Документы</span>
                <div class="row documents">
                    <div class="col">
                        <div class="shield d-flex flex-column align-items-center">
                            <img src="../images/shield.svg" alt="">
                            <a href="#" class="roboto24">Гост</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="methodical d-flex flex-column align-items-center">
                            <img src="../images/open-book.svg" alt="">
                            <a href="#" class="roboto24">Методические указания</a>
                        </div>
                    </div>
                </div>
                <div class="documents-slick">
                    <div class="d-flex justify-content-center"><img src="../images/rectangle.png" alt=""></div>
                    <div class="d-flex justify-content-center"><img src="../images/rectangle.png" alt=""></div>
                    <div class="d-flex justify-content-center"><img src="../images/rectangle.png" alt=""></div>
                    <div class="d-flex justify-content-center"><img src="../images/rectangle.png" alt=""></div>
                    <div class="d-flex justify-content-center"><img src="../images/rectangle.png" alt=""></div>
                    <div class="d-flex justify-content-center"><img src="../images/rectangle.png" alt=""></div>
                </div>
                <p class="text-right"><a href="#">в альбом Дипломирование</a></p>
                <div class="mb-5">
                    <div class="conf_dropdown_element_first d-flex flex-row justify-content-center justify-content-lg-start mt-5 px-3 py-2"
                         id="conf_dropdown_button1">
                        2018-2019
                        <a class="d-none d-lg-block ml-3" href="#">
                            <img src="../images/triangle-down.svg" height="25px" width="25px" alt="dropdown_button">
                        </a>
                    </div>
                    <div class="dropdown_elements animated mt-5" id="drpdn_el_1">
                        <div class="dropdown_element">
                            <p class="roboto24bd">Бакалаврат</p>
                            <p class="roboto18smbd">ВТ-17</p>
                            <table class="table table-sertif">
                                <thead class="roboto18smbd bg-light" style="color: #007bff;">
                                <tr>
                                    <th style="width: 25%;">ФИО</th>
                                    <th style="width: 25%;">Руководитель</th>
                                    <th class="text-right">Тема</th>
                                </tr>
                                </thead>
                                <tbody class="roboto18">
                                <tr>
                                    <td>Иванов И. И.</td>
                                    <td class="roboto18smbd">Иванов И. И.</td>
                                    <td class="text-right">Автоматизированная система учета и планирования
                                        обработки
                                        металла резаньем</td>
                                </tr>
                                <tr>
                                    <td>Иванов И. И.</td>
                                    <td class="roboto18smbd">Иванов И. И.</td>
                                    <td class="text-right">Автоматизированная система учета и планирования
                                        обработки
                                        металла резаньем</td>
                                </tr>
                                </tbody>
                            </table>
                            <!-- <div class="row">
                                <div class="col-3 ml-3 border" style="border: 2px solid #c6c6c6 !important;">
                                    <p class="d-flex justify-content-start roboto18smbd pt-2"
                                        style="color: #007bff;">ФИО</p>
                                    <p>Иванов И. И.</p>
                                </div>
                                <div class="col-4 border border-dark border-left-0 border-right-0">
                                    <p class="d-flex justify-content-start roboto18smbd pt-2"
                                        style="color: #007bff;">Руководитель</p>
                                    <p>Иванов И. И.</p>
                                </div>
                                <div class="col mr-3 border border-dark">
                                    <p class="d-flex justify-content-end roboto18smbd pt-2" style="color: #007bff;">
                                        Тема</p>
                                    <p class="text-right">Автоматизированная система учета и планирования обработки
                                        металла резаньем</p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection