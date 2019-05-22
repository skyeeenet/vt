@extends('public.layouts.basic')

@section('title')Контакты - ПГТУ - Кафедра Информатики@endsection
@section('description')Контактные данные для связи с нами. ПГТУ - Кафедра Информатики@endsection

@section('content')
    <div class="container">
        {!! Page::getTextById(3)['value'] !!}
    </div>
@endsection