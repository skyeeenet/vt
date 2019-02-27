@extends('public.layouts.basic')

@section('content')
    <main>
        <section>
            <div class="container">
                <div class="text-center mb-5">
                    <h1 class="title">
                        Профиль пользователя
                    </h1>
                    <div class="d-flex flex-row justify-content-center specDoubledColorLine">
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <p class="text-center mb-5 roboto24">Добро пожаловать, {{$user->name}}</p>
                <div class="row flex-column-reverse flex-xl-row">
                    <form class="w-100 d-flex flex-column align-items-center" action="{{route('user.update')}}" method="post">
                        @csrf
                        <div class="col-xl-8 col-12 mt-5 mt-xl-0">
                            <div class="d-flex justify-content-between mb-3">
                                <b class="roboto24">О себе</b>
                                <button type="submit" class="btn btn-primary">Применить</button>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="description" cols="100" rows="20">{{$user->description}}</textarea>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection