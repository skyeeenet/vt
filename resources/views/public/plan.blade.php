@extends('public.layouts.basic')

@section('content')
    <main>
        <section>
            <div class="container">
                <div class="text-center mt-5">
                    <h1 class="title">Графики и планы</h1>
                    <div class="d-flex flex-row justify-content-center specDoubledColorLine">
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <h3 class="sub-title text-center mt-5 mb-3 my-lg-5">График работы</h3>
                <!-- TABLE BEGIN -->
                <div class="row d-flex flex-column align-items-center">
                    <div class="col-lg-8 col-md-12">
                        <!-- <h2 class="text-center table-title">Декабрь 2019</h2> -->
                        <div class="table-responsive mt-4">
                            <table class="table table-bordered">
                                <thead>
                                <span class="table-title">Декабрь 2019</span>
                                <tr>
                                    <th>Понедельник</th>
                                    <th>Вторник</th>
                                    <th>Среда</th>
                                    <th>Четверг</th>
                                    <th>Пятница</th>
                                    <th class="table-red">Суббота</th>
                                    <th class="table-red">Воскресенье</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="td-poiner">27</td>
                                    <td class="td-poiner">28</td>
                                    <td class="td-poiner">29</td>
                                    <td class="td-poiner">30</td>
                                    <td class="td-poiner">1</td>
                                    <td>2</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>5</td>
                                    <td>6</td>
                                    <td>7</td>
                                    <td>8</td>
                                    <td>9</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>28</td>
                                    <td>29</td>
                                    <td>30</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>28</td>
                                    <td>29</td>
                                    <td>30</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>28</td>
                                    <td>29</td>
                                    <td>30</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div>
                            <form class="d-block d-md-flex w-100 offset-4 offset-md-0 justify-content-md-between" action="">
                                <p><input class="mr-2" type="radio" checked name="sel">1 АТТЕСТАЦИЯ</p>
                                <p><input class="mr-2" type="radio" name="sel">2 АТТЕСТАЦИЯ</p>
                                <p><input class="mr-2" type="radio" name="sel">СЕССИЯ</p>
                                <p><input class="mr-2" type="radio" name="sel">КАНИКУЛЫ</p>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- TABLE END -->
            </div>
        </section>
        <section>
            <div class="container mt-5 mb-5">
                <h3 class="sub-title">Планы</h3>
                <div class="row d-flex flex-column align-items-center">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-3 text-center plane-link">ВТ-18</div>
                            <div class="col-md-3 text-center plane-link">ВТ-17</div>
                            <div class="col-md-3 text-center plane-link">ВТ-16</div>
                            <div class="col-md-3 text-center plane-link">ВТ-15</div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-3 text-center plane-link">ВТ-18-М</div>
                            <div class="col-md-3 text-center plane-link">ВТ-17-М</div>
                            <div class="col-md-3 text-center plane-link">ВТ-16-М</div>
                            <div class="col-md-3 text-center plane-link">ВТ-15-М</div>
                        </div>
                    </div>
                </div>
                <div class="flex-column justify-content-center align-items-center mt-5 animated downloadBlock">
                    <div class="roboto24bd">Скачать выбранный документ:</div>
                    <div class="d-flex flex-row justify-content-around align-items-center mt-3">
                        <a download="excel" href="../images/logo.png" class="mr-3"><img src="../images/excel.svg"
                                                                                        heigth="60px" width="60px" alt="excel"></a>
                        <a download="pdf" href="../images/logo.png" class="ml-3"><img src="../images/pdf.svg"
                                                                                      heigth="60px" width="60px" alt="pdf"></a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection