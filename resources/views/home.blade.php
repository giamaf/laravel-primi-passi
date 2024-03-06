<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $label_home }}</title>
</head>

<body>

    <h1>Questa è la {{ $label_home }}</h1>

    @foreach ($links as $link)
        <a href="{{ route('scopri') }}">
            <span style="padding: 0px 10px">{{ $link }}</span>
        </a>
    @endforeach



</body>

</html>
