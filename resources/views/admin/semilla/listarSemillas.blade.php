@extends('admin.main')

@section('title','Semillas inscritas')

@section('contenido')

	<table class="table table-striped">
		<thead>
			<th style="text-align:center">ID</th>
			<th style="text-align:center">Nombre</th>
			<th style="text-align:center">Documento</th>
			<th style="text-align:center">Numero</th>
			<th style="text-align:center">Acción</th>
		</thead>
		<tbody>
			@foreach($semillas as $semilla)
				<tr>
					<td style="text-align:center">{{$semilla ->id}}</td>
					<td style="text-align:center">{{$semilla->nombre}}</td>
					<td style="text-align:center">{{$semilla->documento}}</td>
					<td style="text-align:center">{{$semilla->numero}}</td>
					<td style="text-align:center"><a href="{{route('admin.semillas.edit', $semilla->id )}}" class="btn btn-warning" class="">
					<span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> 
					<a href="{{route('admin.semillas.destroy',$semilla->id)}}" onclick="return confirm('¿Seguro que desea eliminarlo?')" class="btn btn-danger">
						<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!!$semillas->links()!!}
@endsection