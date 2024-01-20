<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
  <main class="container">
    <nav>
      <ul>
        <li><strong>Mi Página</strong></li>
      </ul>
      <ul>
        @if (!auth()->check())
        <li><a href="{{ route('register.index') }}">Registrarse</a></li>
        <li><a href="{{ route('login.index') }}" role="button">Iniciar sesión</a></li>
        @else
        <li><a href="{{ route('login.destroy') }}" role="button">Cerrar sesión</a></li>
        @endif
      </ul>
    </nav>
    <article>
      @yield('content')
    </article>
  </main>
</body>

</html>
