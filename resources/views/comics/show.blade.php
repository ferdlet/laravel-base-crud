@extends('layouts.base')

@section('pageTitle')
    Comics
@endsection

@section('pageContent')

    <div class="container">
        <h2>{{$comic->title}}</h2>
        <p>{{$comic->description}}</p>
        <img src="{{$comic->thumb}}" alt="">
        <h3>€ {{$comic->price}}</h3>
        <a href="{{route('comics.index')}}">
            <button type="button" class="btn btn-primary">Torna ai comics</button>
        </a>
        <a href="{{route("comics.edit", $comic->id)}}">
            <button type="button" class="btn btn-success">Modifica</button>
        </a>
        <form action="{{route("comics.destroy", $comic->id)}}" method="POST">
            @csrf
            @method("DELETE")
            <a href="{{route("comics.destroy", $comic->id)}}">
                <button type="submit" class="btn btn-warning">Elimina</button>
            </a>
        </form>
    </div>
@endsection