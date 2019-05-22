@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Шаблон</th>
                    <th>Описание</th>
                    <th>Редактировать</th>
                    <th>Удалить</th>
                </tr>
            </thead>
            <tbody>
            @forelse($templates as $template)
                <tr>
                    <td>{{$template->id}}</td>
                    <td>{{$template->name}}</td>
                    <td>{{$template->description}}</td>
                    <td><a class="btn btn-primary" href="{{route('admin.template.edit', ['template' => $template->id])}}"><i class="far fa-edit"></i></a></td>
                    <td>
                        <form action="{{route('admin.template.delete', ['template' => $template->id])}}" method="post">
                            {{csrf_field()}}
                            <button class="btn btn-danger" type="submit"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>Шаблоны не найдены</td>
                    <td>Шаблоны не найдены</td>
                    <td>Шаблоны не найдены</td>
                    <td>Шаблоны не найдены</td>
                    <td>Шаблоны не найдены</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection