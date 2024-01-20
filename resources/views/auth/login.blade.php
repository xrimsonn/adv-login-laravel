@extends('layouts.form')
@section('title', 'Iniciar Sesión')

@section('content')
  <h1>¡Inicia Sesión!</h1>
  <form action="#" method="post">
    @csrf
    <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Email">
    <input type="password" name="password" id="password" placeholder="Contraseña">
    @error('message')
      <mark>{{ $message }}</mark>
    @enderror

    <button type="submit">Iniciar sesión</button>
    <a href="{{ route('register.index')}}" class="contrast">No tengo una cuenta</a>
  </form>
@endsection
