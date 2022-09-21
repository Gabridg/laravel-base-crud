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
                    <li><a href="{{route('home')}}" class="@if(Route::is('home')) active @endif">HOME</a></li>
                    <li><a href="{{route('comics.index')}}" class="@if(Route::is('comics.index')) active @endif">COMICS</a></li>
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