@extends('admin.main')

@section('title', 'Lista De Mentores')

@section('contenido')

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
			<th Style="text-align:center">ID</th>
			<th Style="text-align:center">Nombres</th>
			<th Style="text-align:center">Apellidos</th>
			<th Style="text-align:center">Tipo Documento</th>
			<th Style="text-align:center">Numero Documento</th>
			<th Style="text-align:center">Edad</th>
			<th Style="text-align:center">Fecha De Nacimiento</th>
			<th Style="text-align:center">Correo</th>
			<th Style="text-align:center">Municipio</th>
			<th Style="text-align:center">Direccion</th>
			<th Style="text-align:center">Numero Movil</th>
			<th Style="text-align:center">Area Asignada</th>
			<th Style="text-align:center">Accion</th>

		</thead>
		<tbody>
			@foreach($mentores as $mentor)
				<tr>
					<td Style="text-align:center">{{ $mentor->id }}</td>
					<td Style="text-align:center">{{ $mentor->nombres }}</td>
					<td Style="text-align:center">{{ $mentor->apellidos }}</td>
					<td Style="text-align:center">
						@if($mentor->documento_de_identidad == "TI")
							<span class="label label-success">{{ $mentor->documento_de_identidad}}</span>
						@else
							<span class="label label-primary">{{ $mentor->documento_de_identidad}}</span>
						@endif
					</td>
					<td Style="text-align:center">{{ $mentor->numero_documento }}</td>
					<td Style="text-align:center">{{ $mentor->edad }}</td>	
					<td Style="text-align:center">{{ $mentor->fecha_de_nacimiento }}</td>				
					<td Style="text-align:center">{{ $mentor->correo_electronico }}</td>
					<td Style="text-align:center">{{ $mentor->municipio }}</td>
					<td Style="text-align:center">{{ $mentor->direccion }}</td>
					<td Style="text-align:center">{{ $mentor->numero_movil }}</td>
					<td Style="text-align:center">{{ $mentor->areas_id }}</td>
					<td Style="text-align:center">
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
