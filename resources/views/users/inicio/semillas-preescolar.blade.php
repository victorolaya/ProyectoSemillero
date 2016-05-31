@extends('users.inicio')

@section('tile','Semillas preescolar')

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
<h1 class="h1-formulario">DIPLOMADO INDUCCIÓN U</h1>
<p style="text-align:justify">
  Los niños y niñas de 4 y 5 años de edad pueden hacer parte del Semillero Universitario, aprendiendo conceptos de Ciencias y adquiriendo vocabulario del idioma inglés.
</p>
@endsection
@section('sidebar-opciones')
<div class="list-group">
  <a href="{{url('inicio/semillas-preescolar')}}" class="list-group-item active">SEMILLAS PREESCOLAR</a>
  <a href="{{url('inicio/semillas-primaria')}}" class="list-group-item">SEMILLAS PRIMARIA</a>
  <a href="{{url('inicio/semillas-secundaria')}}" class="list-group-item">SEMILLAS SECUNDARIA</a>
  <a href="{{url('inicio/diplomado-experiencias-universitarias')}}" class="list-group-item">DIPLOMADO EXPERIENCIAS UNIVERSITARIAS</a>
  <a href="{{url('inicio/pre-icfes-saber-11')}}" class="list-group-item">PRE ICFES SABER 11°</a>
  <a href="{{url('inicio/pre-icfes-10')}}" class="list-group-item">PRE ICFES 10°</a>
</div>
@endsection