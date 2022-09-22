@extends('layouts.main')

@section('main-content')
<main class="main-content">
    <div class="container">
        <div class="d-flex">


            <div class="comic-card">
                <div class="row">
                    <div class="col-3">
                        <img src="{{$comic->thumb}}" alt="{{$comic->title}}" class="comic">
                    </div>
                    <div class="col-9">
                        <h2 class="comic-text comic-title">{{$comic->series}}</h2>
                        <strong><p class="comic-text comic-title">{{$comic->title}}</p></strong>
                        <p class="comic-text">{{$comic->type}}</p>
                        <p class="comic-text">{{$comic->description}}</p>
                        <p class="comic-text price">{{$comic->price}}</p>
                        <p class="comic-text">{{$comic->sale_date}}</p>
                        <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-warning my-3">Modifica</a>
                        <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                            @method('DELETE')
                            @csrf      
                            <button type="submit" class="btn btn-danger my-3">Elimina</button>
                        </form>
                        <a href="{{route('comics.index')}}" class="btn btn-secondary my-3">Indietro</a>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</main>
@endsection