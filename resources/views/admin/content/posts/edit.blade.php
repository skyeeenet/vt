@extends('admin.layouts.app_admin')

@section('content')
    <div class=" container mt-5">
        <div class="content">
               <form action="{{route('admin.content.posts').'/update/'.$post->id}}" method="post">
                   {{ csrf_field() }}
                   <select name="mini" id="mini" class="form-control">
                       @foreach($images as $image)
                           <option value="{{$image->id}}">{{$image->id}}</option>
                       @endforeach
                   </select>
                   <div class="mb-5">
                       <p>Текущая</p>
                       <img style="max-height: 200px; max-width: 200px;" src="{{$post->image['url']}}" alt="">
                   </div>

                   <div class="form-group">
                       <label for="title">Заголовок</label>
                       <input type="text" class="form-control" name="title" id="title" value="{{$post->title}}">
                   </div>
                   <div class="form-group">
                       <label for="short_body">Краткое описание</label>
                       <input type="text" class="form-control" name="short_body" id="short_body" value="{{$post->short_body}}">
                   </div>
                   <div class="form-group">
                       <label for="body">Содержание</label>
                       <textarea name="body" id="body">{{$post->body}}</textarea>
                   </div>
                   <button class="btn btn-primary" type="submit">Обновить</button>
               </form>
        </div>
    </div>
@endsection