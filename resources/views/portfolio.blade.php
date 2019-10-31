@extends('layout')

@section('titulo','Cartel de clientes')
    
@section('banner')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imgs/machu-picchu.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imgs/el-taj-mahal-india.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imgs/la-ciudad-de-petra.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    
    <script>$('.carousel').carousel()</script>
@endsection

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
    <h1>Bienvenido al sitio de portfolio</h1>
    <hr>
    <h2>Nuestros proyectos: </h2>
        <ul>
            <li>Empresa 1</li>
            <li>Empresa 2</li>
            <li>Empresa 3</li>
        </ul>
@endsection