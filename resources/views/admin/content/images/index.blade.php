@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <h2 class="text-center">Изображения</h2>

        <form action="{{route('admin.content.images.create')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="url-image">URL адрес</label>
                <input type="text" class="form-control" name="url-image" id="url-image">
            </div>
            <button type="submit" class="btn btn-primary">Добавить</button>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th>Изображение</th>
                    <th>Номер (используйте его для вставки)</th>
                    <th>Удалить</th>
                </tr>
            </thead>
            <tbody>
            @forelse($images as $image)
                <tr>
                    <td><img style="max-width: 300px; max-height: 300px;" src="{{$image->url}}" alt="Отображение изображения"></td>
                    <td>{{$image->id}}</td>
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
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection