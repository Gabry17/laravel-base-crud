@extends('layouts.app')

@section('main_content')
    <form action="{{ route('comics.store') }}" method= 'post'>
        @csrf
        <div class="title">
            <label for="title">Titolo</label>
            <input type="text" id="title" name="title">
        </div>

        <div class="img">
            <label for="thumb">Immagine</label>
            <input type="text" id="thumb" name="thumb">
        </div>

        <div class="description">
            <label for="description">Descizione</label>
            <input type="text" id="description" name="description">
        </div>

        <div class="genre">
            <label for="type">Genere</label>
            <input type="text" id="type" name="type">
        </div>

        <div class="price">
            <label for="price">Prezzo</label>
            <input type="number" id="price" name="price">
        </div>

        <div class="series">
            <label for="series">Serie</label>
            <input type="text" id="series" name="series">
        </div>

        <div class="data">
            <label for="data">Data</label>
            <input type="text" id="data" name="sale_date">
        </div>

        <button>Genera fumetto</button>
    </form>
@endsection