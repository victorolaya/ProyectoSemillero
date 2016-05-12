<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Semillero Universitario: {{ $semilla->nombres }}</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/general.css') }}">
</head>
<body>
	Hola mundo
<br><br>
<hr>
<h1>{{ $semilla->nombres}} | {{ $semilla->foto_semilla->nombre }} | 

@foreach($semilla->notas as $nota)
{{$nota->valor}}
@endforeach

</h1>

</body>
</html>





