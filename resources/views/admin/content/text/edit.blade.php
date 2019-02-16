@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <h3 class="mt-3 mb-3">Редактирование текста № {{$text->id}}</h3>
        <form action="{{route('admin.content.text').'/update/'.$text->id}}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="d-block" for="description">Описание</label>
                <textarea name="description" id="description" cols="40">{{$text->description}}</textarea>
            </div>
            <div class="form-group">
                <label for="body">Содержание</label>
                <textarea name="body" id="body">{{$text->value}}</textarea>
            </div>
            <button class="btn btn-primary" type="submit">Обновить</button>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#body').summernote();
        });
    </script>
@endsection