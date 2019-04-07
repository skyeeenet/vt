@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>{{$post->title}}</h2>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                {!!$post->body!!}
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <p>Автор: {{!$post->author['name']}}</p>
            </div>
        </div>
    </div>
@endsection