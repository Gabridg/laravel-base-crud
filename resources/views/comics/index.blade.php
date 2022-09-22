@extends('layouts.main')

@section('main-content')
<main class="main-content">
    <div class="container">
        <div class="d-flex">

            @forelse($comics as $comic)
            <div class="comics-card">
                <div class="comics-img">
                    <a href="{{route('comics.show', $comic->id)}}">
                        <img src="{{$comic->thumb}}" alt="{{$comic->title}}" class="comics">
                    </a>
                </div>
                <div class="comics-info">
                    <strong><p class="comics-text comics-title">{{$comic->series}}</p></strong>
                    <p class="comics-text comics-title">{{$comic->title}}</p>
                    <p class="comics-text">{{$comic->type}}</p>
                    <p class="comics-text price">{{$comic->price}}</p>
                    <p class="comics-text">{{$comic->sale_date}}</p>
                    <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary my-3">Scopri di più</a>
                    <div class="d-flex w-100 align-items-center justify-content-between">
                        <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-warning my-3 ms-2">Modifica</a>
                        <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                            @method('DELETE')
                            @csrf      
                            <button type="submit" class="btn btn-danger my-3 me-2"><strong>X</strong></button>
                        </form>
                    </div>
                </div>
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