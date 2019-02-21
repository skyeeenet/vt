@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <form action="{{route('admin.socials').'/update/'.$social->id}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="value">Вид занятия</label>
                <input class="form-control" type="text" id="value" name="value" value="{{$social->value}}">
            </div>
            <div class="form-group">
                <label for="image">Иконка</label>
                <select class="form-control" name="image" id="image">
                    @foreach($images as $image)
                        <option @if($image->id == $social->image_id) selected @endif value="{{$image->id}}">{{$image->id}}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-primary" type="submit">Обновить</button>
        </form>
    </div>
@endsection