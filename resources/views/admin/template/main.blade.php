<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Default') | Panel De Administracion</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
</head>
<body>

	<!--Con este nav habido en partials, inserto mi menu de navegacion en mi pagina-->
	<section class="header">
		<div class="container text-center">    
		  <div class="row">
		  		@include('admin.template.partials.nav')
		  </div>
		</div>
	</section>

	<section class="section-admin">
		<div class="container">
			<div class="row">
				<div class="panel panel-default">
					<div class="panel-heading">

						<h3 class="panel-title">@yield('title')</h3>

					</div>
					<div class="panel-body">

						@include('flash::message')
						<!-- Incluyo errores.blade.php para optimizacion de codigo-->
					@include('admin.template.partials.errores')
						@yield('content')

					</div>
				</div>
			</div>
		</div>
	</section>	

	<footer class="admin-footer">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="collapse navbar-collapse">

					<p class="navbar-text"> Todos los derechos reservados &copy {{ date('Y') }}</p>
					<p class="navbar-text navbar-right"> <b>Semillero Universitario</b></p>

				</div>
			</div>
		</nav>
	</footer>

<!--kquery me influye en la funcionalidad, movimiento de los componentes-->
	<script src="{{ asset('plugins/jquery/js/jquery-2.2.3.js')}}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js')}}"></script>

</body>
</html>