<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <header>
        <a href="{{ route('comics.create') }}">Crea un fumetto</a>
        @yield('header_content')
    </header>
    
    <main>
        @yield('main_content')
    </main>
</body>
</html>