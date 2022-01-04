<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/custon.css') }}" />
    @livewireStyles
</head>
<body>
  <div class="container mt-3">
    <div class="mb-3">
      <a href="/" class="btn btn-outline-secondary btn-sm">Home</a>
      <a href="/todo" class="btn btn-outline-secondary btn-sm">Todo</a>
      <a href="/form" class="btn btn-outline-secondary btn-sm">Form</a>
    </div>

    {{ $slot }}
  </div>

  <script src="{{ asset('js/app.js') }}"></script>
  @livewireScripts
</body>
</html>
