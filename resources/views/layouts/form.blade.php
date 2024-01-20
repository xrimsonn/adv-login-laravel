<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/orange.css') }}">
  <script src="https://kit.fontawesome.com/a41d3240c2.js" crossorigin="anonymous"></script>
</head>

<body>
  <main class="main-form">
    <article class="article-form">
      @yield('content')
    </article>
  </main>
</body>

</html>
