<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>EMGY - Dashboard </title>

    <!-- Styles -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="../../Plantilla/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../Plantilla/assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="../../Plantilla/assets/css/connect.min.css" rel="stylesheet">
    <link href="../../Plantilla/assets/css/dark_theme.css" rel="stylesheet">
    <link href="../../Plantilla/assets/css/custom.css" rel="stylesheet">



</head>

<body>
    <div class='loader'>
        <div class='spinner-grow text-primary' role='status'>
            <span class='sr-only'>Loading...</span>
        </div>
    </div>
    <div class="connect-container align-content-stretch d-flex flex-wrap">
        <div class="page-sidebar">
            <div class="logo-box"><a href="#" class="logo-text">EMGY</a><a href="#" id="sidebar-close"><i class="material-icons">close</i></a> <a href="#" id="sidebar-state"><i class="material-icons">adjust</i><i class="material-icons compact-sidebar-icon">panorama_fish_eye</i></a></div>
            <div class="page-sidebar-inner slimscroll">
                <ul class="accordion-menu">
                    <li>
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Ordenes de trabajo
                        </a>
                        <ul class="sub-menu">
                            <a class="dropdown-item" href="{{route ('dashboard_ordenes')}}">Módulo OT</a>
                            <a class="dropdown-item" href="{{route ('buscador_ordenes')}}">Buscador OT</a>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Ingenieria
                        </a>
                        <ul class="sub-menu">
                            <a class="dropdown-item" href="{{route ('dashboard_ingenieria')}}">Módulo Ingenieria</a>
                            <a class="dropdown-item" href="{{route ('buscador_ingenieria')}}">Buscador Ingenieria</a>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Almacen
                        </a>
                        <ul class="sub-menu">
                            <a class="dropdown-item" href="{{route ('dashboard_almacen')}}">Módulo Almacen</a>
                            <a class="dropdown-item" href="{{route ('buscador_almacen')}}">Buscador Almacen</a>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Compras
                        </a>
                        <ul class="sub-menu">
                            <a class="dropdown-item" href="{{route ('dashboard_compras')}}">Módulo Compras</a>
                            <a class="dropdown-item" href="{{route ('buscador_compras')}}">Buscador Compras</a>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Producción
                        </a>
                        <ul class="sub-menu">
                            <a class="dropdown-item" href="{{route ('dashboard_produccion')}}">Módulo Producción</a>
                            <a class="dropdown-item" href="{{route ('dashboard_programador')}}">Módulo Técnico</a>
                        </ul>
                    </li>


                    <li>
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Calidad
                        </a>
                        <ul class="sub-menu">
                            <a class="dropdown-item" href="{{route ('dashboard_calidad')}}">Módulo Calidad</a>
                            <a class="dropdown-item" href="{{route ('buscador_calidad')}}">Buscador Calidad</a>
                        </ul>
                    </li>

                    <li>
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Embarques
                        </a>
                        <ul class="sub-menu">
                            <a class="dropdown-item" href="{{route ('dashboard_embarques')}}">Módulo Embarques</a>
                            <a class="dropdown-item" href="{{route ('buscador_embarques')}}">Buscador Embarques</a>
                        </ul>
                    </li>

                    <li>
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Facturación
                        </a>
                        <ul class="sub-menu">
                            <a class="dropdown-item" href="{{route ('dashboard_produccion')}}">Módulo Facturación</a>
                            <a class="dropdown-item" href="{{route ('buscador_facturacion')}}">Buscador Facturación</a>
                        </ul>
                    </li>

                    <li>
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Administrador
                        </a>
                        <ul class="sub-menu">
                            <a class="dropdown-item" href="{{route ('dashboard_administrador')}}">Módulo Administrador</a>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
        <div class="page-container">
            <div class="page-header">
                <nav class="navbar navbar-expand">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item small-screens-sidebar-link">
                                <a href="#" class="nav-link"><i class="material-icons-outlined">menu</i></a>
                            </li>
                            <li class="nav-item nav-profile dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src=".../../images/empleados/{{Auth::user()->id}}.jpg" alt="profile image">
                                    <span>{{ Auth::user()->name }}</span><i class="material-icons dropdown-icon">keyboard_arrow_down</i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{route ('logout')}}">Log out</a>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link" id="dark-theme-toggle"><i class="material-icons-outlined">brightness_2</i><i class="material-icons">brightness_2</i></a>
                            </li>
                        </ul>

                    </div>
                    <div class="navbar-search">

                    </div>
                </nav>
            </div>
            <div class="page-content">
                
                <div class="hk-pg-wrapper">

                    <!-- Breadcrumb -->
                    <nav class="hk-breadcrumb" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-light bg-transparent">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Embarques</li>
                        </ol>
                    </nav>
                    <!-- /Breadcrumb -->

                    <!-- Container -->
                    <div class="container-fluid">

                        @if (session('mensaje-error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{session('mensaje-error')}}
                            <script type="text/javascript">
                                $('.alert').alert()
                            </script>
                        </div>
                        @elseif (session('mensaje-success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{session('mensaje-success')}}
                            <script type="text/javascript">
                                $('.alert').alert()
                            </script>
                        </div>
                        @endif

                        <!-- Title -->
                        <div class="hk-pg-header">
                            <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"></span></span>Módulo Embarques </h4>
                        </div>
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800"> </h1>
                            <a href="{{route('ordenes_exports')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generar reporte</a>
                        </div>
                        <!-- /Title -->
                        <div class="row">
                            <div class="col-xl-12">
                                <section class="hk-sec-wrapper">
                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="table-wrap">
                                                <table id="datable_1" class="table table-hover w-100 display pb-30">
                                                    <thead class="thead-primary">
                                                        <tr>
                                                            <th>

                                                            </th>
                                                            <th>OT</th>
                                                            <th>Cliente</th>
                                                            <th>Descripcion</th>
                                                            <th>Cantidad</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($ordenes as $orden)
                                                        <tr>
                                                            <th>
                                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#salida_embarques" data-id="{{$orden->id}}" data-ot="{{$orden->ot}}" data-cliente="{{$orden->cliente}}" data-descripcion="{{$orden->descripcion}}" data-cantidad="{{$orden->cantidad}}">
                                                                <i class="material-icons">add</i>
                                                                </button>
                                                            </th>
                                                            <th> <a target="_blank" href="storage/app/public/dibujos/{{$orden->id}}/{{$orden->id}}.pdf">{{$orden->ot}}</a>
                                                            </th>
                                                            <th>{{$orden->cliente}}</th>
                                                            <th>{{$orden->descripcion}}</th>
                                                            <th>{{$orden->cantidad}}</th>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>
                                                            </th>
                                                            <th>OT</th>
                                                            <th>Cliente</th>
                                                            <th>Descripcion</th>
                                                            <th>Cantidad</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>

                            <!-- <div class="col-xl-4">
            <section class="hk-sec-wrapper">
                <div class="row">
                    <div class="col-sm">
                        <div class="card">
                            <div class="card-header card-header-action">
                                <h6>OT: Tratamientos</h6>
                                <div class="d-flex align-items-center card-action-wrap">
                                    <a href="#" class="inline-block refresh mr-15">
                                        <i class="ion ion-md-arrow-down"></i>
                                    </a>
                                    <a href="#" class="inline-block full-screen">
                                        <i class="ion ion-md-expand"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body pa-0">
                                <div class="table-wrap">
                                    <div class="table-responsive">
                                        <table id="datable_1" class="table table-hover w-100 display pb-30">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>OT</th>
                                                    <th>Proveedor</th>
                                                    <th>Cantidad</th>
                                                    <th>Tipo salida</th>
                                                    <th>Fecha retorno</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($ordenes_tratamientos as $orden_tratamiento)
                                                <tr>
                                                    <td> <a href="{{route('regreso_tratamiento', $orden_tratamiento)}}" class="btn btn-primary btn-sm"><i class="icon-control-play"></i></a>
                                                    </td>
                                                    <td>{{$orden_tratamiento->ot}}</td>
                                                    <td>{{$orden_tratamiento->proveedor}}</td>
                                                    <td>{{$orden_tratamiento->cantidad}}</td>
                                                    <td>{{$orden_tratamiento->tipo_salida}}</td>
                                                    <td>{{$orden_tratamiento->fecha_retorno}}</td>

                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header card-header-action">
                                <h6>OT: Salidas</h6>
                                <div class="d-flex align-items-center card-action-wrap">
                                    <a href="#" class="inline-block refresh mr-15">
                                        <i class="ion ion-md-arrow-down"></i>
                                    </a>
                                    <a href="#" class="inline-block full-screen">
                                        <i class="ion ion-md-expand"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body pa-0">
                                <div class="table-wrap">
                                    <div class="table-responsive">
                                        <table class="table table-sm table-hover mb-0">
                                            <thead>
                                                <tr>
                                                    <th>OT</th>
                                                    <th>Cliente</th>
                                                    <th>Cantidad</th>
                                                    <th>Tipo salida</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($ordenes_salidas as $orden_salida)
                                                <tr>
                                                    <td>{{$orden_salida->ot}}</td>
                                                    <td>{{$orden_salida->cliente}}</td>
                                                    <td>{{$orden_salida->cantidad}}</td>
                                                    <td>{{$orden_salida->tipo_salida}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            Modal forms -->


                        </div>
                    </div>


                    <div class="modal fade" id="salida_embarques" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Salida: Orden de Trabajo.</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('salida_tratamiento')}}" method="post">
                                        @csrf

                                        <div class="row">
                                            <input type="hidden" name="id" id="id"></input>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-8 form-group">
                                                <label for="ot">OT</label>
                                                <input class="form-control" id="ot" name="ot" placeholder="" value="" type="text" readonly>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="cliente">Cliente</label>
                                                <input class="form-control" id="cliente" name="cliente" placeholder="" value="" type="text" readonly>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label for="descripcion">Descripcion</label>
                                                <input class="form-control" id="descripcion" name="descripcion" placeholder="" value="" type="text" readonly>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label for="tipo_salida">Tipo salida</label>
                                                <select id="tipo_salida" name="tipo_salida" class="form-control custom-select d-block w-100" id="maquina">
                                                    <option value="Remision">Remisión</option>
                                                    <option value="Factura">Factura</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="descripcion">Tratamiento solicitado</label>
                                <input class="form-control" id="tsolcitado" name="tsolcitado" placeholder="" value="" type="text" readonly>
                            </div>
                        </div> -->
                                        <!-- <div class="row">
                            <div class="col-md-4 form-group">
                                <label for="tipo_tratamiento">Tipo tratamiento</label>
                                <input class="form-control" id="tipo_tratamiento" name="tipo_tratamiento" placeholder="" type="text" required>

                            </div>
                            <div class="col-md-4 form-group">
                                <label for="proveedor_tratamiento">Proveedor</label>
                                <select id="proveedor_tratamiento" name="proveedor_tratamiento" class="form-control custom-select d-block w-100" id="maquina">
                                    @foreach($proveedor as $proveedor)
                                    <option value="{{$proveedor->nombre}}">{{$proveedor->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Fecha retorno</label>
                                <input class="form-control" id="fecha_retorno" name="fecha_retorno" placeholder="" type="date" required>
                            </div>
                        </div> -->



                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label for="cant_piezas">Cant. Piezas</label>
                                                <input class="form-control" id="cantidad" name="cantidad" placeholder="" type="number" required>
                                            </div>
                                        </div>

                                        <br>
                                        <button type="submit" class="btn btn-block btn-primary">Registrar</button>
                                        <br>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>




                </div>
            </div>
            <div class="page-footer">
                <div class="row">
                    <div class="col-md-12">
                        <span class="footer-text">2023 © EMGY</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('#salida_embarques').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var ot = button.data('ot')
                var id = button.data('id')
                var cliente = button.data('cliente')
                var descripcion = button.data('descripcion')
                var cantidad = button.data('cantidad')

                var modal = $(this)
                modal.find('.modal-title').text('OT: Salida de embarques')
                modal.find('#ot').val(ot)
                modal.find('#id').val(id)
                modal.find('#cliente').val(cliente)
                modal.find('#descripcion').val(descripcion)
                modal.find('#cantidad').val(cantidad)

            })
        });
    </script>


    <script>
        $(function() {
            $("#tipo_salida").change(function() {
                if ($(this).val() == "Tratamiento") {
                    $("#tipo_tratamiento").prop("disabled", false);
                    $("#proveedor_tratamiento").prop("disabled", false);
                    $("#fecha_retorno").prop("disabled", false);


                } else {
                    $("#tipo_tratamiento").prop("disabled", true);
                    $("#proveedor_tratamiento").prop("disabled", true);
                    $("#fecha_retorno").prop("disabled", true);
                }
            });
        });
    </script>

    <!-- Javascripts -->
    <script src="../../Plantilla/assets/plugins/jquery/jquery-3.4.1.min.js"></script>
    <script src="../../Plantilla/assets/plugins/bootstrap/popper.min.js"></script>
    <script src="../../Plantilla/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../Plantilla/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../../Plantilla/assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="../../Plantilla/assets/plugins/apexcharts/dist/apexcharts.min.js"></script>
    <script src="../../Plantilla/assets/plugins/blockui/jquery.blockUI.js"></script>
    <script src="../../Plantilla/assets/plugins/flot/jquery.flot.min.js"></script>
    <script src="../../Plantilla/assets/plugins/flot/jquery.flot.time.min.js"></script>
    <script src="../../Plantilla/assets/plugins/flot/jquery.flot.symbol.min.js"></script>
    <script src="../../Plantilla/assets/plugins/flot/jquery.flot.resize.min.js"></script>
    <script src="../../Plantilla/assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="../../Plantilla/assets/js/connect.min.js"></script>
    <script src="../../Plantilla/assets/js/pages/dashboard.js"></script>
    <script src="../../Plantilla/vendors/jquery/jquery.min.js"></script>




</body>

</html>