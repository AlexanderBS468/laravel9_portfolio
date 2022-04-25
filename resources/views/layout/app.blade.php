<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{ $themeColor }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" >
</head>
<body class="antialiased">
    <x-layout.navbar></x-layout.navbar>
    {{$slot}}

<footer></footer>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
