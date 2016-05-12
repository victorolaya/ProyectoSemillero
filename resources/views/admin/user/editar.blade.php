@extends('admin.template.main')

@section('title', 'Editar Administrador' . $user->name)

@section('content')
	
	{!! Form::open(['route' => ['admin.user.update',$user], 'method' => 'PUT']) !!}

		<div class="form-group">
				{!! Form::label('name','Nombre Del Admnistrador') !!}
				{!! Form::text('name',$user->name, ['class' => 'form-control', 'placeholder'=> 'Ingrese El Nombre Del Administrador', 'required']) !!}
		</div>
		<div class="form-group">
				{!! Form::label('email','Correo Electronico') !!}
				{!! Form::text('email',$user->email, ['class' => 'form-control', 'placeholder'=> 'ejemplo@gmail.com', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Editar', ['class' => 'btn btn-primary'])!!}

		</div>


	{!! Form::close() !!}
@endsection
