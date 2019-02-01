@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <h2>Редактирование слайда</h2>
        <form action="{{'/admin/content/upper-slider/update/'.$upper->id}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="image-number">Номер изображения</label>
                <input type="text" class="form-control" name="image-number" id="image-number" value="{{$upper->image_id}}">
            </div>
            <div class="form-group">
                <label for="slide-text">Содержимое</label>
                <textarea class="form-control" name="slide-text" id="slide-text" rows="3">{{$upper->value}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Редактировать</button>
        </form>
    </div>
@endsection