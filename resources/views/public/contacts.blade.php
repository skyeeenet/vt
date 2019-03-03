@extends('public.layouts.basic')

@section('content')
    <div class="container">
        {!! Page::getTextById(3)['value'] !!}
    </div>
@endsection