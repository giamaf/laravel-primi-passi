<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $home }}</title>
</head>

<body>
    <h1>Questa è la {{ $home }}</h1>
    <ul>
        <a href="{{ route('scopri') }}">
            <li>{{ $scopri }}</li>
        </a>
        <a href="{{ route('contatti') }}">
            <li>{{ $contatti }}</li>
        </a>
        <a href="{{ route('about') }}">
            <li>{{ $about }}</li>
        </a>
    </ul>

</body>

</html>
