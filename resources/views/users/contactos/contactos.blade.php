@extends('users.inicio')

@section('tile','Contacto')

@section('header')
<ul class="nav nav-pills nav-justified">
  <li role="presentation"><a href="/">INICIO</a></li>
  <li role="presentation"><a href="/formularios-y-datos-semillero/">FORMULARIOS Y DATOS SEMILLERO</a></li>
  <li role="presentation"><a href="{{url('/equipo-humano-2016/')}}">EQUIPO HUMANO 2016</a></li>
  <li role="presentation"  class="active"><a href="{{url('/contactos/')}}">CONTACTOS</a>
  </li>
</ul>
@endsection
@section('contenido')
<h1 class="h1-formulario">COMUNÍCATE CON EL SEMILLERO UNIVERSITARIO</h1>
<p>
Oficina Semillero Universitario 
</p>
<p style="text-align:justify">
Piso 1 Bloque de Ciencias Básicas y Ciencias Humanas - Universidad del Quindío Cra 15 Calle 12N Armenia - Quindío, Colombia
</p>
<p style="text-align:justify">
Teléfonos fijos: (6) 735 93 34 - (6)735 93 00 Ext 975
</p>
<p style="text-align:justify">
Celulares: 316 250 01 19 - 311 362 36 34 
</p>
<p style="text-align:justify">
Whats App 321 851 42 05
</p>
<p>
Emails: semillero@uniquindio.edu.co y precifes@uniquindio.edu.co
</P>
@endsection
@section('sidebar-opciones')
@endsection