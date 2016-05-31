@extends('users.plantilla')

@section('header')
<ul class="nav nav-pills nav-justified">
  <li role="presentation"><a href="/">INICIO</a></li>
  <li role="presentation" class="active"><a href="/formularios-y-datos-semillero/">FORMULARIOS Y DATOS SEMILLERO</a></li>
  <li role="presentation"><a href="{{url('/equipo-humano-2016/')}}">EQUIPO HUMANO 2016</a></li>
  <li role="presentation"><a href="{{url('/contactos/')}}">CONTACTOS</a>
  </li>
</ul>

@section('contenido')
<h1>QUÉ SOMOS?</h1>
<div style="text-align:justify">
	<p >
		Somos un proyecto de extensión universitaria en la <strong Style="color:#68a94a">Universidad del Quindío,</strong> adscrito en la <strong style="Color:#68a94a">Facultad de Ciencias Básicas y Tecnologías</strong> en el que buscamos que los niños, niñas y jóvenes realicen un aprendizaje constructivo, didáctico y armónico hacia la motivación y orientación por un pregrado (carrera universitaria) de educación superior, estimulando las inteligencias espacial, emocional, financiera, intrapersonal, interpersonal, lingüística, naturalista, matemática, musical, y política.
	</p>
	<p>
		Nuestra estructura académica funciona bajo diplomados infantiles y juveniles, así:
	</p>
	<p>
		<Strong style="color:#68a94a">Diplomado  Mundo U - Preescolares</Strong>, donde los pequeños de 4 y 5 años se divierten aprendiendo ciencias y adquiriendo vocabulario en el idioma inglés.
	</p>

</div >

@endsection

@section('sidebar-opciones')
<a href="#" class="list-group-item">OBJETIVOS</a>
<a href="#" class="list-group-item">FUNDACION SOCIAL</a>
<a href="#" class="list-group-item">FORMULARIO INSCRIPCIÓN PRE ICFES - DIPLOMADO EXPEIENCIAS U</a>
<a href="/formularios-y-datos-semillero/formulario-de-inscripción-semillas/" class="list-group-item">FORMULARIO DE INSCRIPCIÓN SEMILLAS</a>
<a href="#" class="list-group-item">INSCRIPCIÓN TALLER BULLYING Y SUICIDIO EN NIÑOS Y ADOLESCENTES</a>
@endsection