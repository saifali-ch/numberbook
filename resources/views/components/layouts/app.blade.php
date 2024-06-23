<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description" content="{{ $description }}">

  <link type="image/x-icon" rel="icon" href="{{ asset('favicon.ico') }}">

  <title>{{ $title ?? config('app.name') }}</title>

  @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased" dir="{{(App::isLocale('ar') ? 'rtl' : 'ltr')}}">
<x-header/>

{{ $slot }}

</body>
</html>
