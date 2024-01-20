<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <script src="https://kit.fontawesome.com/a41d3240c2.js" crossorigin="anonymous"></script>
  @yield('color')
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
      <footer>
        José Antonio Rosales &copy;2023<br />
        <a class="secondary" target="_blank" href="https://www.instagram.com/antonnn_o/"><i class="fa-brands fa-instagram fa-lg"></i></a>
        <a class="secondary" target="_blank" href="https://github.com/xrimsonn"><i class="fa-brands fa-github fa-lg"></i></a>
        <a class="secondary" target="_blank" href="https://www.linkedin.com/in/antonio-rosales-207793263/"><i class="fa-brands fa-linkedin fa-lg"></i></a>
      </footer>
    </article>
  </main>
</body>

</html>
