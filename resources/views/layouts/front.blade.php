<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta http-equiv="cleartype" content="on">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords"
        content="Movies, TV Shows, Streaming, Reviews, API, Actors, Actresses, Photos, User Ratings, Synopsis, Trailers, Teasers, Credits, Cast">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description"
        content="The Movie Database (TMDB) is a popular, user editable database for movies and TV shows.">
    <meta name="msapplication-TileColor" content="#032541">
    <meta name="theme-color" content="#032541">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ mix('js/app.js') }}" defer></script>

    <style>
        body {
            font-family: "Source Sans Pro", Arial, sans-serif;
        }
    </style>

    <!-- Scripts -->
</head>

<body>
    <div class="page_wrap movie_wrap">
        <x-navbar />
        {{ $slot }}
        <x-footer />
        {{-- @stack('modals') --}}
        {{-- @livewireScripts --}}
    </div>
</body>

</html>
