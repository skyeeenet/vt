@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <form action="{{route('admin.page.store')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="seo_title">SEO Заголовок</label>
                <input type="text" class="form-control" id="seo_title" name="seo_title">
            </div>
            <div class="form-group">
                <label for="seo_description">SEO Описание</label>
                <input type="text" class="form-control" id="seo_description" name="seo_description">
            </div>
            <div class="form-group">
                <label for="seo_h1">Заголовок первого уровня (выводится на странице)</label>
                <input type="text" class="form-control" id="seo_h1" name="seo_h1">
            </div>
            <div class="form-group">
                <label for="template_id">Шаблон</label>
                <select class="form-control" name="template_id" id="template_id">
                    @foreach($templates as $template)
                        <option value="{{$template->id}}">{{$template->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="body">Содержимое</label>
                <textarea name="content" id="body"></textarea>
            </div>
            <button class="btn btn-primary" type="submit">Создать</button>
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