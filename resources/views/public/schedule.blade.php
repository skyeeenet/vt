@extends('public.layouts.basic')

@section('title')Расписание - ПГТУ - Кафедра Информатики@endsection
@section('description')Расписание занятий. ПГТУ - Кафедра информатики@endsection

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

                        <div class="row mt-4 d-flex justify-content-center">
                            <form class="mr-3" id="schedule-inputs" action="" method="post">
                                <select name="day" id="day">
                                    <option value="Понедельник">Понедельник</option>
                                    <option value="Вторник">Вторник</option>
                                    <option value="Среда">Среда</option>
                                    <option value="Четверг">Четверг</option>
                                    <option value="Пятница">Пятница</option>
                                    <option value="Суббота">Суббота</option>
                                </select>
                                <select name="week" id="week">
                                    @foreach($weeks as $week)
                                        <option value="{{$week->id}}">{{$week->value}}</option>
                                    @endforeach
                                </select>
                                <select name="group" id="group">
                                    @foreach($groups as $group)
                                        <option value="{{$group->id}}">{{$group->value}}</option>
                                    @endforeach
                                </select>
                                <button id="send" class="btn btn-primary p-1 schedule-btn" type="submit">Отобразить</button>
                            </form>
                        </div>

                        <table class="table table-responsive-lg mt-4">
                            <thead>
                                <tr>
                                    <th>Пара</th>
                                    <th>Дисциплина</th>
                                    <th>Тип пары</th>
                                    <th>Преподаватель</th>
                                </tr>
                            </thead>
                            <tbody id="table-body">

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('scripts')
    <script>

        const send = function (url, data) {

            const request = $.ajax({
                url: url,
                type: "post",
                data: data
            });

            request.done(function (response, textStatus, jqXHR){
                // Log a message to the console
                console.log(response)
                build(response)
            });

            request.fail(function (jqXHR, textStatus, errorThrown){
                // Log the error to the console
                console.error(
                    "The following error occurred: "+
                    textStatus, errorThrown
                );
            });

        };

        const build = function (data) {

            console.log(data)

            let body = $('#table-body');

            body.empty();

            data.forEach(function (item) {

                console.log(item['occupation']['value'])

                body.append('<tr>'
                    +'<td>'+item['number']+'</td>'
                    +'<td>'+item['subject']['value']+'</td>'
                    +'<td>'+item['occupation']['value']+'</td>'
                    +'<td>'+ item['lecturer_degree'] +'<br>'+item['lecturer_name']+'</td>'
                    +'</tr>');
            });
        }

        $(function() {

            $('#send').on('click', function (e) {

                e.preventDefault()

                const $form_inputs = $('#schedule-inputs select option:selected')

                const resources = {
                    day: $form_inputs[0]['value'],
                    week: $form_inputs[1]['value'],
                    group: $form_inputs[2]['value']
                }

                //const result_string = JSON.stringify(resources)

                const result_string = resources
                
                const url = '/api/schedule'

                send(url, result_string)

            });

        });

    </script>
@endsection