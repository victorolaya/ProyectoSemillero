@extends('admin.template.main')

@section('title', 'Registrar Mentor')

@section('content')
	
	<!--Este codigo ya lo llamo directamente en main.blade.php referente a errores.blade.php-->
	@if(count($errors) > 0)
		<div class="alert alert-danger" role="alert">
			<ul>
				@foreach($errors->all() as $error)
					<li> {{ $error }} </li>
				@endforeach
			</ul>
		</div>
	@endif

	{!! Form::open(['route' => 'admin.mentor.store', 'method' => 'POST', 'files' => true]) !!}

		<div class="form-group">
				{!! Form::label('nombres','Nombres') !!}
				{!! Form::text('nombres',null, ['class' => 'form-control', 'placeholder'=> 'Ingrese Nombres', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::label('apellidos','Apellidos') !!}
				{!! Form::text('apellidos',null, ['class' => 'form-control', 'placeholder'=> 'Ingrese Apellidos', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::label('documento_de_identidad', 'Tipo De Documento') !!}
				{!! Form::select('documento_de_identidad', ['TI' => 'Tarjeta De Identidad', 'CC'=>'Cedula De Ciudadania'], null, ['class' => 'form-control'])!!}
		</div>
		<div class="form-group">
				{!! Form::label('numero_documento','Numero De Documento') !!}
				{!! Form::text('numero_documento',null, ['class' => 'form-control', 'placeholder'=> 'Ingrese Numero De Documento', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::label('edad','Edad') !!}
				{!! Form::text('edad',null, ['class' => 'form-control', 'placeholder'=> 'Ingrese La Edad', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::label('fecha_de_nacimiento','Fecha De Nacimiento') !!}
				{!! Form::date('fecha_de_nacimiento',null, ['class' => 'form-control', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::label('direccion','Direccion') !!}
				{!! Form::text('direccion',null, ['class' => 'form-control', 'placeholder'=> 'Ingrese La Direccion', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::label('municipio','Municipio') !!}
				{!! Form::text('municipio',null, ['class' => 'form-control', 'placeholder'=> 'Ingrese El Municipio', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::label('numero_movil','Numero Movil') !!}
				{!! Form::text('numero_movil',null, ['class' => 'form-control', 'placeholder'=> 'Ingrese Numero Movil', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::label('correo_electronico','Correo Electronico') !!}
				{!! Form::text('correo_electronico',null, ['class' => 'form-control', 'placeholder'=> 'ejemplo@gmail.com', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::label('eps','EPS') !!}
				{!! Form::text('eps',null, ['class' => 'form-control', 'placeholder'=> 'Ingrese EPS', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::label('rh','Tipo De Sangre') !!}
				{!! Form::text('rh',null, ['class' => 'form-control', 'placeholder'=> 'Ingrese Tipo De Sangre', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::label('areas_id','Area A Asignar') !!}
				{!! Form::select('areas_id', $areas, null, ['class' => 'form-control', 'placeholder' => 'Seleccione Area', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::label('foto','Foto') !!}
				{!! Form::file('foto') !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Registrar Mentor', ['class' => 'btn btn-primary'])!!}
		</div>

	{!! Form::close() !!}
@endsection
