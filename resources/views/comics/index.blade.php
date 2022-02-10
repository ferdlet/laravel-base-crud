@extends('layouts.base')

@section('pageTitle')
    Comics
@endsection

@section('pageContent')
<div class="container">
    <a href="{{route("comics.create")}}">
        <button type="button" class="btn btn-success">Aggiungi nuovo fumetto</button>
    </a>
    <ul>
        @foreach ($comics as $comic)
            <li>
                <h2>{{$comic->title}}</h2>
                <p>{{$comic->description}}</p>
                <img src="{{$comic->thumb}}" alt="">
                <h3>€ {{$comic->price}}</h3>
                <a href="{{route('comics.show', $comic->id)}}">Visualizza</a>
                <a href="{{route("comics.edit", $comic->id)}}">Modifica</a>
                <form action="{{route("comics.destroy", $comic->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <a href="{{route("comics.destroy", $comic->id)}}">Elimina</a>
                </form>
            </li>
        @endforeach
    </ul>
</div>
@endsection