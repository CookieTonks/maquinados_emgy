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
                <!-- Main Content -->
                <div class="hk-pg-wrapper">
                    <!-- Container -->
                    <div class="container-fluid mt-xl-50 mt-sm-30 mt-15">
                        <!-- Row -->
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


                        <div class="row">
                            <div class="col-xl-12">
                                <div class="hk-row">

                                    <div class="col-sm-12">
                                        <div class="card-group hk-dash-type-2">
                                            <div class="card card-sm">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between mb-5">
                                                        <div>
                                                            <span class="d-block font-15 text-dark font-weight-500">Alta cliente</span>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="btn btn-light" data-toggle="modal" data-target="#alta_cliente">
                                                                <i class="material-icons">add</i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <span class="d-block display-4 text-dark mb-5">{{$clientes_conteo}}</span>

                                                    <div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card card-sm">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between mb-5">
                                                        <div>
                                                            <span class="d-block font-15 text-dark font-weight-500">Alta usuario</span>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="btn btn-light" data-toggle="modal" data-target="#alta_usuario">
                                                                <i class="material-icons">add</i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <span class="d-block display-4 text-dark mb-5"><span class="counter-anim">{{$usuarios_conteo}}</span></span>
                                                        <small class="d-block"></small>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card card-sm">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between mb-5">
                                                        <div>
                                                            <span class="d-block font-15 text-dark font-weight-500">Alta proveedor</span>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="btn btn-light" data-toggle="modal" data-target="#alta_proveedor">
                                                                <i class="material-icons">add</i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <span class="d-block display-4 text-dark mb-5">{{$proveedor_conteo}}</span>
                                                        <small class="d-block"></small>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card card-sm">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between mb-5">
                                                        <div>
                                                            <span class="d-block font-15 text-dark font-weight-500">Alta maquina</span>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="btn btn-light" data-toggle="modal" data-target="#alta_maquina">
                                                                <i class="material-icons">add</i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <span class="d-block display-4 text-dark mb-5">{{$maquinas_conteo}}</span>
                                                        <small class="d-block"></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="hr" />
                                    <br>


                                    <h6>Fecha hoy: {{$fecha}}</h6>

                                    <div class="col-sm-12">
                                        <div class="card-group hk-dash-type-2">
                                            <div class="card card-sm">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between mb-5">
                                                        <div>
                                                            <span class="d-block font-15 text-dark font-weight-500">Ordenes asignadas</span>
                                                        </div>
                                                        <div>
                                                            <span class="text-primary font-14 font-weight-500"></span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <span class="d-block display-4 text-dark mb-5">{{$ordenes_asignadas}}</span>
                                                        <small class="d-block"></small>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card card-sm">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between mb-5">
                                                        <div>
                                                            <span class="d-block font-15 text-dark font-weight-500">Ordenes finalizadas</span>
                                                        </div>
                                                        <div>
                                                            <span class="text-primary font-14 font-weight-500"></span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <span class="d-block display-4 text-dark mb-5"><span class="counter-anim">{{$ordenes_finalizadas}}</span></span>
                                                        <small class="d-block"></small>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card card-sm">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between mb-5">
                                                        <div>
                                                            <span class="d-block font-15 text-dark font-weight-500">Ordenes pendientes</span>
                                                        </div>
                                                        <div>
                                                            <span class="text-warning font-14 font-weight-500"></span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <span class="d-block display-4 text-dark mb-5">{{$ordenes_pendientes}}</span>
                                                        <small class="d-block"></small>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card card-sm">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between mb-5">
                                                        <div>
                                                            <span class="d-block font-15 text-dark font-weight-500">Maquinas activas</span>
                                                        </div>
                                                        <div>
                                                            <span class="text-danger font-14 font-weight-500"></span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <span class="d-block display-4 text-dark mb-5">{{$maquinas}}</span>
                                                        <small class="d-block"></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="hk-row">

                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-header card-header-action">
                                                <h6>Ordenes asignadas</h6>
                                                <table class="table table-sm table-hover mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Ordenes de trabajo</th>
                                                            <th>Cliente</th>
                                                            <th>F.cliente</th>
                                                            <th>Tecnico</th>
                                                            <th>Tiempo trabajado</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($datos_ordena as $datos_ordena)
                                                        <tr>
                                                            <td>{{$datos_ordena->ot}}</td>
                                                            <td>{{$datos_ordena->cliente}}</td>
                                                            <td>{{$datos_ordena->fecha_cliente}}</td>
                                                            <td>{{$datos_ordena->persona_asignada}}</td>
                                                            <td>{{$datos_ordena->tiempo_progreso}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-header card-header-action">
                                                <h6>Ordenes finalizadas</h6>
                                                <table class="table table-sm table-hover mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Ordenes de trabajo</th>
                                                            <th>Cliente</th>
                                                            <th>F.cliente</th>
                                                            <th>Tecnico</th>
                                                            <th>Tiempo trabajado</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($datos_ordenf as $datos_ordenf)
                                                        <tr>
                                                            <td>{{$datos_ordenf->ot}}</td>
                                                            <td>{{$datos_ordenf->cliente}}</td>
                                                            <td>{{$datos_ordenf->fecha_cliente}}</td>
                                                            <td>{{$datos_ordenf->persona_asignada}}</td>
                                                            <td>{{$datos_ordenf->tiempo_progreso}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hk-row">
                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-header card-header-action">
                                                <h6>Ordenes pendientes</h6>
                                                <table class="table table-sm table-hover mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Ordenes de trabajo</th>
                                                            <th>Cliente</th>
                                                            <th>F.cliente</th>
                                                            <th>Tecnico</th>
                                                            <th>Tiempo trabajado</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($datos_ordenp as $datos_ordenp)
                                                        <tr>
                                                            <td>{{$datos_ordenp->ot}}</td>
                                                            <td>{{$datos_ordenp->cliente}}</td>
                                                            <td>{{$datos_ordenp->fecha_cliente}}</td>
                                                            <td>{{$datos_ordenp->persona_asignada}}</td>
                                                            <td>{{$datos_ordenp->tiempo_progreso}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-header card-header-action">
                                                <h6>Maquinas activas</h6>
                                                <table class="table table-sm table-hover mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Codigo</th>
                                                            <th>Carga</th>
                                                            <th>Ultima</th>
                                                            <th>Estatus</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($datos_maquina as $datos_maquina)
                                                        <td>{{$datos_maquina->codigo}}</td>
                                                        <td>{{$datos_maquina->carga}}</td>
                                                        <td>{{$datos_maquina->ultima_ot}}</td>
                                                        <td>{{$datos_maquina->estatus}}</td>
                                                        @endforeach

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="hk-row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header card-header-action">
                                                <h6>Ordenes - Tecnicos</h6>
                                                <div class="d-flex align-items-center card-action-wrap">
                                                    <div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <canvas id="myChart" width="816" height="200" style="display: block; box-sizing: border-box; height: 204px; width: 408px;"></canvas>
                                                <script>
                                                    const ctx = document.getElementById('myChart');
                                                    new Chart(ctx, {
                                                        type: 'bar',
                                                        data: {

                                                            labels: [<?php foreach ($tecnicos as $tecnico) {
                                                                            echo "'$tecnico->persona_asignada',";
                                                                        } ?>],
                                                            datasets: [{
                                                                label: '#OT',
                                                                data: [<?php foreach ($tecnicos as $tecnico) {
                                                                            echo "'$tecnico->orden_trabajadas',";
                                                                        } ?>],
                                                                borderColor: '#264EA3',
                                                                backgroundColor: '#264EA3',
                                                                borderWidth: 1
                                                            }]
                                                        },
                                                        options: {
                                                            scales: {
                                                                y: {
                                                                    beginAtZero: true
                                                                }
                                                            }

                                                        }
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- /Row -->
                        <div class="modal fade" id="alta_cliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Nuevo: Cliente</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('alta_cliente')}}" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    <select name="empresa" wire:model="empresa" class="form-control custom-select d-block w-100">
                                                        <option value=''>Selecciona una empresa</option>
                                                        @foreach($empresas as $empresa)
                                                        <option value='{{ $empresa->id}}'>{{ $empresa->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    <label for="nombre">Razon social</label>
                                                    <input name="nombre" class="form-control" id="nombre" placeholder="" value="" type="text">
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


                      
                        <div class="modal fade" id="alta_usuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Nuevo: Usuario</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('alta_usuario')}}" method="post">
                                            @csrf
                                            <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="cliente">Cliente</label>
                                            <select name="cliente" class="form-control custom-select d-block w-100" id="cliente">
                                                <option value="">Selecciona una opcion...</option>
                                                @foreach ($clientes as $cliente)
                                                <option value="{{$cliente->id}}">{{$cliente->cliente}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="usuario">Usuario</label>
                                            <input name="usuario" class="form-control" id="usuario" placeholder="" value="" type="text">
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

                        <div class="modal fade" id="alta_proveedor" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Nuevo: Proveedor</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('alta_proveedor')}}" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    <label for="proveedor">Razon social</label>
                                                    <input name="proveedor" class="form-control" id="proveedor" placeholder="" value="" type="text">
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

                        <div class="modal fade" id="alta_maquina" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Nuevo: Maquina</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('alta_maquina')}}" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label for="codigo">Codigo</label>
                                                    <input name="codigo" class="form-control" id="codigo" placeholder="" value="" type="text">
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="marca">Marca</label>
                                                    <input name="marca" class="form-control" id="marca" placeholder="" value="" type="text">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label for="modelo">Modelo</label>
                                                    <input name="modelo" class="form-control" id="modelo" placeholder="" value="" type="text">
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="num_seria">Numero serie</label>
                                                    <input name="num_serie" class="form-control" id="num_serie" placeholder="" value="" type="text">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-8 form-group">
                                                    <label for="descripcion">Descripcion</label>
                                                    <input name="descripcion" class="form-control" id="descripcion" placeholder="" value="" type="text">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="ano">Año</label>
                                                    <input name="ano" class="form-control" id="ano" placeholder="" value="" type="text">
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
                    <!-- /Container -->

                    <!-- Footer -->
                    <div class="hk-footer-wrap container-fluid">
                        <footer class="footer">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <p class="d-inline-block">Follow us</p>
                                    <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
                                    <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
                                    <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a>
                                </div>
                            </div>
                        </footer>
                    </div>
                    <!-- /Footer -->
                </div>
                <!-- /Main Content -->
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