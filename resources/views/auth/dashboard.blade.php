@extends('layouts.app')
@section('title', 'Panel de Usuario')

@section('content')
  <hgroup>
    <h2>Bienvenido <em>{{ Auth::user()->name }}</em></h2>
    <p>Esta es tu página de usuario</p>
  </hgroup>
@endsection
