@extends('admin.main')

@section('title', 'Lista De Administradores')

@section('contenido')
	<div Style="text-align:center">
		<a href="{{ route('admin.administradores.create') }}" class="btn btn-info">Registrar Administrador</a><hr>
	</div>

	<table class="table table-striped">
		<thead>
			<th Style="text-align:center">ID</th>
			<th Style="text-align:center">Nombre</th>
			<th Style="text-align:center">Correo</th>
			<th Style="text-align:center">Contraseña</th>
			<th Style="text-align:center">Accion</th>
		</thead>
		<tbody>
			@foreach($administradores as $admin)
				<tr>
					<td Style="text-align:center">{{ $admin->id }}</td>
					<td Style="text-align:center">{{ $admin->name }}</td>					
					<td Style="text-align:center">{{ $admin->email }}</td>
					<td Style="text-align:center">**********</td>

					<td Style="text-align:center">
						<a href="{{ route('admin.administradores.edit', $admin->id )}}" class="btn btn-warning" >
						<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>

					 	<a href="{{ route('admin.administradores.destroy', $admin->id )}}" onclick="return confirm('¿Estas totalmente seguro de eliminar el Usuario Administrativo {{ $admin->name }}?')" class="btn btn-danger">
					 	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
					</td>

				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">
	{!! $administradores->render() !!}
	</div>

@endsection
