@extends('layouts.app')
@section('header_content')
Torna ai titoli
@endsection

@section('main_content')
    <h2>Titolo: {{ $comic_info->title }}</h2>
    <img src="{{ $comic_info->thumb }}" alt="">
    <h2>Descrizione:</h2>
    <p>{{ $comic_info->description }}</p>
    <h2>Genere:</h2>
    <p>{{ $comic_info->type }}</p>
    <h2>Prezzo:</h2>
    <p>{{ $comic_info->price }}</p>
    <h2>Serie:</h2>
    <p>{{ $comic_info->series }}</p>
    <h2>Data:</h2>
    <p>{{ $comic_info->sale_date }}</p>
@endsection