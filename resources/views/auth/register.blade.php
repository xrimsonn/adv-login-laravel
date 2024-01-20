@extends('layouts.form')
@section('title', 'Registrarse')

@section('content')
  <h1>¡Crear una cuenta!</h1>
  <form action="#" method="post">
    @csrf
    <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Nombre">
    @error('name')
      <mark>{{ $message }}</mark>
    @enderror

    <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Email">
    @error('email')
      <mark>{{ $message }}</mark>
    @enderror

    <input type="password" name="password" id="password" placeholder="Contraseña">
    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirmar contraseña">
    @error('password')
      <mark>{{ $message }}</mark>
    @enderror

    <button type="submit">Crear cuenta</button>
    <a href="{{ route('home.index') }}" class="contrast">Ya tengo una cuenta</a>
  </form>
@endsection
