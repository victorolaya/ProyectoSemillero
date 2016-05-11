@extends('admin.template.main')

@section('title', 'Editando Mentor: ' . $mentor->nombres)

@section('content')
	
	{!! Form::open(['route' => ['admin.mentor.update',$mentor], 'method' => 'PUT']) !!}


		<div class="form-group">
				{!! Form::label('nombres','Nombres') !!}
				{!! Form::text('nombres',$mentor->nombres, ['class' => 'form-control', 'placeholder'=> 'Ingrese Nombres', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::label('apellidos','Apellidos') !!}
				{!! Form::text('apellidos',$mentor->apellidos, ['class' => 'form-control', 'placeholder'=> 'Ingrese Apellidos', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::label('documento_de_identidad', 'Tipo De Documento') !!}
				{!! Form::select('documento_de_identidad', ['TI' => 'Tarjeta De Identidad', 'CC'=>'Cedula De Ciudadania'], null, ['class' => 'form-control'])!!}
		</div>
		<div class="form-group">
				{!! Form::label('numero_documento','Numero De Documento') !!}
				{!! Form::text('numero_documento',$mentor->numero_documento, ['class' => 'form-control', 'placeholder'=> 'Ingrese Numero De Documento', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::label('edad','Edad') !!}
				{!! Form::text('edad',$mentor->edad, ['class' => 'form-control', 'placeholder'=> 'Ingrese La Edad', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::label('fecha_de_nacimiento','Fecha De Nacimiento') !!}
				{!! Form::date('fecha_de_nacimiento',$mentor->fecha_de_nacimiento, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::label('direccion','Direccion') !!}
				{!! Form::text('direccion',$mentor->direccion, ['class' => 'form-control', 'placeholder'=> 'Ingrese La Direccion', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::label('municipio','Municipio') !!}
				{!! Form::text('municipio',$mentor->municipio, ['class' => 'form-control', 'placeholder'=> 'Ingrese El Municipio', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::label('numero_movil','Numero Movil') !!}
				{!! Form::text('numero_movil',$mentor->numero_movil, ['class' => 'form-control', 'placeholder'=> 'Ingrese Numero Movil', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::label('correo_electronico','Correo Electronico') !!}
				{!! Form::text('correo_electronico',$mentor->correo_electronico, ['class' => 'form-control', 'placeholder'=> 'ejemplo@gmail.com', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::label('eps','EPS') !!}
				{!! Form::text('eps',$mentor->eps, ['class' => 'form-control', 'placeholder'=> 'Ingrese EPS', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::label('rh','Tipo De Sangre') !!}
				{!! Form::text('rh',$mentor->rh, ['class' => 'form-control', 'placeholder'=> 'Ingrese Tipo De Sangre', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::label('areas_id','Area Asignada') !!}
				{!! Form::select('areas_id', $areas, null, ['class' => 'form-control', 'placeholder' => 'Seleccione Area', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Guardar Cambios', ['class' => 'btn btn-primary'])!!}
		</div>

	{!! Form::close() !!}
@endsection
