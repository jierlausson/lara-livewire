<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custon.css') }}">
    @livewireStyles
</head>
<body>
  <div class="container mt-3">
    <ul class="nav nav-tabs mb-3">
      <li class="nav-item">
        <a class="nav-link {{ Route::current()->getName() === 'home.index' ? 'active' : '' }}" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Route::current()->getName() === 'todo.index' ? 'active' : '' }}" href="/todo">Todo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Route::current()->getName() === 'form.index' ? 'active' : '' }}" href="/form">Form</a>
      </li>
    </ul>

    {{ $slot }}
  </div>

  <script src="{{ asset('js/app.js') }}"></script>
  @livewireScripts<script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
    data-turbolinks-eval="false"></script>
</body>
</html>
