<ul>
    @foreach ($comics_list as $item)
    <li>{{ $item->title }}</li>
    @endforeach
</ul>