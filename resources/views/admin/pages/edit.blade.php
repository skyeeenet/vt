@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <form action="{{route('admin.page.update', $page->id)}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="seo_title">SEO Заголовок</label>
                <input type="text" required class="form-control" id="seo_title" name="seo_title" value="{{$page->seo_title}}">
            </div>
            <div class="form-group">
                <label for="seo_description">SEO Описание</label>
                <input type="text" required class="form-control" id="seo_description" name="seo_description" value="{{$page->seo_description}}">
            </div>
            <div class="form-group">
                <label for="seo_h1">Заголовок первого уровня (выводится на странице)</label>
                <input type="text" required class="form-control" id="seo_h1" name="seo_h1" value="{{$page->seo_h1}}">
            </div>
            <div class="form-group">
                <label for="seo_h1">Ссылка</label>
                <input type="text" required class="form-control" id="slug" name="slug" value="{{$page->slug}}">
            </div>
            <div class="form-group">
                <label for="template_id">Шаблон</label>
                <select class="form-control" name="template_id" id="template_id">
                    @foreach($templates as $template)
                        <option @if($template->id == $page->template_id) selected @endif value="{{$template->id}}">{{$template->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="body">Содержимое</label>
                <textarea name="content" id="body">{{$page->content}}</textarea>
            </div>
            <button class="btn btn-primary" type="submit">Обновить</button>
        </form>
        <h3 class="text-center mt-3 mb-3">Произвольные поля</h3>
        <table class="table">
            <thead>
            <tr>
                <td>Id (исп. для вставки)</td>
                <td>Значение</td>
                <td>Описание</td>
                <th>Редактировать</th>
                <th>Удалить</th>
            </tr>
            </thead>
            <tbody>
            @forelse($fields as $field)
                <tr>
                    <td>{{$field->id}}</td>
                    <td>{{$field->value}}</td>
                    <td>{{$field->description}}</td>
                    <td><a class="btn btn-primary" href="{{route('admin.field.edit', ['field' => $field->id])}}"><i class="far fa-edit"></i></a></td>
                    <td>
                        <form action="{{route('admin.field.delete', ['field' => $field->id])}}" method="post">
                            {{csrf_field()}}
                            <button class="btn btn-danger" type="submit"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>Полей нет</td>
                    <td>Полей нет</td>
                    <td>Полей нет</td>
                    <td>Полей нет</td>
                    <td>Полей нет</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        <form action="{{route('admin.field.store')}}" method="POST">
            <input type="hidden" name="page_id" value="{{$page->id}}">
            @csrf
            <div class="form-group">
                <label for="field">Значение</label>
                <input required class="form-control" type="text" id="field" name="value">
            </div>
            <div class="form-group">
                <label for="description">Описание</label>
                <input required class="form-control" type="text" id="description" name="description">
            </div>
            <button class="btn btn-primary" type="submit">Добавить</button>
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