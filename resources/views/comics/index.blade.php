@extends('layouts.app')

@section('header_content')
<a href="{{ route('home') }}">Torna alla HOME</a>
@endsection


@section('main_content')
<div class="container">
    <ul>
        @foreach ($comics_list as $item)
        <li><a href="{{ route('comics.show', ['comic' => $item->id]) }}">{{ $item->title }}</a></li>
        @endforeach
    </ul>
</div>
@endsection
