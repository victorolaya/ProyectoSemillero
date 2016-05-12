@extends('admin.main')

@section('title', 'Lista De Areas Del Semillero Universitario')

@section('contenido')
	<div Style="text-align:center">
		<a href="{{ route('admin.area.create') }}" class="btn btn-info">Registrar Nueva Area</a><hr>
	</div>
	
	<table class="table table-striped">
		<thead>
			<th Style="text-align:center">ID</th>
			<th Style="text-align:center">Nombre</th>
			<th Style="text-align:center">Disponibilidad</th>
			<th Style="text-align:center">Accion</th>
		</thead>
		<tbody>
			@foreach($areas as $area)
				<tr>
					<td Style="text-align:center">{{ $area->id }}</td>
					<td Style="text-align:center">{{ $area->nombre }}</td>					
					<td Style="text-align:center">
						@if($area->disponibilidad == "Si")
							<span class="label label-success">{{ $area->disponibilidad}}</span>
						@else
							<span class="label label-primary">{{ $area->disponibilidad}}</span>
						@endif
					</td>
					<td Style="text-align:center"> 
						<a href="{{ route('admin.area.edit', $area->id )}}" class="btn btn-warning">
						<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>

					 	<a href="{{ route('admin.area.destroy', $area->id )}}" onclick="return confirm('¿Estas totalmente seguro de eliminar el area de {{ $area->nombre }}?')" class="btn btn-danger">
					 	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

	<div class="text-center">
	{!! $areas->render() !!}
	</div>

@endsection
