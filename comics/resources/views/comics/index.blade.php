@extends('layout.app')


@section('main_content')

<!-- Jumbotron -->
<div class="jumbotron"></div>
<!-- /Jumbotron -->

<!-- Comics -->
<div class="comics">
    <div class="genre">
        <span>Current Series</span>
    </div>

    <div class="container_card">
        @foreach($comics as $index => $comic)
            <div class="card">
                <a href="{{ route('comic', ['id' => $index] }}">
                    <img src="{{$comic['thumb']}}" alt="">;
                    <span>{{$comic['series']}}</span>;
                </a>
            </div>    
        @endforeach
    </div>

    <div class="button">
        <span>LOAD MORE</span> 
    </div>
</div>
<!-- /Comics -->

<!-- Infos -->
<div class="infos">
    <div class="info">
        <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
        <span>digital comics</span>
    </div>

    <div class="info">
        <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="">
        <span>dc merchandise</span>
    </div>

    <div class="info">
        <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">
        <span>subscription</span>
    </div>

    <div class="info">
        <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">  
        <span>comic shop locator</span>
    </div>

    <div class="info">
        <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="" style="height: 40px;">
        <span>dc power visa</span>
    </div>
</div>
<!-- /Infos -->

@endsection


