@extends('layouts.base')

@section('pageTitle')
    Comics
@endsection

@section('pageContent')
 <ul>
    @foreach ($comics as $comic)
        <li>
            <h2>{{$comic->title}}</h2>
            <p>{{$comic->description}}</p>
            <img src="{{$comic->thumb}}" alt="">
            <h3>€ {{$comic->price}}</h3>
            <a href="{{route('comics.show', $comic->id)}}">Visualizza</a>
        </li>
    @endforeach
 </ul>
@endsection