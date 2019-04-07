@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <h2>Управление слайдерами</h2>
        <a class="btn btn-primary mt-3 mb-3" href="{{route('admin.content.slider.create')}}">Создать слайдер</a>

        <table class="table">
            <thead>
            <tr>
                <th>Id слайдера</th>
                <th>Название слайдера</th>
                <th>Страница привязки</th>
                <th>Редактировать</th>
                <th>Удалить</th>
            </tr>
            </thead>
            <tbody>
            @forelse($sliders as $slider)
                <tr>
                    <td>{{$slider->id}}</td>
                    <td>{{$slider->title}}</td>
                    <td>{{$slider->page['title']}}</td>
                    <td><a class="btn btn-primary" href="{{route('admin.content.slider').'/edit/'.$slider->id}}"><i class="far fa-edit"></i></a></td>
                    <td>
                        <form action="{{route('admin.content.slider').'/delete/'.$slider->id}}" method="post">
                            {{csrf_field()}}
                            <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td>Нет слайдеров</td>
                    <td>Нет слайдеров</td>
                    <td>Нет слайдеров</td>
                    <td>Нет слайдеров</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection