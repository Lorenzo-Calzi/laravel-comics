@extends('layout.app')

@section('title', 'Comic page')

@section('main_content')

    <!-- <h1>Comics page</h1> -->

        <div class="comic">
            <div class="bg_blue">
                <div class="container">
                    <img src="{{$comic['thumb']}}" alt="">
                </div>
            </div>

            <!-- Description -->
            <div class="container">
                <div class="desc">
                    <div class="left_desc">
                        <h2>{{ $comic['title'] }}</h2>

                        <div class="availability">
                            <div>
                                <span>U.S. Price: <strong>{{$comic['price']}}</strong></span>
                            </div>
                            <div>
                                <span class="available">Available</span>
                                <strong>Check Availability</strong>
                            </div>  
                        </div>
                        
                        <p>{{ $comic['description'] }}</p>
                    </div>

                    <img src="{{asset('img/adv.jpg')}}" alt=""">
                </div>
            </div> 
            <!-- /Description -->

            <div class="hr"></div>

            <!-- More -->
            <div class="container">
                <div class="more">
                    <div class="talent">
                        <h4>Talent</h4>

                        <div class="paragraph">
                            <span>Arty By</span>

                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt iure minus fugit vel pariatur modi aperiam voluptas quibusdam blanditiis placeat!</p>
                            <!-- $foreach($comics as $index => $comic)
                                var_dump($comic)
                            $endforeach -->
                        </div>

                        <div class="paragraph">
                            <span>Written By</span>

                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt iure minus fugit vel pariatur modi aperiam voluptas quibusdam blanditiis placeat!</p>

                            <!-- $foreach($comics as $index => $comic)
                                var_dump($comic)
                            $endforeach -->
                        </div>
                    </div>

                    <div class="specs">

                        <h4>Specs</h4>
                        <div class="paragraph">
                            <span>Series:</span>
                            <p>{{$comic['series']}}</p>
                        </div>

                        <div class="paragraph">
                            <span>U.S. Price:</span>
                            {{$comic['price']}}
                        </div>

                        <div class="paragraph">
                            <span>On Sale Date:</span>
                            {{$comic['sale_date']}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- More -->

            <!-- Infos -->
            <div class="bg_white">
                <div class="container">
                    <div class="infos">
                        <div class="info" style="border-left: 1px solid rgba(196, 196, 196, 1);">
                            <span>digital comics</span>
                            <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                        </div>

                        <div class="info">
                            <span>shop dc</span>
                            <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">
                        </div>

                        <div class="info">
                            <span>comic shop locator</span>
                            <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">  
                        </div>

                        <div class="info">
                            <span>subscriptions</span>
                            <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Infos -->

        </div>

@endsection