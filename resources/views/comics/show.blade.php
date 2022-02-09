@extends('layouts.base')

@section('pageTitle')
    Comics
@endsection

@section('pageContent')

    <h2>{{$comic->title}}</h2>
    <p>{{$comic->description}}</p>
    <img src="{{$comic->thumb}}" alt="">
    <h3>€ {{$comic->price}}</h3>
    <a href="{{route('comics.index')}}">Torna ai comics</a>
@endsection