@extends('admin.template.main')

@section('title', 'Crear Semilla')

@section('content')
	
	{!! Form::open(['route' => 'admin.semilla.store']) !!}

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
				{!! Form::select('documento_de_identidad', ['T.I' => 'Tarjeta De Identidad', 'CC.'=>'Cedula De Ciudadania','CE'=>'Cedula Extranjera'], null, ['class' => 'form-control'])!!}
		</div>
		</div>
		<div class="form-group">
				{!! Form::label('numero_documento','Numero De Documento') !!}
				{!! Form::text('numero_documento',null, ['class' => 'form-control', 'placeholder'=> 'Ingrese Numero De Documento', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::label('correo_electronico','Correo Electronico') !!}
				{!! Form::text('correo_electronico',null, ['class' => 'form-control', 'placeholder'=> 'ejemplo@gmail.com', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Registrar', ['class' => 'btn btn-primary'])!!}

		</div>


	{!! Form::close() !!}
@endsection
