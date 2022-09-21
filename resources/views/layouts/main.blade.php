<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS -->
    <link rel="stylesheet" href=" {{ asset('css/app.css') }}">

</head>
<body>
<header>
    <div id="notify">
        <div class="container">    
            <span>DC POWER VISA&copy</span>
            <span>OTHER DC SITES</span>
        </div>
    </div>
    <div class="container">
        <div class="header-nav">
            <figure>
                <img src="{{ asset('images/dc-logo.png')}} " alt="">
            </figure>
                <ul>
                    <li><a href="{{ route('characters') }}">CHARACTERS</a></li>
                    <li><a href="{{route('home')}}" class="active">COMICS</a></li>
                    <li><a href="#">MOVIES</a></li>
                    <li><a href="#">TV</a></li>
                    <li><a href="#">GAMES</a></li>
                    <li><a href="#">COLLECTIBLES</a></li>
                    <li><a href="#">COLLECTIBLES</a></li>
                    <li><a href="#">FANS</a></li>
                    <li><a href="#">NEWS</a></li>
                    <li><a href="#">SHOP</a></li>
                </ul>
        </div>
    </div>
</header>
<main>
    @yield('main-conten')
</main>
<footer>
    <div class="main-footer">
            <div class="container d-flex">
                <div class="DC-shop">
                    <div class="links">
                        <h4>DC COMICS</h4>
                        <ul>
                            <li><a href="#">Characters</a></li>
                            <li><a href="#">Comics</a></li>
                            <li><a href="#">Movies</a></li>
                            <li><a href="#">TV</a></li>
                            <li><a href="#">Games</a></li>
                            <li><a href="#">Videos</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                    </div>
                    <div class="links">
                        <h4>DC</h4>
                        <ul>
                            <li><a href="#">Terms Of Use</a></li>
                            <li><a href="#">Privacy policy(New)</a></li>
                            <li><a href="#">Ad Choices</a></li>
                            <li><a href="#">Advertising</a></li>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Subscriptions</a></li>
                            <li><a href="#">Talent Workshops</a></li>
                            <li><a href="#">CPSC Certificates</a></li>
                            <li><a href="#">Ratings</a></li>
                            <li><a href="#">Shop Help</a></li>
                            <li><a href="#">Contact US</a></li>
                        </ul>
                    </div>
                    <div class="links">
                        <h4>SITES</h4>
                        <ul>
                            <li><a href="#">DC</a></li>
                            <li><a href="#">MAD Magazine</a></li>
                            <li><a href="#">DC Kids</a></li>
                            <li><a href="#">DC Universe</a></li>
                            <li><a href="#">DC Power Visa</a></li>
                        </ul>
                    </div>
                    <br>
                    <div class="links" id="shop">
                        <h4>SHOP</h4>
                        <ul>
                            <li><a href="#">Shop DC</a></li>
                            <li><a href="#">Shop DC Collectibles</a></li>
                        </ul>
                    </div>
                </div>
                <figure>
                    <img src="{{asset('images/dc-logo-bg.png')}}" alt="logo DC background" id="logo-bg">
                </figure>
            </div>
        </div>
    </div>
    <div class="bottom-footer">
        <div class="container">
            <div class="d-flex">
                <div class="btn-sign-up">
                    <button>SIGN-UP NOW!</button>
                </div>
                <div class="follow-us">
                    <h4>FOLLOW US</h4>
                    <ul>
                        <li><img src="{{asset('images/footer-facebook.png')}}" alt="facebook"></li>
                        <li><img src="{{asset('images/footer-twitter.png')}}" alt="twitter"></li>
                        <li><img src="{{asset('images/footer-youtube.png')}}" alt="youtube"></li>
                        <li><img src="{{asset('images/footer-pinterest.png')}}" alt="pinterest"></li>
                        <li><img src="{{asset('images/footer-periscope.png')}}" alt="periscope"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>