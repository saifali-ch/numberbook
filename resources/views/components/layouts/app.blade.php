<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description" content="{{ $description }}">

  <link type="image/x-icon" rel="icon" href="{{ asset('favicon.ico') }}">
  <link rel="apple-app-site-association" href="{{ url('apple-app-site-association') }}">

  <title>{{ $title ?? config('app.name') }}</title>

  @vite(['resources/scss/app.scss', 'resources/js/app.js'])

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-626792533"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }

    gtag('js', new Date());
    gtag('config', 'AW-626792533');
  </script>
</head>

<body class="font-sans antialiased" dir="{{(App::isLocale('ar') ? 'rtl' : 'ltr')}}">
<x-header/>
<x-app-ratings/>

{{ $slot }}

</body>
</html>
