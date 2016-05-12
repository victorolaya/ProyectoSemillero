<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <!-- <a class="navbar-brand" href="#">Semillero Universitario</a> -->
     <img alt="Semillero Universitario" class="admin-logo-nav" src="{{ asset('imagenes/LogoSemilleroUniversitario.png') }}">
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
          <li><a href="{{url ('/admin') }}">Administradores</a></li>
          <!-- En la siguiente linea se le estipula la ruta al icono Areas-->
          <li><a href="{{ route('admin.area.index') }}">Areas</a></li>
          <!-- En la siguiente linea se le estipula la ruta al icono Mentores-->
          <li><a href="{{ route('admin.mentor.index') }}">Mentores</a></li>
         <!-- En la siguiente linea se le estipula la ruta al icono Grupos-->
          <li><a href="{{ route('admin.grupo.index') }}">Grupos</a></li>

          <li><a href="#">Semillas</a></li>
         
       <!-- <li class="active"><a href="#">Areas <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Grupos</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li> -->
      </ul>
      <!--   <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
      </form>  -->


       <!-- REPORTES ///////////////////////////////////// 
        <ul class="nav navbar-nav navbar-right2">
         <li class="dropdown2">
          <a href="#" class="dropdown-toggle2" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Generar Reportes <span class="caret"></span></a>
          <ul class="dropdown-menu2">
            <li><a href="#">Reporte de Mentores</a></li>
            <li><a href="#">Reporte de Semillas</a></li>
          </ul>
        </li>
      </ul>
       /////////////////////////////////////////////////-->

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"> <span class="label label-success">{{auth()->guard('admin')->user()->name}}</span></a></li>


        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Opciones<span class="caret"></span></a>
          <ul class="dropdown-menu">
           <!-- <li><a href="pdf">Reporte Mentores</a></li>-->
           <li><a href="{{ route('admin.mentor.imprimirpdf') }}">Generar Reporte Mentores</a></li>
             <li><a href="#">Generar Reporte Semillas</a></li>
             <li><a href="{{url('/admin/logout')}}">Salir</a></li>
           <!--  <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>  -->
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>