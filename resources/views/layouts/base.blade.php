<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        {{-- Manifest --}}
        <link rel="manifest" href="json/manifest.json" crossorigin="use-credentials">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

        {{-- Style --}}
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        @yield('content')

@dump(session()->get('session'))
        {{-- Vuejs --}}
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
