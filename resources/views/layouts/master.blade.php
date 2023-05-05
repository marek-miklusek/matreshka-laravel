<!DOCTYPE html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', 'Matréshka Manikúra Pedikúra') / Matréshka Manikúra Pedikúra</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/header.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body class="{{ Request::segment(1) ?: 'home' }}">

        <header>
            @include('partials.navigation')

            @if(session('message'))
                <p class="alert alert-success flash-message">{{ session('message') }}</p>
            @endif
        </header>

        <main>
            @yield('content')
        </main>

        @unless (request()->server('PATH_INFO') == '/Kontakt' || request()->server('PATH_INFO') == '/Cenník')
            <footer>
                @include('partials.footer')
            </footer>
        @endunless

    </body>
</html>