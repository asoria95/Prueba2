@include('layouts.head')

<title>Seccion de turistas </title>

@include('layouts.css')
<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    width: 600;
    height: 350;
    margin: auto;
  }
  .myCarousel{

  }
  </style>
<body>
<div id="wrapper">
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

  <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html">Need Tourist</a>
  </div>
  <!-- Top Menu Items -->
  <ul class="nav navbar-right top-nav">
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
          <ul class="dropdown-menu message-dropdown">
              <li class="message-preview">
                  <a href="#">
                      <div class="media">
                          <span class="pull-left">
                              <img class="media-object" src="http://placehold.it/50x50" alt="">
                          </span>
                          <div class="media-body">
                              <h5 class="media-heading">
                                  <strong>John Smith</strong>
                              </h5>
                              <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                              <p>Lorem ipsum dolor sit amet, consectetur...</p>
                          </div>
                      </div>
                  </a>
              </li>
              <li class="message-preview">
                  <a href="#">
                      <div class="media">
                          <span class="pull-left">
                              <img class="media-object" src="http://placehold.it/50x50" alt="">
                          </span>
                          <div class="media-body">
                              <h5 class="media-heading">
                                  <strong>John Smith</strong>
                              </h5>
                              <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                              <p>Lorem ipsum dolor sit amet, consectetur...</p>
                          </div>
                      </div>
                  </a>
              </li>
              <li class="message-preview">
                  <a href="#">
                      <div class="media">
                          <span class="pull-left">
                              <img class="media-object" src="http://placehold.it/50x50" alt="">
                          </span>
                          <div class="media-body">
                              <h5 class="media-heading">
                                  <strong>John Smith</strong>
                              </h5>
                              <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                              <p>Lorem ipsum dolor sit amet, consectetur...</p>
                          </div>
                      </div>
                  </a>
              </li>
              <li class="message-footer">
                  <a href="#">Read All New Messages</a>
              </li>
          </ul>
      </li>
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
          <ul class="dropdown-menu alert-dropdown">
              <li>
                  <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
              </li>
              <li>
                  <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
              </li>
              <li>
                  <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
              </li>
              <li>
                  <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
              </li>
              <li>
                  <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
              </li>
              <li>
                  <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
              </li>
              <li class="divider"></li>
              <li>
                  <a href="#">View All</a>
              </li>
          </ul>
      </li>
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ Auth::user()->name }} <b class="caret"></b></a>
          <ul class="dropdown-menu">
              <li>
                  <a href="#"><i class="fa fa-fw fa-user"></i> Mi perfil</a>
              </li>
              <li>
                  <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
              </li>
              <li>
                  <a href="#"><i class="fa fa-fw fa-gear"></i> Configuracion</a>
              </li>
              <li class="divider"></li>
              <li>
                  <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-fw fa-power-off"></i> Cerrar Sesión</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: one;">
                      {{ csrf_field() }}
                    </form>
              </li>
          </ul>
      </li>
      </ul>

      <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">

            <div class="col-md-12" style="color:#ffffff ">
              <h4> Usuario </h4>
            </div>
            <div class="col-md-12" style="color:#ffffff ">
              <p>{{ Auth::user()->name }} </p>
            </div>

            <div class="col-md-12" style="color:#ffffff ">
              <h4> Email </h4>
            </div>
            <div class="col-md-12" style="color:#ffffff ">
              <p>  {{ Auth::user()->email }}</p>
              <hr>
            </div>
            <div class="col-md-12" style="color:#ffffff ">
              <h3 style="color:#FFFFFF ">Opciones</h3>
            </div>

            <li>
              <a class="" href="{{route('tourist.requestTouristPackage', Auth::user()->id)}}" ><span class="glyphicon glyphicon-plus-sign"></span> Solicitar Paquete Turistico</a>
            </li>
          </ul>
      </div>

</nav>

<div id="page-wrapper">

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                ! Bienvenido !
                <small>Bienvenido a Need Tourist, ven y vive la aventura con nosotros</small>
            </h1>
            <!--
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="{{route('tourist.index')}}">Turistas</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Listado de Turistas
                </li>
            </ol>
          -->
    </div>
  </div>
<!--
    <div class="row">
      <div class="col-md-6">
          <a class="btn btn-primary btn-xs" href="{{route('tourist.create')}}" ><span class="glyphicon glyphicon-plus-sign"></span> Añadir Usuario</a>
      </div>
      <div class="col-md-6">
          <a class="btn btn-primary btn-lg" href="{{route('tourist.requestTouristPackage', Auth::user()->id)}}" ><span class="glyphicon glyphicon-plus-sign"></span> Solicitar Paquete Turistico</a>
      </div>
      <hr>
    </div>

-->
    <div class="row">

      <div class="col-md-2">

      </div>

      <div id="myCarousel" class="carousel slide col-md-8" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
          <div class="carousel-inner">
          <div class="item active">
            <img src="/img/admistrationSection/carrocel1.jpg"  alt="Chania">
            <div class="carousel-caption">
              <h3>Ciudad</h3>
              <p>Conoce la ciudad con nosotros</p>
            </div>
          </div>

          <div class="item">
            <img src="/img/admistrationSection/carrocel2.jpg"  alt="Chicago">
            <div class="carousel-caption">
              <h3>El viaje de tus sueños</h3>
              <p>Realiza el viaje de tus sueños con nosotros</p>
            </div>
          </div>

          <div class="item">
            <img src="/img/admistrationSection/carrocel3.jpg"  alt="Chicago">
            <div class="carousel-caption">
              <h3>El viaje de tus sueños</h3>
              <p>Realiza el viaje de tus sueños con nosotros</p>
            </div>
          </div>

        <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    </div>

    <div class="" id="Code" style="visibility: hidden;">
        {{ Auth::user()->id }}
    </div>

    <div class="row col-md-12" id="Paquetes">


      </div>



    <!-- Adjustment -->
     @include('Tourist.partials.adjustment')
     <!-- Adjustment -->
      @include('Tourist.partials.adjustment')
</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->
  </div>
<!-- /#wrapper -->

<script src="{{asset('js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript
js/bootstrap.min.js
  -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/tourist.js')}}"></script>
    <script type="text/javascript">
    $( document ).ready(function() {
      //alert($('#Code').text());
      serviciosDeUnTurista($('#Code').text());
    });
    </script>
</body>

</html>
