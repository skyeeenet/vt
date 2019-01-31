@extends('admin.layouts.app_admin')

@section('title') Навигация @endsection

@section('content')
        <div class="container">
            @component('admin.components.breadcrumbs')
                @slot('parent') Главная @endslot
                @slot('active') Меню @endslot
            @endcomponent
        </div>
    <div class="container">
        <div class="jumbotron text-center">
            <h2>Редактирование Навигации</h2>
            <h4>Текущие меню навигации</h4>
            <form action="{{ route('admin.header.menu.create') }}" method="post">
                {{csrf_field()}}
                <p>Название пункта меню: <input type="text" name="item_menu"></p>
                <p>URL адрес: <input type="text" name="url_menu"></p>
                <p><input class="btn btn-primary" type="submit" value="Добавить пункт меню"></p>
            </form>
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th>Название пункта</th>
                        <th>URL Адрес</th>
                        <th>Редактировать</th>
                        <th>Удалить</th>
                    </tr>
                </thead>
                <tbody>
                @if(isset($navbar))
                @forelse($navbar as $element)
                    <tr>
                        <td>{{$element->item}}</td>
                        <td>{{$element->url}}</td>
                        <td><a href="{{ '/admin/header/submenu/'.$element->id }}"><i class="fas fa-edit"></i></a></td>
                        <td>
                            <form action="{{ route('admin.header.menu').'/destroy/'.$element->id }}" method="post">
                                {{csrf_field()}}
                                <input type="submit">
                            </form>
                        </td>
                        <!--<td><i class="far fa-trash-alt"></i></td>-->
                    </tr>
                @empty
                    <tr>
                        <td>Нет пунктов меню</td>
                    </tr>
                @endforelse
                    @else
                <tr>
                    <td><b>Данные недоступны</b></td>
                    <td><b>Данные недоступны</b></td>
                </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection