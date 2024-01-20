@extends('layouts.app')

@section('title', 'Admin')

@section('color')
  <link rel="stylesheet" href="{{ asset('css/purple.css') }}">
@endsection

@section('content')
  <hgroup>

    <h1>Bienvenido administrador!</h1>
    <p>Esta es una cuenta de administrador</p>
  </hgroup>
  <iframe src="https://giphy.com/embed/JIX9t2j0ZTN9S" width="240" height="240" frameBorder="0" class="giphy-embed"
    allowFullScreen></iframe>
  <p><a href="https://giphy.com/gifs/JIX9t2j0ZTN9S">via GIPHY</a></p>
@endsection
