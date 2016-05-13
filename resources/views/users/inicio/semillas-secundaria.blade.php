@extends('users.inicio')

@section('tile','Semillas secundaria')

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
<h1 class="h1-formulario">DIPLOMADO EXPLORACIÓN U</h1>
<p style="text-align:justify">
  Las semillas juveniles universitarias son todos aquellos estudiantes de los grados escolares 6°,7°, 8°, 9°, 10° y 11° de las diferentes instituciones educativas o colegios que quieren explorar su vocación profesional, utilizando los recursos técnicos y tecnológicos de la Universidad del Quindío, simulando y experimentando como universitario.
</p>
<p style="text-align:justify">
  Explora los siguientes botones que contienen la información necesaria del Semillero Universitario para Juveniles.
</p>
@endsection
@section('sidebar-opciones')
<div class="list-group">
  <a href="#" class="list-group-item ">SEMILLAS PREESCOLAR</a>
  <a href="{{url('inicio/semillas-primaria')}}" class="list-group-item">SEMILLAS PRIMARIA</a>
  <a href="{{url('inicio/semillas-secundaria')}}" class="list-group-item active" >SEMILLAS SECUNDARIA</a>
  <a href="{{url('inicio/diplomado-experiencias-universitarias')}}" class="list-group-item">DIPLOMADO EXPERIENCIAS UNIVERSITARIAS</a>
  <a href="{{url('inicio/pre-icfes-saber-11')}}" class="list-group-item">PRE ICFES SABER 11°</a>
  <a href="{{url('inicio/pre-icfes-10')}}" class="list-group-item">PRE ICFES 10°</a>
</div>
@endsection