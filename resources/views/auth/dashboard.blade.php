@extends('layouts.app')
@section('title', 'Panel de Usuario')

@section('color')
  <link rel="stylesheet" href="{{ asset('css/orange.css') }}">
@endsection

@section('content')
  <hgroup>
    <h2>Bienvenido <em>{{ Auth::user()->name }}</em></h2>
    <p>Esta es tu página de usuario</p>
    <iframe src="https://giphy.com/embed/3oKIPnAiaMCws8nOsE" width="229" height="240" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/cat-kitten-computer-3oKIPnAiaMCws8nOsE">via GIPHY</a></p>  </hgroup>
@endsection
