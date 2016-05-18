@extends('admin.main')

@section('title', 'Crear Grupo')

@section('contenido')
	
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

	{!! Form::open(['route' => 'admin.grupo.store', 'method' => 'POST']) !!}

		<div class="form-group">
				{!! Form::label('nombre','Nombre Del Grupo') !!}
				{!! Form::text('nombre',null, ['class' => 'form-control', 'placeholder'=> 'Ingrese El Nombre Del Grupo', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::label('jornada', 'Jornada Del Grupo') !!}
				{!! Form::select('jornada', ['Mañana' => 'Mañana','Tarde'=>'Tarde'], null, ['class' => 'form-control'])!!}
		</div>
		<div class="form-group">
				{!! Form::label('areas_id','Area A Asignar') !!}
				{!! Form::select('areas_id', $areas, null, ['class' => 'form-control', 'placeholder' => 'Seleccione Area', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::label('mentores_id','Mentor Al Que Pertenece El grupo') !!}
				{!! Form::select('mentores_id',$mentores,null, ['class' => 'form-control', 'placeholder'=> 'Seleccione Mentor Del Grupo', 'required']) !!}
		</div>
		<div style="text-align:center" class="form-group">
			{!! Form::submit('Registrar', ['class' => 'btn btn-primary'])!!}
		</div>

	{!! Form::close() !!}
@endsection
