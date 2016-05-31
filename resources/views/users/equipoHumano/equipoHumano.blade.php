@extends('users.inicio')

@section('tile','Equipo humano 2016')

@section('header')
<ul class="nav nav-pills nav-justified">
  <li role="presentation"><a href="/">INICIO</a></li>
  <li role="presentation"><a href="/formularios-y-datos-semillero/">FORMULARIOS Y DATOS SEMILLERO</a></li>
  <li role="presentation" class="active"><a href="{{url('/equipo-humano-2016/')}}">EQUIPO HUMANO 2016</a></li>
  <li role="presentation"><a href="{{url('/contactos/')}}">CONTACTOS</a>
  </li>
</ul>
@endsection

@section('contenido')
<h1 class="h1-formulario">PROFESIONALES ADMINISTRATIVOS</h1>
<div style="text-align:center">
	<p>
		Angela Herrera Valencia  Profesional en Salud Ocupacional
	</p>
	<p>
		<ul>
			<li>Coordinadora Logística</li>
			<li>Mentora Inteligencias Comunicativa y Musical.</li>
		</ul>
	</p>
	<p>
		semillero@uniquindio.edu.co
	</p>
	<HR width=50% align="center">
	<p>Yeifer Cardona Naranjo Profesional en Psicología</p>
	<ul>
		<li>Psicólogo Organizacional y Educativo</li>
		<li>Mentor Inteligencia Emocional y Sociales PreICFES</li>
	</ul>
<p>yeiferc@gmail.com</p>
</div>
@endsection
@section('sidebar-opciones')
@endsection