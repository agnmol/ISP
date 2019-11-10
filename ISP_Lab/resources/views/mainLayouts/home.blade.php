<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('style.css') }}" rel="stylesheet">
{{--    <link href="../public/style.css" rel="stylesheet">--}}
</head>
<body>
<div id="body">
    <div id="header">
        <h3 id="slogan">Viešbutis</h3>
    </div>
    <div id="content">
        @include('mainLayouts.topmenu')
        @yield('left')
        @yield('right')
    </div>
    <div id="footer">

    </div>
</div>
</body>
</html>
