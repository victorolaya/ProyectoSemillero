@extends('admin.template.main')

@section('title', 'Lista De Areas Del Semillero Universitario')

@section('content')

	<a href="{{ route('admin.area.create') }}" class="btn btn-info">Registrar Nueva Area</a><hr>

	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Disponibilidad</th>
			<th>Accion</th>
		</thead>
		<tbody>
			@foreach($areas as $area)
				<tr>
					<td>{{ $area->id }}</td>
					<td>{{ $area->nombre }}</td>					
					<td>
						@if($area->disponibilidad == "Si")
							<span class="label label-success">{{ $area->disponibilidad}}</span>
						@else
							<span class="label label-primary">{{ $area->disponibilidad}}</span>
						@endif
					</td>
					<td> 
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
