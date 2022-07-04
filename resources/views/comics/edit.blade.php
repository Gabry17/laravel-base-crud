@extends('layouts.app')

@section('main_content')
    <h1>Modifica fumetto</h1>
    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('comics.update', ['comic' => $comic_update->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="title">
            <label for="title">Titolo:</label>
            <input type="text" name="title" id="title" value="{{ old('title') ? old('title') : $comic_update->title }}">
        </div>
        <div class="img">
            <label for="thumb">Immagine:</label>
            <input type="text" name="thumb" id="thumb" value="{{ old('thumb') ? old('thumb') : $comic_update->thumb }}">
        </div>
        <div class="desc">
            <label for="description">Descrizione:</label>
            <input type="text" name="description" id="description" value="{{ old('description') ? old('description') : $comic_update->description }}">
        </div>
        <div class="genre">
            <label for="type">Genere:</label>
            <input type="text" name="type" id="type" value="{{ old('type') ? old('type') : $comic_update->type }}">
        </div>
        <div class="price">
            <label for="price">Prezzo:</label>
            <input type="number" name="price" id="price" value="{{ old('price') ? old('price') : $comic_update->price }}">
        </div>
        <div class="series">
            <label for="series">Serie:</label>
            <input type="text" name="series" id="series" value="{{ old('series') ? old('series') : $comic_update->series }}">
        </div>
        <div class="date">
            <label for="sale_date">Data:</label>
            <input type="text" name="sale_date" id="sale_date" value="{{ old('sale_date') ? old('sale_date') : $comic_update->sale_date }}">
        </div>
        <button>Modifica</button>
    </form>
@endsection