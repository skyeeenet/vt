@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <h2 class="text-center">Новости</h2>
        <a class="btn btn-primary" href="{{route('admin.content.posts.create')}}">Создать новый пост</a>
        <h2 class="text-center">Все посты</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>№</th>
                    <th>Автор</th>
                    <th>Дата создания</th>
                    <th>Миниатюра</th>
                    <th>Заголовок</th>
                    <th>Краткое описание</th>
                    <th>Редактировать</th>
                    <th>Удалить</th>
                </tr>
            </thead>
            <tbody>
            @forelse($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->author['name']}}<br>{{ $post->author['email'] }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td><img style="max-width: 200px; max-height: 200px;" src="{{ $post->image['url'] }}" alt="mini-image"></td>
                    <td><a href="{{route('admin.content.posts').'/'.$post->id}}">{{$post->title}}</a></td>
                    <td><p>{{$post->short_body}}</p></td>
                    <td><a class="btn btn-primary" href="{{route('admin.content.posts').'/edit/'.$post->id}}"><i class="far fa-edit"></i></a></td>
                    <td>
                        <form action="{{route('admin.content.posts').'/delete/'.$post->id}}" method="post">
                            {{csrf_field()}}
                            <button class="btn btn-danger" type="submit"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td>Данные отсутствуют</td>
                    <td>Данные отсутствуют</td>
                    <td>Данные отсутствуют</td>
                    <td>Данные отсутствуют</td>
                    <td>Данные отсутствуют</td>
                    <td>Данные отсутствуют</td>
                    <td>Данные отсутствуют</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection