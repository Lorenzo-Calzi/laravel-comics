@extends('layout.app')

@section('header_content')
    <div class="up_header">
        <div class="up_content">
            <span>DC POWER VISA <i class="far fa-registered"></i></span>
            <span>ADDITIONAL DC SITES <i class="fas fa-caret-down"></i></span>
        </div>
    </div>

    <div class="bottom_header">

        <img src="{{asset('img/dc-logo.png')}}" alt="">
        <div>
            <ul>
                <li>CHARACTERS</li>
                <li>COMICS</li>
                <li>MOVIES</li>
                <li>TV</li>
                <li>GAMES</li>
                <li>COLLECTIBLES</li>
                <li>VIDEOS</li>
                <li>FANS</li>
                <li>NEWS</li>
                <li>SHOP <i class="fas fa-caret-down"></i></li>
            </ul>
        </div>

        <span>Search <i class="fas fa-search"></i></span>
    </div>
@endsection


<!-- Jumbotron -->
@section('main_content')
<div class="jumbotron"></div>
<!-- /Jumbotron -->

<!-- Comics -->
<div class="comics">
    <div class="genre">
        <span>Current Series</span>
    </div>

    <div class="container_card">
        @foreach($comics as $element)
            <div class="card">
                <img src="{{$element['thumb']}}" alt="">
                <span>{{$element['series']}}</span>
            </div>    
        @endforeach
    </div>

    <div class="prova">
        <span>LOAD MORE</span> 
    </div>
</div>
@endsection
<!-- /Comics -->
