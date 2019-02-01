@extends('admin.layouts.app_admin')

@section('content')
<div class="container">
    <h2>Редактирование верхнего слайдера</h2>
    <form action="{{route('admin.content.upper-slider.create')}}" method="post">
        {{csrf_field()}}
        <h3>Добавить слайд</h3>
        <div class="form-group">
            <label for="image-number">Номер изображения</label>
            <input type="text" class="form-control" name="image-number" id="image-number">
        </div>
        <div class="form-group">
            <label for="slide-text">Содержимое</label>
            <textarea class="form-control" name="slide-text" id="slide-text" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th>Изображение</th>
                <th>Содержание</th>
                <th>Редактировать</th>
                <th>Удалить</th>
            </tr>
        </thead>
        <tbody>
        @forelse($slides as $slide)
            <tr>
                <td><img style="max-width: 300px; max-height: 300px;" src="{{$slide->image['url']}}" alt=""></td>
                <td><p>{{$slide->value}}</p></td>
                <td><a class="btn btn-primary" href="{{'/admin/content/upper-slider/edit/'.$slide->id}}"><i class="far fa-edit"></i></a></td>
                <td>
                    <form action="{{route('admin.content.upper-slider').'/delete/'.$slide->id}}" method="post">
                        {{csrf_field()}}
                        <button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td>Нет данных</td>
                <td>Нет данных</td>
                <td>Нет данных</td>
                <td>Нет данных</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>
@endsection