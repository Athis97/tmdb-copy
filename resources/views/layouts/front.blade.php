<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta http-equiv="cleartype" content="on">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="Movies, TV Shows, Streaming, Reviews, API, Actors, Actresses, Photos, User Ratings, Synopsis, Trailers, Teasers, Credits, Cast">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="The Movie Database (TMDB) is a popular, user editable database for movies and TV shows.">
    <meta name="msapplication-TileColor" content="#032541">
    <meta name="theme-color" content="#032541">

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Scripts -->
</head>

<body>
    <div class="page_wrap movie_wrap">
    <x-navbar />
    {{ $slot }}
    {{-- <x-footer /> --}}
    {{-- @stack('modals') --}}
    {{-- @livewireScripts --}}
    </div>
</body>
</html>