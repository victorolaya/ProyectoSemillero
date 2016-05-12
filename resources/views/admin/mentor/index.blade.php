@extends('admin.template.main')

@section('title', 'Lista De Mentores')

@section('content')

	<a href="{{ route('admin.mentor.create') }}" class="btn btn-info">Registrar Un Mentor</a>

	<!-- BUSCADOR DE MENTORES -->
	{!! Form::open(['route' => 'admin.mentor.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
	
	<div class="input-group">
		{!! Form::text('nombres', null, ['class' => 'form-control', 'placeholder' => 'Buscar Mentor...', 'aria-describedby' => 'search']) !!}
		<span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
	</div>
	{!! Form::close() !!}
	<!-- BUSCADOR DE MENTORES -->

	<hr>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>Tipo Documento</th>
			<th>Numero Documento</th>
			<th>Edad</th>
			<th>Fecha De Nacimiento</th>
			<th>Correo</th>
			<th>Municipio</th>
			<th>Direccion</th>
			<th>Numero Movil</th>
			<th>Area Asignada</th>
			<th>Accion</th>

		</thead>
		<tbody>
			@foreach($mentores as $mentor)
				<tr>
					<td>{{ $mentor->id }}</td>
					<td>{{ $mentor->nombres }}</td>
					<td>{{ $mentor->apellidos }}</td>
					<td>
						@if($mentor->documento_de_identidad == "TI")
							<span class="label label-success">{{ $mentor->documento_de_identidad}}</span>
						@else
							<span class="label label-primary">{{ $mentor->documento_de_identidad}}</span>
						@endif
					</td>
					<td>{{ $mentor->numero_documento }}</td>
					<td>{{ $mentor->edad }}</td>	
					<td>{{ $mentor->fecha_de_nacimiento }}</td>				
					<td>{{ $mentor->correo_electronico }}</td>
					<td>{{ $mentor->municipio }}</td>
					<td>{{ $mentor->direccion }}</td>
					<td>{{ $mentor->numero_movil }}</td>
					<td>{{ $mentor->areas_id }}</td>
					<td>
						<a href="{{ route('admin.mentor.edit', $mentor->id )}}" class="btn btn-warning">
						<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>

					 	<a href="{{ route('admin.mentor.destroy', $mentor->id )}}" onclick="return confirm('¿Estas totalmente seguro de eliminar el mentor {{ $mentor->nombres }}?')" class="btn btn-danger">
					 	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
					</td>

				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">
	{!! $mentores->render() !!}
	</div>

@endsection
