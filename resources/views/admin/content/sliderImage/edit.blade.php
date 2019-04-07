@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <form action="{{'/admin/content/slider_image/update/'.$slider_Image->id}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="image">Номер изображения</label>
                <select class="form-control" name="image" id="image">
                    @foreach($images as $image)
                        <option @if($image->id == $slider_Image->image_id) selected @endif value="{{$image->id}}">{{$image->id}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="value">Содержание</label>
                <textarea class="form-control" name="value" id="value" cols="30" rows="10">{{$slider_Image->value}}</textarea>
            </div>
            <button class="btn btn-primary" type="submit">Обновить</button>
        </form>
    </div>
@endsection