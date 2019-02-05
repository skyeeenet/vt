@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Группа</th>
                    <th>Редактировать</th>
                    <th>Удалить</th>
                </tr>
            </thead>
            <tbody>
            @forelse($groups as $group)
                <tr>
                    <td>{{$group->id}}</td>
                    <td>{{$group->value}}</td>
                    <td><a class="btn btn-primary" href="{{route('admin.groups').'/edit/'.$group->id}}"><i class="far fa-edit"></i></a></td>
                    <td>
                        <form action="{{route('admin.groups').'/delete/'.$group->id}}" method="post">
                            {{csrf_field()}}
                            <button class="btn btn-danger" type="submit"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>Группы не найдены</td>
                    <td>Группы не найдены</td>
                    <td>Группы не найдены</td>
                    <td>Группы не найдены</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection