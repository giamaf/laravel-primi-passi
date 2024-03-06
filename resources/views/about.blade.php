<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $about }}</title>
</head>

<body>
    <h1>Questa è la sezione {{ $about }}</h1>
    <a href="{{ route('home') }}">Torna alla {{ $home }}</a>
</body>

</html>
