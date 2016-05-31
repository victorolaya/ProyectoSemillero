@extends('users.inicio')

@section('title', 'fundacion social')

@section('header')
<ul class="nav nav-pills nav-justified">
  <li role="presentation"><a href="/">INICIO</a></li>
  <li role="presentation" class="active"><a href="/formularios-y-datos-semillero/">FORMULARIOS Y DATOS SEMILLERO</a></li>
  <li role="presentation"><a href="{{url('/equipo-humano-2016/')}}">EQUIPO HUMANO 2016</a></li>
  <li role="presentation"><a href="{{url('/contactos/')}}">CONTACTOS</a>
  </li>
</ul>
@endsection

@section('contenido')
<h1 style="text-align:center"></h1>
<p style="text-align:justify">
Somos una Fundación cuyo objeto social es formar y orientar  tanto a menores de edad que se encuentren cursando desde  los grados de preescolar hasta el bachillerato, como a adultos sobre los procesos educativos para el ingreso, vocación, disciplina formativa y académica necesaria para la educación superior Universitaria tanto en Colombia como en el mundo, o en disciplinas deportivas, artísticas o vocacionales. Además de buscar la generación, desarrollo y puesta en marcha de proyectos educativos, tecnológicos y científicos a través de proyectos destinados a la mejora de la calidad de vida.
</p>
<p style="text-align:justify">
Nuestra sede principal se encuentra en la ciudad de Armenia Quindío, ya que fue allí donde nos consolidamos y constituidos a partir de un sueño y experiencia adquiridas en el proyecto Semillero Infantil y Juvenil Universitario – Universidad del Quindío.
</p>
@endsection

@section('sidebar-opciones')
<a href="{{url('formularios-y-datos-semillero/objetivos')}}" class="list-group-item ">OBJETIVOS</a>
<a href="{{url('formularios-y-datos-semillero/fundacion-social')}}" class="list-group-item active">FUNDACION SOCIAL</a>
<a href="#" class="list-group-item">FORMULARIO INSCRIPCIÓN PRE ICFES - DIPLOMADO EXPEIENCIAS U</a>
<a href="/formularios-y-datos-semillero/formulario-de-inscripción-semillas/" class="list-group-item">FORMULARIO DE INSCRIPCIÓN SEMILLAS</a>
<a href="#" class="list-group-item">INSCRIPCIÓN TALLER BULLYING Y SUICIDIO EN NIÑOS Y ADOLESCENTES</a>
@endsection