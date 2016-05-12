@extends('admin.main')

@section('title', 'Editar Area - ' . $area->nombre)

@section('contenido')
	
	{!! Form::open(['route' => ['admin.area.update',$area], 'method' => 'PUT']) !!}

		<div class="form-group">
				{!! Form::label('nombre','Nombre Del Area') !!}
				{!! Form::text('nombre',$area->nombre, ['class' => 'form-control', 'placeholder'=> 'Ingrese El Nombre Del Area', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::label('disponibilidad', 'Disponibilidad Del Area') !!}
				{!! Form::select('disponibilidad', ['Si' => 'Si Encuentra Disponible','No'=>'No Se Encuentra Disponible'], $area->disponibilidad, ['class' => 'form-control'])!!}
		</div>
		<div Style="text-align:center" class="form-group">
			{!! Form::submit('Editar', ['class' => 'btn btn-primary'])!!}

		</div>


	{!! Form::close() !!}
@endsection
