@extends('users.inicio')

@section('tile','pre ICFES Saber 11°')

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
<h1 class="h1-formulario">PRE ICFES SABER 11°</h1>
<p style="text-align:justify">
  Este es un curso diseñado por el Semillero Universitario para ayudar a los estudiantes de grado Once (11°) o egresados bachilleres a que mejoren su puntaje ICFES, y así puedan ingresar a la educación Superior Universitaria. Con esto se apunta desde la Universidad del Quindío a que el aspirante por medio de actividades presenciales, virtuales e interactivas pueda adquirir las competencias necesarias para afrontar la prueba de Estado.
</p>
<p style="text-align:justify">
</p>
@endsection
@section('sidebar-opciones')
<div class="list-group">
  <a href="#" class="list-group-item ">SEMILLAS PREESCOLAR</a>
  <a href="{{url('inicio/semillas-primaria')}}" class="list-group-item">SEMILLAS PRIMARIA</a>
  <a href="{{url('inicio/semillas-secundaria')}}" class="list-group-item" >SEMILLAS SECUNDARIA</a>
  <a href="{{url('inicio/diplomado-experiencias-universitarias')}}" class="list-group-item" >DIPLOMADO EXPERIENCIAS UNIVERSITARIAS</a>
  <a href="{{url('inicio/pre-icfes-saber-11')}}" class="list-group-item active">PRE ICFES SABER 11°</a>
  <a href="{{url('inicio/pre-icfes-10')}}" class="list-group-item">PRE ICFES 10°</a>
</div>
@endsection