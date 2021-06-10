<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/style.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/own.css') }}" rel="stylesheet">
    <title>Document</title>
</head>

<body>

@include("nav/navbar")

@yield("content")
<script src="{{ asset('js/biblio.js') }}"></script>

</body>
</html>
