@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <a href="{{route('admin.interview.create')}}" class="btn btn-primary mb-3">Создать интервью</a>
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Заголовок</th>
                    <th>Редактировать</th>
                    <th>Удалить</th>
                </tr>
            </thead>
            <tbody>
            @forelse($interviews as $interview)
                <tr>
                    <td>{{$interview->id}}</td>
                    <td>{{$interview->seo_h1}}</td>
                    <td><a class="btn btn-primary" href="{{route('admin.interviews').'/edit/'.$interview->id}}"><i class="far fa-edit"></i></a></td>
                    <td>
                        <form action="{{route('admin.interviews').'/delete/'.$interview->id}}" method="post">
                            {{csrf_field()}}
                            <button class="btn btn-danger" type="submit"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>Интервью не найдены</td>
                    <td>Интервью не найдены</td>
                    <td>Интервью не найдены</td>
                    <td>Интервью не найдены</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        {{ $interviews->links() }}
    </div>
@endsection