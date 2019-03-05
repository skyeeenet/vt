@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <form action="{{route('admin.albums').'/update/'.$album->id}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="value">Название альбома</label>
                <input type="text" class="form-control" id="groupName" name="value" value="{{$album->value}}">
            </div>
            <button class="btn btn-primary" type="submit">Обновить</button>
        </form>
        <h3 class="text-center">Добавить категорию</h3>
        <form action="{{'/admin/albums_categories/store'}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="category">Категории</label>
                <select class="form-control" name="category" id="category">
                    @foreach($allCategories as $category)
                        <option value="{{$category->id}}">{{$category->value}}</option>
                    @endforeach
                </select>
            </div>
            <input type="hidden" name="album" value="{{$album->id}}">
            <button type="submit" class="btn btn-primary">Добавить</button>
        </form>
        <h3 class="text-center">Категории</h3>
        <table class="table">
            <thead>
            <tr>
                <th>Категория</th>
                <th>Удалить</th>
            </tr>
            </thead>
            <tbody>
            @forelse($categories as $category)
                <tr>
                    <td>{{$category->value}}</td>
                    <td>
                        <form action="{{'/admin/albums_categories/'.'delete/'.$category->id}}" method="post">
                            {{csrf_field()}}
                            <button class="btn btn-danger" type="submit"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <td>Категорий не закреплены</td>
                <td>Категорий не закреплены</td>
                <td>Категорий не закреплены</td>
            @endforelse
            </tbody>
        </table>
        <h3 class="text-center">Добавить изображение</h3>
        <form action="{{'/admin/albums_images/store'}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="image">Изображение</label>
                <select class="form-control" name="image" id="image">
                    @foreach($allImages as $image)
                        <option value="{{$image->id}}">{{$image->id}}</option>
                    @endforeach
                </select>
            </div>
            <input type="hidden" name="album" value="{{$album->id}}">
            <button type="submit" class="btn btn-primary">Добавить</button>
        </form>
        <h3 class="text-center">Изображения</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Изображение</th>
                    <th>Удалить</th>
                </tr>
            </thead>
            <tbody>
                @forelse($images as $image)
                    <tr>
                        <td><img width="200px" src="{{$image->url}}" alt=""></td>
                        <td>
                            <form action="{{'/admin/albums_images/'.'delete/'.$image->id}}" method="post">
                                {{csrf_field()}}
                                <button class="btn btn-danger" type="submit"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <td>Альбом пуст</td>
                    <td>Альбом пуст</td>
                    <td>Альбом пуст</td>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection