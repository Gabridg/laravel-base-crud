@extends('layouts.main')



@section('main-content')
<div class="container">
    <h2 class="fw-bold my-4">AGGIUNGI UN FUMETTO:</h2>

    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="mb-3">        
                    <label for="title" class="form-label">Titolo Fumetto</label>
                    <input type="text" class="form-control" id="title" placeholder="Titolo fumetto" name="title">
                </div>          
            </div>
            <div class="col-6">
                <div class="mb-3">        
                    <label for="series" class="form-label">Nome Serie</label>
                    <input type="text" class="form-control" id="series" placeholder="Nome serie" name="series">
                </div>          
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="type" class="form-label">Tipologia Fumetto</label>
                    <select class="form-select" id="type" name="type">
                        <option>Comic Book</option>
                        <option>Graphic Novel</option>
                    </select>        
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">        
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" id="price" placeholder="Prezzo" name="price">
                </div>          
            </div>
            <div class="col-6">
                <div class="mb-3">        
                    <label for="sale_date" class="form-label">Data di Vendita</label>
                    <input type="text" class="form-control" id="sale_date" placeholder="Data di vendita" name="sale_date">
                </div>          
            </div>
            <div class="col-6">
                <div class="mb-3">        
                    <label for="thumb" class="form-label">Immagine di Copertina</label>
                    <input type="text" class="form-control" id="thumb" placeholder="Immagine di copertina" name="thumb">
                </div>          
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione del Fumetto</label>
                    <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <a class="btn btn-secondary" href="{{route('comics.index')}}">TORNA AI FUMETTI</a>
            <button type="submit" class="btn btn-primary">AGGIUNGI</button>
        </div>
    </form>
</div>
@endsection