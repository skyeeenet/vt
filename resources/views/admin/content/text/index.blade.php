@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <h3 class="mt-3 mb-3">Созданные тексты</h3>
        <a class="btn btn-primary mb-3" href="{{route('admin.content.text.create')}}">Создать текст</a>
        <table class="table">
            <thead>
            <tr>
                <th>ID текста (используйте для вставки)</th>
                <th>Описание</th>
                <th>Редактировать</th>
                <th>Удалить</th>
            </tr>
            </thead>
            <tbody>
            @forelse($texts as $text)
                <tr>
                    <td>{{$text->id}}</td>
                    <td>{{$text->description}}</td>
                    <td><a class="btn btn-primary" href="{{route('admin.content.text').'/edit/'.$text->id}}"><i class="far fa-edit"></i></a></td>
                    <td>
                        <form action="{{route('admin.content.text').'/delete/'.$text->id}}" method="post">
                            {{csrf_field()}}
                            <button class="btn btn-danger" type="submit"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
            <tr>
                <td>Нет текста</td>
                <td>Нет текста</td>
                <td>Нет текста</td>
                <td>Нет текста</td>
            </tr>
            @endforelse
            </tbody>
        </table>
        {{$texts->links()}}
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#body').summernote();
        });
    </script>
@endsection