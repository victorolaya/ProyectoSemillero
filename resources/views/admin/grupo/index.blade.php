@extends('admin.template.main')

@section('title', 'Lista De Grupos')

@section('content')

	<a href="{{ route('admin.grupo.create') }}" class="btn btn-info">Registrar Nuevo Grupo</a><hr>

	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Jornada</th>
			<th>Area A La Que Pertence</th>
			<th>Mentor Del Grupo</th>
		</thead>
		<tbody>
			@foreach($grupos as $grupo)
				<tr>
					<td>{{ $grupo->id }}</td>
					<td>{{ $grupo->nombre }}</td>
					<td>{{ $grupo->jornada }}</td>
					<td>{{ $grupo->areas_id}}</td>	
					<td>{{ $grupo->mentores_id}}</td>						
					
					<td><a href="{{ route('admin.grupo.edit', $grupo->id )}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-
						hidden="true"></span></a>

					 <a href="{{ route('admin.grupo.destroy', $grupo->id )}}" onclick="return confirm('¿Estas totalmente seguro de eliminar el Grupo {{ $grupo->nombre }} jornada {{ $grupo->jornada }}?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-
						hidden="true"></span></a>

				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">
	{!! $grupos->render() !!}
	</div>
@endsection
