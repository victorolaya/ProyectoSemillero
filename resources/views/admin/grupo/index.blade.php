@extends('admin.main')

@section('title', 'Lista De Grupos')

@section('contenido')
	<div Style="text-align:center">
	<a href="{{ route('admin.grupo.create') }}" class="btn btn-info">Registrar Nuevo Grupo</a><hr>
	</div>

	<table class="table table-striped">
		<thead>
			<th Style="text-align:center">ID</th>
			<th Style="text-align:center">Nombre</th>
			<th Style="text-align:center">Jornada</th>
			<th Style="text-align:center">Area A La Que Pertence</th>
			<th Style="text-align:center">Mentor Del Grupo</th>
		</thead>
		<tbody>
			@foreach($grupos as $grupo)
				<tr>
					<td Style="text-align:center">{{ $grupo->id }}</td>
					<td Style="text-align:center">{{ $grupo->nombre }}</td>
					<td Style="text-align:center">{{ $grupo->jornada }}</td>
					<td Style="text-align:center">{{ $grupo->areas_id}}</td>	
					<td Style="text-align:center">{{ $grupo->mentores_id}}</td>						
					
					<td Style="text-align:center"><a href="{{ route('admin.grupo.edit', $grupo->id )}}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-
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
