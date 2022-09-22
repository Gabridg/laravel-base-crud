@extends('layouts.main')



@section('main-content')
<div class="container">
    <h2 class="fw-bold my-4">MODIFICA UN FUMETTO:</h2>

    <form action="{{route('comics.update', $comic->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-6">
                <div class="mb-3">        
                    <label for="title" class="form-label">Titolo Fumetto</label>
                    <input type="text" class="form-control" id="title" placeholder="Titolo fumetto" name="title" value="{{$comic->title}}">
                </div>          
            </div>
            <div class="col-6">
                <div class="mb-3">        
                    <label for="series" class="form-label">Nome Serie</label>
                    <input type="text" class="form-control" id="series" placeholder="Nome serie" name="series" value="{{$comic->series}}">
                </div>          
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="type" class="form-label">Tipologia Fumetto</label>
                    <select class="form-select" id="type" name="type">
                        <option @if ($comic->type == 'comic book') selected @endif>Comic Book</option>
                        <option @if ($comic->type == 'graphic novel') selected @endif>Graphic Novel</option>
                    </select>        
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">        
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" id="price" placeholder="Prezzo" name="price" value="{{$comic->price}}">
                </div>          
            </div>
            <div class="col-6">
                <div class="mb-3">        
                    <label for="sale_date" class="form-label">Data di Vendita</label>
                    <input type="text" class="form-control" id="sale_date" placeholder="Data di vendita" name="sale_date" value="{{$comic->sale_date}}">
                </div>          
            </div>
            <div class="col-6">
                <div class="mb-3">        
                    <label for="thumb" class="form-label">Immagine di Copertina</label>
                    <input type="text" class="form-control" id="thumb" placeholder="Immagine di copertina" name="thumb" value="{{$comic->thumb}}">
                </div>          
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione del Fumetto</label>
                    <textarea class="form-control" id="description" rows="3" name="description">{{$comic->description}}</textarea>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <a class="btn btn-secondary" href="{{route('comics.index')}}">TORNA AI FUMETTI</a>
            <button type="submit" class="btn btn-primary">SALVA</button>
        </div>
    </form>
</div>
@endsection