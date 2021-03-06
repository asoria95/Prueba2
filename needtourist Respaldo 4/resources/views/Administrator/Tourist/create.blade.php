@include('layouts.head')

<title>Seccion de turistas </title>

@include('layouts.css')

<body>
<div id="wrapper">
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

 @include('layouts.banner')
 @include('Tourist.partials.menuTourist')

<div id="page-wrapper">

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Sección Turistas
                <small>Añadir un nuevo turista</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="{{route('indexPersons')}}">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Añadir un nuevo turista
                </li>
            </ol>

        </div>
    </div>
    <!-- /.row -->
            <div class="col-md-8 col-md-offset-2">
              @if (count($errors) > 0)
                <div class="alert alert-danger">
                  <strong>Error!</strong> Revise los campos obligatorios.<br><br>
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif

            </div>

            @if(Session::has('success'))
              <div class="alert alert-info">
                {{Session::get('success')}}
              </div>
            @endif




    <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">

                          <h1>Nuevo turista</h1>

                          <form method="POST" action="{{ route('tourist.store') }}"  role="form">
                							{{ csrf_field() }}
                              <!-- Name -->
                                <div class="form-group">
                                    <label>Nombre </label>
                                    <input type="text" class="form-control" name="nombre" id="nombre"  placeholder="Nombre del Turista">
                                </div>
                              <!-- Email -->
                                <div class="form-group">
                                    <label>Correo Electrònico </label>
                                    <input type="email" class="form-control" name="email" id="email"  placeholder="Email de Turista">
                                </div>

                                <!-- Language -->
                                  @include('Tourist.partials.listLanguage')

                                <!-- Countries -->
                                 @include('Tourist.partials.listCountry')

                                 <!-- Phone -->
                                   <div class="form-group">
                                       <label>Teléfono: </label>
                                       <input type="text" class="form-control" name="telefono" id="telefono"  placeholder="0996674478">
                                   </div>

                                 <div class="col-xs-12 col-sm-12 col-md-12">
                                   <div class="col-xs-4 col-sm-4 col-md-4">
                                      <button type="submit" class="btn btn-success btn-block">Guardar</button>
                                  </div>
                                  <div class="col-xs-4 col-sm-4 col-md-4">
                                      <button type="reset" class="btn btn-default btn-block">Limpiar</button>
                                  </div>
                                  <div class="col-xs-4 col-sm-4 col-md-4">
                                      <a href="{{ route('tourist.index') }}" class="btn btn-info btn-block" >Atrás</a>
                                  </div>

                                </div>
                            </form>

                        </div>

                        </div>
                    </div>
                    <!-- /.row -->
                    <!-- Adjustment -->
                     @include('Tourist.partials.adjustment')
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->
@include('layouts.partials.finalTourist')
