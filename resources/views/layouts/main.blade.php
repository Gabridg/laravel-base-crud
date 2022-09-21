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
                    <li><a href="#">CHARACTERS</a></li>
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
</body>
</html>
