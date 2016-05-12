@extends('admin.template.main')

@section('title', 'Lista De Administradores')

@section('content')

	<a href="{{ route('admin.user.create') }}" class="btn btn-info">Registrar Administrador</a><hr>

	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Contraseña</th>
			<th>Accion</th>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->name }}</td>					
					<td>{{ $user->email }}</td>
					<td>**********</td>

					<td>
						<a href="{{ route('admin.user.edit', $user->id )}}" class="btn btn-warning">
						<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>

					 	<a href="{{ route('admin.user.destroy', $user->id )}}" onclick="return confirm('¿Estas totalmente seguro de eliminar el Usuario Administrativo {{ $user->name }}?')" class="btn btn-danger">
					 	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
					</td>

				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">
	{!! $users->render() !!}
	</div>

@endsection
