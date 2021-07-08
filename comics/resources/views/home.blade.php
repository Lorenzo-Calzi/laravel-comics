@extends('layout.app')

<!-- HEADER -->
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
<!-- /HEADER -->



<!-- /MAIN -->
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
        @foreach($comics as $element)
            <div class="card">
                <img src="{{$element['thumb']}}" alt="">
                <span>{{$element['series']}}</span>
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
<!-- /MAIN -->


<!-- FOOTER -->
@section('footer_content')

<!-- Credits -->
<div class="credits">
    <div class="credit_left">
        <div class="container_left">
            <div class="list_left">
                <ul> 
                    <h3>DC COMICS</h3>
                    <li>Characters</li>
                    <li>Comics</li>
                    <li>Movies</li>
                    <li>TV</li>
                    <li>Games</li>
                    <li>Videos</li>
                    <li>News</li>
                </ul>

                <ul> 
                    <h3>SHOP</h3>
                    <li>Shop DC</li>
                    <li>Shop DC Collectibles</li>
                </ul>
            </div>
            
            <div class="other_list">
                <ul> 
                    <h3>DC</h3> 
                    <li>Terms Of Use</li>
                    <li>Privacy policy(New)</li>
                    <li>Ad Choices</li>
                    <li>Advertising</li>
                    <li>Jobs</li>
                    <li>Subscriptions</li>
                    <li>Talent Workshops</li>
                    <li>CPSC Certificates</li>
                    <li>Ratings</li>
                    <li>Shop Help</li>
                    <li>Contact Us</li>
                </ul>
            </div>

            <div class="other_list">
                <ul> 
                    <h3>SITES</h3>
                    <li>DC</li>
                    <li>MAD Magazine</li>
                    <li>DC Kids</li>
                    <li>DC Universe</li>
                    <li>DC Power Visa</li>
                </ul>
            </div>
        </div>

        <div class="copyright">
            <p>All Site Content TM and © 2020 DC Entertainment, unless otherwise <a href="#">noted here</a>. All rights reserved.</p>
            <a href="#">Cookies Setting</a>
        </div>
    </div>

    <div class="credit_right">
        <img src="{{asset('img/dc-logo-bg.png')}}" alt="">
    </div>
</div>
<!-- /Credits -->

<!-- Sign-up -->
<div class="sign">
    <div class="container_sign">
        <div class="sign_left">
            <span>SIGN-UP NOW!</span>
        </div>

        <div class="sign_right">
            <a href="#">FOLLOW US</a>
            <img src="{{asset('img/footer-facebook.png')}}" alt="">
            <img src="{{asset('img/footer-twitter.png')}}" alt="">
            <img src="{{asset('img/footer-youtube.png')}}" alt="">
            <img src="{{asset('img/footer-pinterest.png')}}" alt="">
            <img src="{{asset('img/footer-periscope.png')}}" alt="">
        </div>
    </div>
</div>

<!-- Sign-up -->

@endsection
<!-- /FOOTER -->
