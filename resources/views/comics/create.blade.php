@extends('layouts.base')

@section('pageTitle')
    Comics - Create
@endsection

@section('pageContent')


    <div class="container">
        <form action="{{route('comics.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo">
            </div>
            <div class="form-group">
                <label for="description">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="8" placeholder="Inserisci la descrizione"></textarea>
            </div>
            <div class="form-group">
                <label for="image">Link Immagine</label>
                <input type="text" class="form-control" id="image" name="thumb" placeholder="Inserisci il link dell'immagine">
            </div>
            <div class="form-group">
                <label for="price">Prezzo</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo">
            </div>
            <div class="form-group">
                <label for="series">Series</label>
                <input type="number" class="form-control" id="series" name="series" placeholder="Inserisci la serie">
            </div>
            <div class="form-group">
                <label for="sale_date">sale date</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date">
            </div>
            <div class="form-group">
                <label for="type">Tipo</label>
                <select class="form-control form-control-md" id="type" name="type">
                    <option value="graphic novel">graphic novel</option>
                    <option value="comic book">comic book</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Crea</button>
        </form>
    </div>

@endsection