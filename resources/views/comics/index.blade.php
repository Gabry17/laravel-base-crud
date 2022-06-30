<ul>
    @foreach ($comics_list as $item)
    <li><a href="{{ route('comics.show', ['comic' => $item->id]) }}">{{ $item->title }}</a></li>
    @endforeach
</ul>