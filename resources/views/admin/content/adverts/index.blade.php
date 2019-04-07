@extends('admin.layouts.app_admin')

@section('content')
<div class="container">
    <h2>Объявления</h2>
    <form action="{{route('admin.content.adverts.create')}}" method="post">
        {{csrf_field()}}
        <h3>Добавить объявление</h3>
        <div class="form-group">
            <label for="advertShort">Краткое описание (выводится на главной странице)</label>
            <input type="text" class="form-control" id="advertShort" name="advertShort">
        </div>
        <div class="form-group">
            <label for="advertText">Содержание объявления</label>
            <input type="text" class="form-control" id="advertText" name="advertText">
        </div>
        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th>Дата</th>
                <th>Автор</th>
                <th>Краткое описание</th>
                <th>Содержание</th>
                <th>Редактировать</th>
                <th>Удалить</th>
            </tr>
        </thead>
        <tbody>
            @forelse($adverts as $advert)
            <tr>
                <td>{{$advert->created_at}}</td>
                <td>{{$advert->author['name']}}<br>{{$advert->author['email']}}</td>
                <td>{{$advert->short}}</td>
                <td>{{$advert->value}}</td>
                <td><a class="btn btn-primary" href="{{route('admin.content.adverts').'/edit/'.$advert->id}}"><i class="far fa-edit"></i></a></td>
                <td>
                    <form action="{{route('admin.content.adverts').'/delete/'.$advert->id}}" method="post">
                        {{csrf_field()}}
                        <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td>Данные отсутствуют</td>
                <td>Данные отсутствуют</td>
                <td>Данные отсутствуют</td>
                <td>Данные отсутствуют</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    {{$adverts->links()}}
</div>
@endsection