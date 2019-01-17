@include('layouts.head')

<title>Seccion de turistas </title>

@include('layouts.css')

<body>
<div id="wrapper">
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

 @include('layouts.banner')
 <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->


 <!-- /.navbar-collapse  -->
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

    <div class="row">
      <div class="col-md-6">
          <a class="btn btn-primary btn-lg" href="{{route('tourist.requestTouristPackage', Auth::user()->id)}}" ><span class="glyphicon glyphicon-plus-sign"></span> Solicitar Paquete Turistico</a>
      </div>
      <hr>
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
      //alert();
      serviciosDeUnTurista($('#Code').text());
    });
    </script>
</body>

</html>
