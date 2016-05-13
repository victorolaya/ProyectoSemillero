@extends('admin.main')

@section('title', 'Editar Administrador' . $admin->name)

@section('contenido')
	
	{!! Form::open(['route' => ['admin.administradores.update',$admin], 'method' => 'PUT']) !!}

		<div class="form-group">
				{!! Form::label('name','Nombre Del Admnistrador') !!}
				{!! Form::text('name',$admin->name, ['class' => 'form-control', 'placeholder'=> 'Ingrese El Nombre Del Administrador', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::label('email','Correo Electronico') !!}
				{!! Form::text('email',$admin->email, ['class' => 'form-control', 'placeholder'=> 'ejemplo@gmail.com', 'required']) !!}
		</div>
		<div Style="text-align:center" class="form-group" >
			{!! Form::submit('Editar', ['class' => 'btn btn-primary',])!!}

		</div>


	{!! Form::close() !!}
@endsection
