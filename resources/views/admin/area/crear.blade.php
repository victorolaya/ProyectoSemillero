@extends('admin.template.main')

@section('title', 'Agregar Una Nueva Area')

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
	
	{!! Form::open(['route' => 'admin.area.store']) !!}

		<div class="form-group">
				{!! Form::label('nombre','Nombre Del Area') !!}
				{!! Form::text('nombre',null, ['class' => 'form-control', 'placeholder'=> 'Ingrese El Nombre Del Area', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::label('disponibilidad', 'Disponibilidad Del Area') !!}
				{!! Form::select('disponibilidad', ['Si' => 'Si Encuentra Disponible','No'=>'No Se Encuentra Disponible'], null, ['class' => 'form-control',  'placeholder' => 'Selecciones una opcion', 'required'])!!}
		</div>
		<div class="form-group">
			{!! Form::submit('Agregar', ['class' => 'btn btn-primary'])!!}

		</div>


	{!! Form::close() !!}
@endsection
