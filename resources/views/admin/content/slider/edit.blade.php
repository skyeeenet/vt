@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <h3 class="text-center mt-3">Редактировать слайдер № {{$slider->id}}</h3>
        <h5 class="text-center mt-3">{{$slider->title}}</h5>
        <h4 class="mt-3">Добавить слайд</h4>
        <form action="{{route('admin.content.slider').'/update/'.$slider->id}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="image">Номер изображения</label>
                <select class="form-control" name="image" id="image">
                    @foreach($images as $image)
                        <option value="{{$image->id}}">{{$image->id}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="value">Содержание</label>
                <textarea class="form-control" name="value" id="value" cols="30" rows="10"></textarea>
            </div>
            <button class="btn btn-primary" type="submit">Добавить</button>
        </form>
        <h4 class="mt-3 mb-3">Текущие слайды</h4>
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
                @forelse($slider_images as $image)
                <tr>
                    <td><img width="300px" src="{{$image->image['url']}}" alt=""></td>
                    <td>{{$image->value}}</td>
                    <td><a class="btn btn-primary" href="{{'/admin/content/slider_image/edit/'.$image->id}}">Обновить</a></td>
                    <td>
                        <form action="{{'/admin/content/slider_image/delete/'.$image->id}}" method="post">
                            {{csrf_field()}}
                            <button class="btn btn-danger">delete</button>
                        </form>
                    </td>
                </tr>    
                @empty 
                <tr>
                    <td>Нет изображений</td>
                    <td>Нет изображений</td>
                    <td>Нет изображений</td>
                    <td>Нет изображений</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection