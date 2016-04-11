<!DOCTYPE html>
<html>
<head>
	<meta chrset="UTF-8">
	<title>@yield('title', 'Semillero universitario') | Semillero universitario </title>
	<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap-tema.css')}}">
</head>
<body>
	<section class="header">
		@include('plantilla.partials.nav')
	</section>
	<section id="page_foto">
		@include('plantilla.partials.pageFoto')
	</section>
	<br>
	<section class="content">
		<div class="container text-center">    
		  <div class="row">
		  	<section class="contenido">
		  		<div class="col-sm-7">
		  		  <span>
		  		    <p style="text-align: center">
		  		    	@yield('contenido')
		  		    </p>
		  		  </span>
		  		</div>
		  	</section>

		  	<section class="sidebar">
		  		<div class="col-sm-3">
		  		  <div class="list-group">@yield('sidebar-opciones')
		  		  </div>
		  		 </div>
		  	</section>
		  </div>
		</div>
		<br>
	</section>

	<section class="footer">
		Aviso legal | politica de privacidad | Mapa del sitio
	</section>

	<script src="{{asset('plugins/jquery/js/jquery-2.2.3.js')}}"></script>
	<script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
</body>
</html>