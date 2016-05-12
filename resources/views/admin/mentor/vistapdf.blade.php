<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reporte De Mentores</title>
	<link rel="stylesheet" type="text/css" href="css/reporte.css">
</head>
<body>
	
	<table class="encabezado">
		<tbody>
				<tr>
					<td><img class="admin-logo-semillero" src="{{ asset('imagenes/LogoSemilleroUniversitario.png') }}"></td>
					<td class="texto"><h3 class="tituloPDF">Semillero Universitario</h3></td>
					<td><img class="admin-logo-universidad" src="{{ asset('imagenes/LogoUniversidadDelQuindio.jpg') }}"></td>
				</tr>
		</tbody>
	</table>	
	
	<div class="textoEncabezadoPDF"> 
		<h1>Reporte De Mentores</h1>
	</div>
	
	

	<table class="reporte">
		<thead>
			<tr>
				<th>ID</th>
				<th>NOMBRES</th>
				<th>APELLIDOS</th>
				<th>TIPO DOCUMENTO</th>
				<th>NUMERO</th>
			</tr>	
		</thead>
		<tbody>
			@foreach($mentores as $mentor)
				<tr>
					<td> {{ $mentor->id }}</td>
					<td> {{ $mentor->nombres }}</td>
					<td> {{ $mentor->apellidos }}</td>
					<td> {{ $mentor->documento_de_identidad }}</td>
					<td> {{ $mentor->numero_documento }}</td>
				</tr>
			@endforeach
		</tbody>	
	</table>
</body>
</html>