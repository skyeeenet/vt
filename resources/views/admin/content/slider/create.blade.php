@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <h3 class="text-center mt-3">Добавить слайдер</h3>
        <form action="{{route('admin.content.slider.store')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="title">Название слайдера</label>
                <input class="form-control" type="text" name="title" id="title">
            </div>
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
    </div>
@endsection