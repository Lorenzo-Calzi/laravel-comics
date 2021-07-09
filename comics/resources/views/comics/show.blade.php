@extends('layout.app')

@section('title', 'Comic page')

@section('main_content')

    <h1>Comics page</h1>

        <div class="comic">
            <img src="{{$comic['thumb']}}" alt="">
            {{ $comic['title'] }}
        </div>

@endsection