@extends('layouts.main')

@section('main-content')
<main class="main-content">
    <div class="container">
        <div class="d-flex">

            @forelse($comics as $comic)
            <div class="comic-card">
                <img src="{{$comic->thumb}}" alt="" class="comic">
                <p class="comic-text">{{$comic->series}}</p>
                <p class="comic-text">{{$comic->title}}</p>
                <p class="comic-text">{{$comic->type}}</p>
                <p class="comic-text">{{$comic->description}}</p>
                <p class="comic-text">{{$comic->price}}</p>
                <p class="comic-text">{{$comic->sale_date}}</p>
            </div>
            @empty
            <h2>Attualmente non sono presenti fumetti</h2>
            @endforelse
        </div>
    </div>
</main>
@endsection