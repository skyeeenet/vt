@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <form action="{{route('admin.socials.store')}}" method="post">
            {{csrf_field()}}
            @forelse($socials as $social)
                <div class="form-group">
                    <label for="{{$social->id}}">{{$social->value}}</label>
                    <p><img height="30px" width="30px" src="{{$social->image['url']}}" alt="{{$social->value}}">:
                        <input id="{{$social->id}}" name="{{$social->id}}" type="text" value="{{$user->social}}" placeholder="id пользователя">
                    </p>
                </div>
            @empty
            <p>Социальные сети временно не поддерживаются</p>
            @endforelse

            <button class="btn btn-primary" type="submit">обновить</button>
        </form>
    </div>
@endsection