@extends('layouts.app')
@section('header_content')
<a href="{{ route('comics.index') }}">Torna ai titoli</a>
<a href="{{ route('home') }}">Torna alla HOME</a>
@endsection

@section('main_content')
    <div class="container">
        <div class="card">
            <h2>Titolo: {{ $comic_info->title }}</h2>
            <img src="{{ $comic_info->thumb }}" alt="{{ $comic_info->title }}">
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
        </div>
        <a href="{{ route('comics.edit', ['comic' => $comic_info->id]) }}">MODIFICA</a>
        <button class="eliminate1" 
        onclick="
        document.querySelector('.eliminate2').classList.remove('d-none')
        document.querySelector('.eliminate1').classList.add('d-none')
        " 
        >Cancella</button>
        <form action="{{ route('comics.destroy', [ 'comic' => $comic_info->id ]) }}" method="POST">
            @csrf
            @method('DELETE')
            <div class="eliminate2 d-none">
                <p>Sei sicuro di voler eliminare?</p>
                <button >Cancella</button>
            </div>
        </form>
    </div>
@endsection