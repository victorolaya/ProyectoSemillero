<!DOCTYPE html>
<html>
<head>
	<meta chrset="UTF-8">
	<title>@yield('title', 'Semillero universitario') | Semillero universitario </title>
	<link rel="stylesheet" href="{{asset('/css/bootstrap-tema.css')}}">
	<script href="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<script href="{{('plugins/jquery/js/jquery-2.2.3.js')}}"></script>
</head>
<body>
	<section class="header">
		@yield('header')	
	</section>
	<section id="page_foto">
		@include('users.partials.pageFoto')
	</section>
	<br>
	<section class="content">
		<div class="container text-center">    
		  <div class="row">
		  	<section class="contenido">
		  		<div class="col-sm-7">
		  		  <span>
		  		    <p style="text-align: center">
		  		    	@include('flash::message')
		  		    		<!-- Incluyo errores.blade.php para optimizacion de codigo-->
		  		    	@include('admin.template.partials.errores')
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
		<div class="container text-center">
			<div class="row">
				<div class="col-sm-7">
					Aviso legal | politica de privacidad | Mapa del sitio
				</div>
				<div class="singin">
					<div class="col-sm-3">
						<a href="/admin/login">Login</a>
					</div>
				</div>
			</div>

		</div>
	</section>
	<script src="{{asset('plugins/jquery/js/jquery-2.2.3.js')}}"></script>
	<script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
</body>
</html>