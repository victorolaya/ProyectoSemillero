<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reporte De Semillas</title>
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
		<h1>Reporte De Semillas</h1>
	</div>
	
	

	<table class="reporte">
		<thead>
			<tr>
				<th>NOMBRES</th>
				<th>APELLIDOS</th>
				<th>EDAD</th>
				<th>TIPO DOCUMENTO</th>
				<th>NUMERO</th>
				<th>TELEFONO</th>
				<th>E-MAIL</th>
			</tr>	
		</thead>
		<tbody>
			@foreach($semillas as $semilla)
				<tr>
					<td> {{ $semilla->nombre }}</td>
					<td> {{ $semilla->apellidos }}</td>
					<td> {{ $semilla->edad }}</td>
					<td> {{ $semilla->documento }}</td>
					<td> {{ $semilla->numero }}</td>
					<td> {{ $semilla->telefono }}</td>
					<td> {{ $semilla->correoElectronico }}</td>

				</tr>
			@endforeach

		</tbody>	
	</table>
</body>
</html>