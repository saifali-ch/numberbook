<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link type="image/x-icon" rel="icon" href="{{ asset('favicon.ico') }}">
    <meta name="description" content="App description here">

    <title>{{ $title ?? config('app.name') }}</title>

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased" dir="{{(App::isLocale('ar') ? 'rtl' : 'ltr')}}">

{{ $slot }}

</body>
</html>
