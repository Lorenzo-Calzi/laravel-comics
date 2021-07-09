@extends('layout.app')

@section('title', 'Comic page')

@section('main_content')

    <!-- <h1>Comics page</h1> -->

        <div class="comic">
            <div class="bg-blue">
                <img src="{{$comic['thumb']}}" alt="">
            </div>

            <div class="desc">
                <div class="left_desc">
                    {{ $comic['title'] }}

                    <div class="availabilty">
                        <span>U.S. Price: {{$comic['price']}}</span>
                        <span>Available</span>
                        <span>Check Availability</span>
                    </div>
                    
                    <p>{{ $comic['description'] }}</p>
                </div>

                <img src="{{asset('img/adv.jpg')}}" alt=""">
            </div>

            <div class="more">
                <div class="talent">
                    <h4>Talent</h4>

                    <div>
                        <span>Arty By</span>

                        <!-- $foreach($comics as $index => $comic)
                            var_dump($comic)
                        $endforeach -->
                    </div>

                    <div>
                        <span>Written By</span>

                        <!-- $foreach($comics as $index => $comic)
                            var_dump($comic)
                        $endforeach -->
                    </div>
                </div>

                <div class="specs">
                    <div>
                        <span>Series:</span>
                        {{$comic['series']}}
                    </div>

                    <div>
                        <span>U.S. Price:</span>
                        {{$comic['price']}}
                    </div>

                    <div>
                        <span>On Sale Date:</span>
                        {{$comic['sale_date']}}
                    </div>
                </div>
            </div>
        </div>

        <div class="infos">
            <div class="info">
                <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt=""> 
                <!-- <img src="{{asset('img/cta-icons.png')}}" alt=""> -->
                <span>digital comics</span>
            </div>

            <div class="info">
                <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">
                <span>shop dc</span>
            </div>

            <div class="info">
                <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">  
                <span>comic shop locator</span>
            </div>

            <div class="info">
                <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="">
                <span>subscriptions</span>
            </div>
        </div>

@endsection