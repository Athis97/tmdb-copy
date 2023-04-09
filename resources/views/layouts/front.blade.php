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
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/front.css') }}">

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.6.4.min.js') }}"></script>
    <script src="{{ asset('js/easypiechart.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easypiechart.min.js') }}"></script>
    <script>
        function pieChart() {
            $('.user_score_chart').each(function() {
                $(this).easyPieChart({
                    lineCap: 'round',
                    lineWidth: 2,
                    scaleColor: false,
                    size: 34,
                    animate: {
                        enabled: false
                    }
                });
            });
        }
        $(document).ready(function() {
            pieChart();
            $('.media_items').on('click', 'div.pagination p.load_more a.load_more', function(e) {
                var data_next_page = $(this).attr('data-next-page');
                e.preventDefault();

                $.ajax({
                    type: 'POST',
                    url: $(location).attr('href'),
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "data_next_page": data_next_page,
                    },
                    success: function(data) {
                        $('.media_items div.pagination').remove();
                        $('.media_items').append(data);
                        pieChart();
                    }
                });
            });
        });
    </script>

    <style>
        body {
            font-family: "Source Sans Pro", Arial, sans-serif;
        }

        .glyphicons_v2:hover {
            opacity: 1;
            filter: brightness(0) saturate(100%) invert(53%) sepia(33%) saturate(3054%) hue-rotate(156deg) brightness(98%) contrast(99%);
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
