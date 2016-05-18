@extends('admin.main')

@section('title', 'Editando Grupo: ' . $grupo->nombre)

@section('contenido')
	
	{!! Form::open(['route' => ['admin.grupo.update',$grupo], 'method' => 'PUT']) !!}

		<div class="form-group">
				{!! Form::label('nombre','Nombre Del Grupo') !!}
				{!! Form::text('nombre',$grupo->nombre, ['class' => 'form-control', 'placeholder'=> 'Ingrese el nombre del grupo', 'required']) !!}
		</div>
			<div class="form-group">
				{!! Form::label('jornada', 'Jornada Del Grupo') !!}
				{!! Form::select('jornada', ['Mañana' => 'Mañana','Tarde'=>'Tarde'], $grupo->jornada, ['class' => 'form-control'])!!}
		</div>
		<div class="form-group">
				{!! Form::label('areas_id','Area A Asignar') !!}
				{!! Form::select('areas_id', $areas, null, ['class' => 'form-control', 'placeholder' => 'Seleccione Area', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::label('mentores_id','Mentor Al Que Pertenece El grupo') !!}
				{!! Form::select('mentores_id',$mentores,null, ['class' => 'form-control', 'placeholder'=> 'Seleccione Mentor Del Grupo', 'required']) !!}
		</div>
		<div Style="text-align:center" class="form-group">
			{!! Form::submit('Guardar Cambios', ['class' => 'btn btn-primary'])!!}

		</div>


	{!! Form::close() !!}
@endsection
