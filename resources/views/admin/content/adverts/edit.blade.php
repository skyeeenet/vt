@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <h2>Редактирование слайда</h2>
        <form action="{{route('admin.content.adverts').'/update/'.$advert->id}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="advertShort">Описание</label>
                <textarea class="form-control" name="advertShort" id="advertShort" rows="3">{{$advert->short}}</textarea>
            </div>
            <div class="form-group">
                <label for="advertText">Содержимое</label>
                <textarea class="form-control" name="advertText" id="advertText" rows="3">{{$advert->value}}</textarea>
            </div>
            <div class="form-group">
                <label for="is_show">Открыть доступ ?</label>
                <select class="form-control" name="is_show" id="is_show">
                    <option selected value="1">Да</option>
                    <option value="0">Нет</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Редактировать</button>
        </form>
    </div>
@endsection