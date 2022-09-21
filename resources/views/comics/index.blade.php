@extends('layouts.main')

@section('main-content')
<main class="main-content">
    <div class="container">
        <div class="d-flex">

            @forelse($comics as $comic)
            <div class="comics-card">
                     <a href="{{route('comics.show', $comic->id)}}">
                        <img src="{{$comic->thumb}}" alt="{{$comic->title}}" class="comics">
                    </a>
                    <strong><p class="comics-text comics-title">{{$comic->series}}</p></strong>
                    <p class="comics-text comics-title">{{$comic->title}}</p>
                    <p class="comics-text">{{$comic->type}}</p>
                    <p class="comics-text price">{{$comic->price}}</p>
                    <p class="comics-text">{{$comic->sale_date}}</p>
                </div>
            @empty
            <h2>Attualmente non sono presenti fumetti</h2>
            @endforelse
        </div>
        <div class="text-center">
            <a href="{{route('comics.create')}}" class="btn btn-primary my-5">Aggiungi fumetto!</a>
        </div>
    </div>
</main>
@endsection