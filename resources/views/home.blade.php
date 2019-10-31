@extends('layout')

@section('titulo','Inicio')

@section('menu')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{route('home')}}">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="{{route('about')}}">About <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="{{route('portfolio')}}">Portfolio</a>
      <a class="nav-item nav-link" href="{{route('contact')}}">Contact</a>
    </div>
  </div>
</nav>  
@endsection
@section ('contenido_home')
    <h1>Bienvenido al sitio de ejemplo</h1>
    <hr>
    <h2>Universidad zzz...</h2>
@endsection