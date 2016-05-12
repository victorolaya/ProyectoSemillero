@extends('users.inicio')

@section('tile','Semillas preescolar')

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
<h1 class="h1-formulario">DIPLOMADO INDUCCIÓN U</h1>
<p style="text-align:center">
	Semillas de Primaria 1° a 5°﻿
</p>
<p style="text-align:justify">
	Haz llegado al lugar donde tenemos información sobre el Semillero Universitario para niños y niñas de básica primaria, te invitamos a explorarlo todo  y así comprenderás mejor lo que hacemos en la Universidad del Quindío.
</p>
@endsection
@section('sidebar-opciones')
<div class="list-group">
  <a href="#" class="list-group-item ">SEMILLAS PREESCOLAR</a>
  <a href="{{url('inicio/semillas-primaria')}}" class="list-group-item active">SEMILLAS PRIMARIA</a>
  <a href="{{url('inicio/semillas-secundaria')}}" class="list-group-item">SEMILLAS SECUNDARIA</a>
  <a href="{{url('inicio/diplomado-experiencias-universitarias')}}" class="list-group-item">DIPLOMADO EXPERIENCIAS UNIVERSITARIAS</a>
  <a href="{{url('inicio/pre-icfes-saber-11')}}" class="list-group-item">PRE ICFES SABER 11°</a>
  <a href="{{url('inicio/pre-icfes-10')}}" class="list-group-item">PRE ICFES 10°</a>
</div>
@endsection