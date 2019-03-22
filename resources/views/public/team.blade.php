@extends('public.layouts.basic')

@section('content')
    <main>
        <section>
            <div class="container">
                <div class="text-center mb-5 mt-5">
                    <h1 class="title">
                        Колектив
                    </h1>
                    <div class="d-flex flex-row justify-content-center specDoubledColorLine">
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="teacher col-md-12 d-flex flex-column flex-md-row align-items-center justify-content-center">
                        <img src="../images/img.jpg" alt="">
                        <div class="d-flex flex-column text-center align-self-md-start align-self-sm-center ml-0 ml-md-4 mt-3 mt-md-0">
                            <strong><a href="#"><h3>Иванов И.В.</h3></a></strong>
                            <strong>Заведующий кафедрой</strong>
                            <p>доктор технических наук, профессор</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    @foreach($lecturers as $lecturer)
                        <div class="teacher col-lg-4 col-md-6 col-12 mt-3 d-flex flex-column align-items-center">
                            <img src="{{$lecturer['user']['image']}}" alt="">
                            <a class="mt-3" href="{{route('lecturer', $lecturer->id)}}"><h3>{{$lecturer['user']['name']}}</h3></a>
                            <p>{{$lecturer['position']}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection