@extends('users.plantilla')

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
<p style="text-align: center">
    <strong>Semillero Universitario </strong>donde te sembramos el amor por aprender, conocer y experimentar de manera divertida, además te abonamos para la educación universitaria y cosechamos tus ideas para un futuro mejor para todos.﻿﻿                      
</p>
@endsection

@section('sidebar-opciones')
	@include('users.partials.sidebar')
@endsection