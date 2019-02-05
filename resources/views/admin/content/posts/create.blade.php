@extends('admin.layouts.app_admin')

@section('content')
    <div class=" container mt-5">
        <div class="content">
               <form action="{{route('admin.content.posts.store')}}" method="post">
                   {{ csrf_field() }}
                   <select name="mini" id="mini" class="form-control">
                       @foreach($images as $image)
                           <option value="{{$image->id}}">{{$image->id}}</option>
                       @endforeach
                   </select>
                   <div class="form-group">
                       <label for="title">Заголовок</label>
                       <input type="text" class="form-control" name="title" id="title">
                   </div>
                   <div class="form-group">
                       <label for="body">Содержание</label>
                       <textarea name="body" id="body"></textarea>
                   </div>
                   <button class="btn btn-primary" type="submit">Создать</button>
               </form>
        </div>
    </div>
@endsection