@extends('admin.main')

@section('title', 'Editando Semilla: ' . $semilla->nombre)

@section('contenido')
{!! Form::open(['route' => ['admin.semillas.update',$semilla], 'method' => 'PUT']) !!}
    <div class = "form-group">
    	{!! form::label('fecha','Fecha de diligenciamiento de este formulario')!!}
    	{!! form::date('calendario-fecha',\Carbon\Carbon::now(), ['class' => 'form-control', 'required'])!!}
    </div>
    <div class ="form-group">
    	{!! form::label('nombre', 'Nombres del aspirante' )!!}
    	{!! form::text('nombre',$semilla->nombre, ['class' => 'form-control', 'placeholder' => 'nombre del aspirante','required'])!!}
    </div>
    <div class = "form-group">
    	{!! form::label('apellidos','Apellidos del aspirante')!!}
    	{!! form::text('apellidos',$semilla->apellidos,['class' => 'form-control', 'placeholder' => 'apellidos del aspirante','required'])!!}
    </div>
    <div class = "form-group">
    	{!! form::label('edad','Edad')!!}
    	{!! form::text('edad',$semilla->edad,['class' => 'form-control', 'placeholder' => 'Edad','required'])!!}
    </div>
    <div class = "form-group">
    	{!! form::label('documento','Tipo de documento de identidad')!!}
    	{!!Form::select('documento', array('' => 'Seleccione una opción','Cc' => 'Cedula de ciudadania', 'Ce' => 'Cedula extranjera', 'Ti' => 'Tarjeta de identidad', 'O' => 'Otro'), null, ['class' => 'form-control'])!!}
    	{!! form::text('numero',$semilla->numero,['class' => 'form-control', 'placeholder' => 'Numero de identificacion','required'])!!}
	</div>
	<div class = "form-group">
    	{!! form::label('fechaNacimiento','Fecha de nacimiento')!!}
    	{!! form::date('calendario-fecha',\Carbon\Carbon::now(), ['class' => 'form-control','required'])!!}
    </div>
    <div class ="form-group">
    	{!! form::label('direccion', 'Dirección de residencia' )!!}
    	{!! form::text('direccion', $semilla->direccion, ['class' => 'form-control', 'placeholder' => 'dirección de residencia','required'])!!}
    </div>
    <div class ="form-group">
    	{!! form::label('municipio', 'municipio' )!!}
    	{!! form::text('municipio', $semilla->municipio, ['class' => 'form-control', 'placeholder' => 'municipio','required'])!!}
    </div>
    <div class ="form-group">
    	{!! form::label('telefono', 'Télefono Fijo' )!!}
    	{!! form::text('telefono', $semilla->telefono, ['class' => 'form-control', 'placeholder' => 'Télefono Fijo','required'])!!}
    </div>
    <div class ="form-group">
    	{!! form::label('celular1', 'Celular 1' )!!}
    	{!! form::text('celular1', $semilla->celular1, ['class' => 'form-control', 'placeholder' => 'Celular 1','required'])!!}
    </div>
    <div class ="form-group">
    	{!! form::label('celular2', 'Celular 2' )!!}
    	{!! form::text('celular2', $semilla->celular2, ['class' => 'form-control', 'placeholder' => 'Celular 2','required'])!!}
    </div>
     <div class ="form-group">
    	{!! form::label('correoElectronico', 'Correo electrónico' )!!}
    	{!! form::text('correoElectronico', $semilla->correoElectronico, ['class' => 'form-control', 'placeholder' => 'Correo electrónico','required'])!!}
    </div>
     <div class ="form-group">
    	{!! form::label('eps', 'EPS' )!!}
    	{!! form::text('eps', $semilla->eps, ['class' => 'form-control', 'placeholder' => 'EPS','required'])!!}
    </div>
     <div class ="form-group">
    	{!! form::label('rh', 'R.H' )!!}
    	{!! form::text('rh', $semilla->rh, ['class' => 'form-control', 'placeholder' => 'R.H','required'])!!}
    </div>
    <div class= "form-group">
    	{!! form::submit('Enviar', ['class' => 'btn btn-success'])!!}
    </div>

{!! Form::close() !!}
@endsection