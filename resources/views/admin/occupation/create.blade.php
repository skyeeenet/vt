@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <form action="{{route('admin.occupation.store')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="value">Вид занятия</label>
                <input class="form-control" type="text" id="value" name="value">
            </div>
            <div class="form-group">
                <label for="image">Иконка</label>
                <select class="form-control" name="image" id="image">
                    @foreach($images as $image)
                        <option value="{{$image->id}}">{{$image->id}}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-primary" type="submit">Создать</button>
        </form>
    </div>
@endsection