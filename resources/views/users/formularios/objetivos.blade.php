@extends('users.inicio')

@section('title', 'Objetivos')

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
<h1 class="h1-formulario">OBJETIVOS DEL SEMILLERO</h1>

<p>
	OBJETIVO GENERAL
</p>
<p>
	<ul>
		<li>
			•Generar procesos educativos en niños, niñas y jóvenes en diferentes áreas del conocimiento a través de la educación constructivista.
		</li>
	</ul>
</p>

<p>
	OBJETIVOS ESPECIFICOS
</p>
<p>
	<ul>
		<li style="text-align:justify">Construir métodos de aplicación para la pedagogía constructivista.</li>
		<li style="text-align:justify">Orientar a los niños, niñas y jóvenes en el conocimiento universitario.</li>
		<li style="text-align:justify">Crear en los niños a través de formas didácticas y prácticas el deseo por aprender cada día cosas nuevas y divertidas.</li>
		<li style="text-align:justify">Formar niños y niñas consientes y críticos ante la educación.</li>
		<li style="text-align:justify">Encaminar a los niños y jóvenes a formarse como sujetos comprometidos con la construcción de una mejor sociedad.</li>
		<li style="text-align:justify">Generar conocimientos en las diferentes áreas para su orientación hacia un futuro mejor.</li>
		<li style="text-align:justify">Generar procesos educativos diferentes a los empleados en la educación tradicional a través del constructivismo.</li>
	</ul>
</p>
@endsection

@section('sidebar-opciones')
<a href="{{url('formularios-y-datos-semillero/objetivos')}}" class="list-group-item active">OBJETIVOS</a>
<a href="{{url('formularios-y-datos-semillero/fundacion-social')}}" class="list-group-item">FUNDACION SOCIAL</a>
<a href="#" class="list-group-item">FORMULARIO INSCRIPCIÓN PRE ICFES - DIPLOMADO EXPEIENCIAS U</a>
<a href="/formularios-y-datos-semillero/formulario-de-inscripción-semillas/" class="list-group-item">FORMULARIO DE INSCRIPCIÓN SEMILLAS</a>
<a href="#" class="list-group-item">INSCRIPCIÓN TALLER BULLYING Y SUICIDIO EN NIÑOS Y ADOLESCENTES</a>
@endsection