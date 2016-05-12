@extends('users.inicio')

@section('title', 'Formulario de inscripción semillas')

@section('header')
<ul class="nav nav-pills nav-justified">
  <li role="presentation"><a href="/">INICIO</a></li>
  <li role="presentation" class="active"><a href="/formularios-y-datos-semillero/">FORMULARIOS Y DATOS SEMILLERO</a></li>
  <li role="presentation"><a href="#">EQUIPO HUMANO 2016</a></li>
  <li role="presentation"><a href="#">CONTACTOS</a>
  </li>
</ul>
@endsection

@section('contenido')
<h1 class="h1-formulario">FORMULARIO DE INSCRIPCIÓN SEMILLAS UNIVERSITARIAS</h1>
<section >
	<p style="text-align: justify; font-family: 'Aclonica',sans-serif,'google'"><strong>Diligencie el siguiente formulario con los datos reales del aspirante y sus acudientes para hacer más efectivo el proceso de registro. </strong>
	</p>

	<p style="font-family: 'Coming Soon', cursive, 'google'; font-size: 20px; font-style: normal; font-weight: normal; text-align: justify">Este formulario es apenas una parte de todo el proceso de inscripción para Semillero Universitario ya sea para preescolar, primaria o secundaria.
	</p>

	<p style="font-family: 'Coming Soon', cursive, google; font-size: 20px; font-style: normal; font-weight: normal; text-align: justify">
	Estos son los pasos iniciales:
	</p>

	<p style="font-family: 'Coming Soon', cursive, google; font-size: 20px; font-style: normal; font-weight: normal; text-align: justify">
	1. Diligencia los datos que se solicitan en el formulario que a continuación aparece.
	</p>

	<P style="font-family: 'Coming Soon', cursive, google; font-size: 20px; font-style: normal; font-weight: normal; text-align: justify">
	2. Después de diligenciado tienes que confirmar a cualquiera de los  teléfonos: 321 851 42 05 - 316 250 01 19 - (6)735 93 34 Fijo, si tu inscripción quedo registrada en el sistema y donde te confirmaran lo siguiente que deberás realizar.
	</P>

	{!! Form::open(['route' => 'inscSemilla', 'method' => 'POST']) !!}
	    <div class = "form-group">
	    	{!! form::label('fecha','Fecha de diligenciamiento de este formulario')!!}
	    	{!! form::date('calendario-fecha',\Carbon\Carbon::now(), ['class' => 'form-control', 'required'])!!}
	    </div>
	    <div class ="form-group">
	    	{!! form::label('nombre', 'Nombres del aspirante' )!!}
	    	{!! form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'nombre del aspirante','required'])!!}
	    </div>
	    <div class = "form-group">
	    	{!! form::label('apellidos','Apellidos del aspirante')!!}
	    	{!! form::text('apellidos',null,['class' => 'form-control', 'placeholder' => 'apellidos del aspirante','required'])!!}
	    </div>
	    <div class = "form-group">
	    	{!! form::label('edad','Edad')!!}
	    	{!! form::text('edad',null,['class' => 'form-control', 'placeholder' => 'Edad','required'])!!}
	    </div>
	    <div class = "form-group">
	    	{!! form::label('documento','Tipo de documento de identidad')!!}
	    	{!!Form::select('documento', array('' => 'Seleccione una opción','Cc' => 'Cedula de ciudadania', 'Ce' => 'Cedula extranjera', 'Ti' => 'Tarjeta de identidad', 'O' => 'Otro'), null, ['class' => 'form-control'])!!}
	    	{!! form::text('numero',null,['class' => 'form-control', 'placeholder' => 'Numero de identificacion','required'])!!}
		</div>
		<div class = "form-group">
	    	{!! form::label('fechaNacimiento','Fecha de nacimiento')!!}
	    	{!! form::date('calendario-fecha',\Carbon\Carbon::now(), ['class' => 'form-control','required'])!!}
	    </div>
	    <div class ="form-group">
	    	{!! form::label('direccion', 'Dirección de residencia' )!!}
	    	{!! form::text('direccion', null, ['class' => 'form-control', 'placeholder' => 'dirección de residencia','required'])!!}
	    </div>
	    <div class ="form-group">
	    	{!! form::label('municipio', 'municipio' )!!}
	    	{!! form::text('municipio', null, ['class' => 'form-control', 'placeholder' => 'municipio','required'])!!}
	    </div>
	    <div class ="form-group">
	    	{!! form::label('telefono', 'Télefono Fijo' )!!}
	    	{!! form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'Télefono Fijo','required'])!!}
	    </div>
	    <div class ="form-group">
	    	{!! form::label('celular1', 'Celular 1' )!!}
	    	{!! form::text('celular1', null, ['class' => 'form-control', 'placeholder' => 'Celular 1','required'])!!}
	    </div>
	    <div class ="form-group">
	    	{!! form::label('celular2', 'Celular 2' )!!}
	    	{!! form::text('celular2', null, ['class' => 'form-control', 'placeholder' => 'Celular 2','required'])!!}
	    </div>
	     <div class ="form-group">
	    	{!! form::label('correoElectronico', 'Correo electrónico' )!!}
	    	{!! form::text('correoElectronico', null, ['class' => 'form-control', 'placeholder' => 'Correo electrónico','required'])!!}
	    </div>
	     <div class ="form-group">
	    	{!! form::label('eps', 'EPS' )!!}
	    	{!! form::text('eps', null, ['class' => 'form-control', 'placeholder' => 'EPS','required'])!!}
	    </div>
	     <div class ="form-group">
	    	{!! form::label('rh', 'R.H' )!!}
	    	{!! form::text('rh', null, ['class' => 'form-control', 'placeholder' => 'R.H','required'])!!}
	    </div>
	    <div class= "form-group">
	    	{!! form::submit('Enviar', ['class' => 'btn btn-success'])!!}
	    </div>

	{!! Form::close() !!}
</section>
@endsection

@section('sidebar-opciones')
<a href="#" class="list-group-item">OBJETIVOS</a>
<a href="#" class="list-group-item">FUNDACION SOCIAL</a>
<a href="#" class="list-group-item">FORMULARIO INSCRIPCIÓN PRE ICFES - DIPLOMADO EXPEIENCIAS U</a>
<a href="/formularios-y-datos-semillero/formulario-de-inscripción-semillas/" class="list-group-item active">FORMULARIO DE INSCRIPCIÓN SEMILLAS</a>
<a href="#" class="list-group-item">INSCRIPCIÓN TALLER BULLYING Y SUICIDIO EN NIÑOS Y ADOLESCENTES</a>
@endsection