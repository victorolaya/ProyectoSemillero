@extends('users.inicio')

@section('tile','pre ICFES 10°')

@section('header')
<ul class="nav nav-pills nav-justified">
  <li role="presentation" class="active"><a href="/">INICIO</a></li>
  <li role="presentation"><a href="/formularios-y-datos-semillero/">FORMULARIOS Y DATOS SEMILLERO</a></li>
  <li role="presentation"><a href="#">EQUIPO HUMANO 2016</a></li>
  <li role="presentation"><a href="#">CONTACTOS</a>
  </li>
</ul>
@endsection
@section('contenido')
<h1 class="h1-formulario">PRE ICFES SABER 10°</h1>
<p style="text-align:center">
  Curso para estudiantes de Grado Décimo - 10°
</p>
<p style="text-align:justify">
  Es un Curso Diseñado por el Semillero Universitario de la Universidad del Quindío donde los estudiantes de grado 10° podrán adquirir competencias básicas de las áreas de lenguaje, matemáticas y sociales.
</p>
<p style="text-align:justify">
  Además podrá revisar su nivel de aprendizaje y habilidad con una serie de diagnósticos, simulaciones y talleres tanto presenciales como virtuales. 
</p>
@endsection
@section('sidebar-opciones')
<div class="list-group">
  <a href="#" class="list-group-item ">SEMILLAS PREESCOLAR</a>
  <a href="{{url('inicio/semillas-primaria')}}" class="list-group-item">SEMILLAS PRIMARIA</a>
  <a href="{{url('inicio/semillas-secundaria')}}" class="list-group-item" >SEMILLAS SECUNDARIA</a>
  <a href="{{url('inicio/diplomado-experiencias-universitarias')}}" class="list-group-item" >DIPLOMADO EXPERIENCIAS UNIVERSITARIAS</a>
  <a href="{{url('inicio/pre-icfes-saber-11')}}" class="list-group-item">PRE ICFES SABER 11°</a>
  <a href="{{url('inicio/pre-icfes-10')}}" class="list-group-item active">PRE ICFES 10°</a>
</div>
@endsection