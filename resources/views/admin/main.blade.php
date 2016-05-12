<!DOCTYPE html>
<html>
<head>
	<meta chrset="UTF-8">
	<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
	<script src="{{asset('plugins/jquery/js/jquery-2.2.3.js')}}"></script>
	<script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	
	<title>@yield('title', 'Semillero universitario') | Panel administración </title>
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

	<section class="content">
		<div class="container">    
		  <div class="row">
		  	<section class="contenido">
		  		<div class="panel panel-default">
		  			<div class="panel-heading">
		  				<h3 class="panel-title">@yield('title')</h3>
		  			</div>
		  			<div class="panel-body">
		  				@include('flash::message')
		  				<!-- Incluyo errores.blade.php para optimizacion de codigo-->
		  				@include('admin.template.partials.errores')
		  				@yield('contenido')
		  			</div>
		  		</div> 
		  	</section>
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
	
</body>
</html>