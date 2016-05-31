@extends('users.inicio')

@section('tile','Diplomado experiencias universitarias')

@section('header')
<ul class="nav nav-pills nav-justified">
  <li role="presentation" class="active"><a href="/">INICIO</a></li>
  <li role="presentation"><a href="/formularios-y-datos-semillero/">FORMULARIOS Y DATOS SEMILLERO</a></li>
  <li role="presentation"><a href="{{url('/equipo-humano-2016/')}}">EQUIPO HUMANO 2016</a></li>
  <li role="presentation"><a href="{{url('/contactos/')}}">CONTACTOS</a>
  </li>
</ul>
@endsection
@section('contenido')
<h1 class="h1-formulario">DIPLOMADO EXPERIENCIAS UNIVERSITARIAS</h1>
<p style="text-align:center">
  Pre Universitario
</p>
<p style="text-align:justify">
 El Semillero Infantil y Juvenil Universitario - Uniquindío, trae para todos los adultos o estudiantes recién graduados de colegio la oportunidad de formarse en un diplomado que tiene tres módulos que le permitirán a la semilla participante adquirir habilidades, destrezas y conceptos necesarios para sobrevivir como futuro estudiante universitario, prepararse para la prueba ICFES Saber11 y además de conocer su vocación experimentando en clases y laboratorios de la Universidad del Quindío
</p>
@endsection
@section('sidebar-opciones')
<div class="list-group">
  <a href="{{url('inicio/semillas-preescolar')}}" class="list-group-item ">SEMILLAS PREESCOLAR</a>
  <a href="{{url('inicio/semillas-primaria')}}" class="list-group-item">SEMILLAS PRIMARIA</a>
  <a href="{{url('inicio/semillas-secundaria')}}" class="list-group-item" >SEMILLAS SECUNDARIA</a>
  <a href="{{url('inicio/diplomado-experiencias-universitarias')}}" class="list-group-item active" >DIPLOMADO EXPERIENCIAS UNIVERSITARIAS</a>
  <a href="{{url('inicio/pre-icfes-saber-11')}}" class="list-group-item">PRE ICFES SABER 11°</a>
  <a href="{{url('inicio/pre-icfes-10')}}" class="list-group-item">PRE ICFES 10°</a>
</div>
@endsection