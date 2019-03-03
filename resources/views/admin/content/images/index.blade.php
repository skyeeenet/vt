@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <h2 class="text-center">Изображения</h2>

        <form action="{{route('admin.content.images.store')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="url-image">URL адрес</label>
                <input type="text" class="form-control" name="url-image" id="url-image">
                <input type="hidden" name="type" value="remote">
            </div>
            <button type="submit" class="btn btn-primary">Добавить</button>
        </form>

        <form enctype="multipart/form-data" class="mt-4" action="{{route('admin.content.images.store')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="server">Загрузить на сервер</label>
                <input type="file" class="form-control-file" id="server" name="image">
                <input type="hidden" name="type" value="local">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="width" placeholder="Ширина (пиксели)">
                <input class="form-control mt-2" type="text" name="height" placeholder="Высота (пиксели)">
            </div>
            <button type="submit" class="btn btn-primary">Загрузить</button>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th>Изображение</th>
                    <th>Номер (используйте его для вставки)</th>
                    <th>Тип</th>
                    <th>Редактировать</th>
                    <th>Удалить</th>
                </tr>
            </thead>
            <tbody>
            @forelse($images as $image)
                <tr>
                    <td><img style="max-width: 300px; max-height: 300px;" src="{{$image->url}}" alt="Отображение изображения"></td>
                    <td>{{$image->id}}</td>
                    <td>{{$image->type}}</td>
                    <td><a class="btn btn-primary" href="{{route('admin.content.images').'/edit/'.$image->id}}"><i class="far fa-edit"></i></a></td>
                    <td>
                        <form action="{{route('admin.content.images').'/delete/'.$image->id}}" method="post">
                            {{csrf_field()}}
                            <button class="btn btn-danger" type="submit"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>Нет данных</td>
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