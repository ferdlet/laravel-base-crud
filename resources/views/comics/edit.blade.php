@extends('layouts.base')

@section('pageTitle')
    Comics - Modifica
@endsection

@section('pageContent')


    <div class="container">
        <h1>Modifica: {{$comic->title}}</h1>
        <form action="{{route('comics.update', $comic->id)}}" method="POST">
            @csrf
            @method("PUT")

            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo" value="{{$comic->title}}">
            </div>
            <div class="form-group">
                <label for="description">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="8" placeholder="Inserisci la descrizione">{{$comic->description}}</textarea>
            </div>
            <div class="form-group">
                <label for="image">Link Immagine</label>
                <input type="text" class="form-control" id="image" name="thumb" placeholder="Inserisci il link dell'immagine" value="{{$comic->thumb}}">
            </div>
            <div class="form-group">
                <label for="price">Prezzo</label>
                <input type="number" step="0.01"  class="form-control" id="price" name="price" placeholder="Inserisci il prezzo" value="{{$comic->price}}">
            </div>
            <div class="form-group">
                <label for="series">Series</label>
                <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie" value="{{$comic->series}}">
            </div>
            <div class="form-group">
                <label for="sale_date">sale date</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
            </div>
            <div class="form-group">
                <label for="type">Tipo</label>
                <select class="form-control form-control-md" id="type" name="type">
                    <option {{$comic->type == "graphic novel" ? 'selected' : ''}} value="graphic novel">graphic novel</option>
                    <option {{$comic->type == "comic book" ? 'selected' : ''}} value="comic book">comic book</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Modifica</button>
        </form>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

@endsection