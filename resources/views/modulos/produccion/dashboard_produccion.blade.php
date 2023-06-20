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
                <div class="page-info">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Módulo</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>

                </div>
                <div class="hk-pg-wrapper">

                    <!-- Breadcrumb -->

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
                            <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"></span></span>Ordenes de trabajo </h4>
                        </div>
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800"> </h1>
                            <a href="{{route('ordenes_exports')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generar reporte</a>
                        </div>
                        <!-- /Title -->

                        <div class="row">
                            <div class="col-xl-8">
                                <section class="hk-sec-wrapper">
                                    <div class="row">
                                        <div class="col-sm">

                                            <div class="table-responsive">
                                                <table class="table table-sm table-hover mb-0">
                                                    <thead class="thead-primary">
                                                        <tr>
                                                            <th>
                                                            </th>
                                                            <th>OT</th>
                                                            <th>Cliente</th>
                                                            <th>Maquina</th>
                                                            <th>Tecnico</th>
                                                            <th>Cant. OC</th>
                                                            <th>Cant. Entregadas</th>
                                                            <th>Fecha de entrega</th>
                                                            <th>Tiempo estimado</th>
                                                            <th>Tiempo progreso</th>
                                                            <th>Procesos</th>
                                                            <th>Avance</th>
                                                            <th>Prioridad</th>
                                                            <th>Estatus</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($ordenes as $orden)
                                                        @if($orden->modalidad == 'RETRABAJO' || $orden->modalidad == 'SCRAP' )
                                                        <tr class="bg-danger text-white">
                                                            <th>
                                                                <a target="_blank" href="{{route('order_pdf', $orden->id)}}" class="btn btn-primary btn-sm"><i class="icon-eye"></i></a>
                                                                <button type="button" class="btn  btn-sm btn-primary" data-toggle="modal" data-target="#asignacion_maquina" data-retrabajo="{{$orden->cant_retrabajo}}" data-ot="{{$orden->ot}}" data-cliente="{{$orden->cliente}}" data-descripcion="{{$orden->descripcion}}" data-estatus="{{$orden->estatus}}">
                                                                    <i class="icon-plus"></i>
                                                                </button>
                                                                <button type="button" class="btn  btn-sm btn-secondary" data-toggle="modal" data-target="#reubicacion_orden" data-ot="{{$orden->ot}}" data-cliente="{{$orden->cliente}}" data-descripcion="{{$orden->descripcion}}">
                                                                    <i class="icon-shuffle"></i>
                                                                </button>
                                                                <button type="button" class="btn  btn-success btn-sm" data-toggle="modal" data-target="#salida_orden" data-ot="{{$orden->ot}}" data-cliente="{{$orden->cliente}}" data-descripcion="{{$orden->descripcion}}">
                                                                    <i class="icon-check"></i>
                                                                </button>
                                                            </th>
                                                            <td> <a target="_blank" href="public/storage/dibujos/{{$orden->id}}/{{$orden->id}}.pdf">{{$orden->id}}</a></td>
                                                            <td>{{$orden->cliente}}</td>
                                                            <td>{{$orden->maquina_asignada}}</td>
                                                            <td>{{$orden->persona_asignada}}</td>
                                                            <td>{{$orden->cantidad}}</td>
                                                            <td>{{$orden->cant_entregada}}</td>
                                                            <td>{{$orden->fecha_cliente}}</td>
                                                            <td>{{$orden->tiempo_asignado}}</td>
                                                            <td>{{$orden->tiempo_progreso}}</td>
                                                            <td>{{$orden->procesos}}</td>
                                                            <td>{{$orden->pp}}/{{$orden->pr}}</td>
                                                            <td>{{$orden->prioridad}}</td>
                                                            <td>{{$orden->estatus}}</td>
                                                        </tr>
                                                        @else
                                                        <tr>
                                                            <th>
                                                                <a target="_blank" href="{{route('order_pdf', $orden->id)}}" class="btn btn-primary btn-sm"><i class="material-icons">remove_red_eye</i></a>

                                                                <button type="button" class="btn  btn-sm btn-primary" data-toggle="modal" data-target="#asignacion_maquina" data-retrabajo="{{$orden->cant_retrabajo}}" data-ot="{{$orden->ot}}" data-cliente="{{$orden->cliente}}" data-descripcion="{{$orden->descripcion}}" data-estatus="{{$orden->estatus}}">
                                                                    Asignar
                                                                </button>
                                                                <button type="button" class="btn  btn-sm btn-secondary" data-toggle="modal" data-target="#reubicacion_orden" data-ot="{{$orden->ot}}" data-cliente="{{$orden->cliente}}" data-descripcion="{{$orden->descripcion}}">
                                                                    Reasignar
                                                                </button>

                                                                <button type="button" class="btn  btn-success btn-sm" data-toggle="modal" data-target="#salida_orden" data-ot="{{$orden->ot}}" data-cliente="{{$orden->cliente}}" data-descripcion="{{$orden->descripcion}}">
                                                                    Liberar
                                                                </button>

                                                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tareas_supervisor" data-ot="{{$orden->ot}}" data-cliente="{{$orden->cliente}}" data-descripcion="{{$orden->descripcion}}">
                                                                    Supervisor
                                                                </button>

                                                            </th>
                                                            <td> <a target="_blank" href="public/storage/dibujos/{{$orden->id}}/{{$orden->id}}.pdf">{{$orden->id}}</a></td>
                                                            <td>{{$orden->cliente}}</td>
                                                            <td>{{$orden->maquina_asignada}}</td>
                                                            <td>{{$orden->persona_asignada}}</td>
                                                            <td>{{$orden->cantidad}}</td>
                                                            <td>{{$orden->cant_entregada}}</td>
                                                            <td>{{$orden->fecha_cliente}}</td>
                                                            <td>{{$orden->tiempo_asignado}}</td>
                                                            <td>{{$orden->tiempo_progreso}}</td>
                                                            <td>{{$orden->procesos}}</td>
                                                            <td>{{$orden->pp}}/{{$orden->pr}}</td>
                                                            <td>{{$orden->prioridad}}</td>
                                                            <td>{{$orden->estatus}}</td>
                                                        </tr>
                                                        @endif
                                                        @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>
                                                            </th>
                                                            <th>OT</th>
                                                            <th>Cliente</th>
                                                            <th>Maquina</th>
                                                            <th>Técnico</th>
                                                            <th>Cant. OC</th>
                                                            <th>Cant. Entregadas</th>
                                                            <th>Fecha de entrega</th>
                                                            <th>Tiempo estimado</th>
                                                            <th>Tiempo progreso</th>
                                                            <th>Procesos</th>
                                                            <th>Avance</th>
                                                            <th>Prioridad</th>
                                                            <th>Estatus</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <div class="card">
                                    <div class="card-header card-header-action">
                                        <h6>Avance Empleados</h6>
                                        <div class="d-flex align-items-center card-action-wrap">
                                            <a href="#" class="inline-block refresh mr-15">
                                                <i class="ion ion-md-arrow-down"></i>
                                            </a>
                                            <a href="#" class="inline-block full-screen mr-15">
                                                <i class="ion ion-md-expand"></i>
                                            </a>
                                            <a class="inline-block card-close" href="#" data-effect="fadeOut">
                                                <i class="ion ion-md-close"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body pa-0">
                                        <div class="table-wrap">
                                            <div class="table-responsive">
                                                <table class="table table-sm table-hover mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Personal</th>
                                                            <th class="w-40">Maquina</th>
                                                            <th class="w-25">Turno</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($usuarios as $usuario)
                                                        <tr>
                                                            <td>{{$usuario->name}}</td>
                                                            <td>{{$usuario->maquina}}</td>
                                                            <td>{{$usuario->turno}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <section class="hk-sec-wrapper">
                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="card">
                                                <div class="card-header card-header-action">
                                                    <h6>Carga de trabajo</h6>
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
                                                                        <th>Maquina</th>
                                                                        <th>OT asignadas</th>
                                                                        <th>Ultima OT</th>
                                                                        <th>Estatus</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($maquinas as $maquina)
                                                                    <tr>
                                                                        <td>{{$maquina->codigo}}</td>
                                                                        <td>{{$maquina->carga}}</td>
                                                                        <td>{{$maquina->ultima_ot}}</td>
                                                                        @if ($maquina->estatus == 'ACTIVA')
                                                                        <td><span class="badge badge-success">{{$maquina->estatus}}</span></td>
                                                                        @elseif ($maquina->estatus == 'SIN CARGA')
                                                                        <td><span class="badge badge-danger">{{$maquina->estatus}}</span></td>
                                                                        @endif
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
                                <!-- Modal forms-->
                            </div>
                        </div>


                        <div class="modal fade" id="asignacion_maquina" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Nueva: Asignación de maquina.</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('asignacion_produccion')}}" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-8 form-group">
                                                    <label for="dibujo">OT</label>
                                                    <input class="form-control" id="ot" name="ot" placeholder="" value="" type="text" readonly>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="dibujo">Cliente</label>
                                                    <input class="form-control" id="cliente" name="cliente" placeholder="" value="" type="text" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    <label for="dibujo">Descripcion</label>
                                                    <input class="form-control" id="descripcion" name="descripcion" placeholder="" value="" type="text" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    <label for="maquina">Maquina</label>
                                                    <select name="maquina" class="form-control custom-select d-block w-100" id="maquina">
                                                        <option value="">Selecciona una opcion...</option>
                                                        @foreach($maquinas as $maquina)
                                                        <option>{{$maquina->codigo}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    <label for="programador">Tecnico</label>
                                                    <select name="programador" class="form-control custom-select d-block w-100" id="maquina">
                                                        <option value="">Selecciona una opcion...</option>
                                                        @foreach($usuarios as $usuario)
                                                        <option value="{{$usuario->id}}">{{$usuario->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label for="estatus">Estatus</label>
                                                    <input class="form-control" id="estatus_retrabajo" name="estatus_retrabajo" placeholder="" value="" type="input" readonly>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="ot">Cant. Retrabajo</label>
                                                    <input class="form-control" id="retrabajo" name="retrabajo" placeholder="" value="" type="text" onlyread>
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

                        <div class="modal fade" id="reubicacion_orden" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Nueva: Reubicacion de orden.</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('reubicacion_orden')}}" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-8 form-group">
                                                    <label for="dibujo">OT</label>
                                                    <input class="form-control" id="ot" name="ot" placeholder="" value="" type="text" readonly>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="dibujo">Cliente</label>
                                                    <input class="form-control" id="cliente" name="cliente" placeholder="" value="" type="text" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    <label for="dibujo">Descripcion</label>
                                                    <input class="form-control" id="descripcion" name="descripcion" placeholder="" value="" type="text" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    <label for="maquina">Maquina</label>
                                                    <select name="maquina" class="form-control custom-select d-block w-100" id="maquina">
                                                        <option value="">Selecciona una opcion...</option>
                                                        @foreach($maquinas as $maquina)
                                                        <option>{{$maquina->codigo}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    <label for="programador">Tecnico</label>
                                                    <select name="programador" class="form-control custom-select d-block w-100" id="maquina">
                                                        <option value="">Selecciona una opcion...</option>
                                                        @foreach($usuarios as $usuario)
                                                        <option value="{{$usuario->id}}">{{$usuario->name}}</option>
                                                        @endforeach
                                                    </select>
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

                        <div class="modal fade" id="salida_orden" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Nueva: Reubicacion de orden.</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('salida_produccion')}}" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-8 form-group">
                                                    <label for="dibujo">OT</label>
                                                    <input class="form-control" id="ot" name="ot" placeholder="" value="" type="text" readonly>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="dibujo">Cliente</label>
                                                    <input class="form-control" id="cliente" name="cliente" placeholder="" value="" type="text" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    <label for="dibujo">Descripcion</label>
                                                    <input class="form-control" id="descripcion" name="descripcion" placeholder="" value="" type="text" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    <label for="cantidad">Cantidad de piezas</label>
                                                    <input class="form-control" id="cantidad" name="cantidad" placeholder="" value="" type="text">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    <label for="tipo_salida">Tipo Salida</label>
                                                    <select name="tipo_salida" class="form-control custom-select d-block w-100" id="maquina">
                                                        <option value="">Selecciona una opcion...</option>
                                                        <option>SALIDA PARCIAL</option>
                                                        <option>SALIDA FINAL</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-block btn-primary">Registrar</button>
                                            <br>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="tareas_supervisor" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Tareas supervisor</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('tareas_supervisor')}}" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-8 form-group">
                                                    <label for="dibujo">OT</label>
                                                    <input class="form-control" id="ot" name="ot" placeholder="" value="" type="text" readonly>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="dibujo">Cliente</label>
                                                    <input class="form-control" id="cliente" name="cliente" placeholder="" value="" type="text" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    <label for="dibujo">Descripcion</label>
                                                    <input class="form-control" id="descripcion" name="descripcion" placeholder="" value="" type="text" readonly>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    <label for="tipo_salida">Tipo de proceso</label>
                                                    <select name="tarea_supervisor" class="form-control custom-select d-block w-100" id="tarea_supervisor">
                                                        <option value="">Selecciona una opción...</option>
                                                        <option>Inicio</option>
                                                        <option>Pausa</option>
                                                        <option>Finalizar</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-block btn-primary">Registrar</button>
                                            <br>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>



                    <!-- /Container -->

                    <!-- Footer -->

                    <!-- /Footer -->

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
            $('#asignacion_maquina').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var ot = button.data('ot')
                var cliente = button.data('cliente')
                var descripcion = button.data('descripcion')
                var estatus = button.data('estatus')
                var retrabajo = button.data('retrabajo')


                var modal = $(this)
                modal.find('.modal-title').text('Asignación de tecnico')
                modal.find('#ot').val(ot)
                modal.find('#cliente').val(cliente)
                modal.find('#descripcion').val(descripcion)
                modal.find('#estatus_retrabajo').val(estatus)
                modal.find('#retrabajo').val(retrabajo)

            })
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#reubicacion_orden').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var ot = button.data('ot')
                var cliente = button.data('cliente')
                var descripcion = button.data('descripcion')

                var modal = $(this)
                modal.find('.modal-title').text('Reasignación de OT')
                modal.find('#ot').val(ot)
                modal.find('#cliente').val(cliente)
                modal.find('#descripcion').val(descripcion)
            })
        });
    </script>


    <script>
        $(document).ready(function() {
            $('#salida_orden').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var ot = button.data('ot')
                var cliente = button.data('cliente')
                var descripcion = button.data('descripcion')


                var modal = $(this)
                modal.find('.modal-title').text('Validación de supervisor OT')
                modal.find('#ot').val(ot)
                modal.find('#cliente').val(cliente)
                modal.find('#descripcion').val(descripcion)


            })
        });
    </script>


    <script>
        $(document).ready(function() {
            $('#tareas_supervisor').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var ot = button.data('ot')
                var cliente = button.data('cliente')
                var descripcion = button.data('descripcion')


                var modal = $(this)
                modal.find('.modal-title').text('Validación de supervisor OT')
                modal.find('#ot').val(ot)
                modal.find('#cliente').val(cliente)
                modal.find('#descripcion').val(descripcion)


            })
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