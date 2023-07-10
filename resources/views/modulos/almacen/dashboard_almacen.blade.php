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
                <div class="main-wrapper">
                    <!-- Breadcrumb -->

                    <!-- /Breadcrumb -->

                    <!-- Container -->
                    <div class="container-fluid">

                        <!-- Title -->
                        <div class="hk-pg-header">
                            <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"></span></span>Panel de inicio</h4>
                        </div>
                        <!-- /Title -->
                        <div class="row">
                            <div class="col-xl-12">
                                <h4>MATERIAL SOLICITADO PARA OT</h4>
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
                                                            <th>TIPO</th>
                                                            <th>CANTIDAD</th>
                                                            <th>L</th>
                                                            <th>A</th>
                                                            <th>E/D</th>
                                                            <th>UM</th>
                                                            <th>CODIGO</th>
                                                            <th>DESCRIPCION</th>
                                                            <th>EMPRESA</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($materiales_revision as $material)
                                                        <tr>
                                                            @if($material->tipo === "TRATAMIENTO EXTERNO")
                                                            <td>
                                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tratamiento_salida" data-id="{{$material->id}}" data-ot="{{$material->ot}}" data-descripcion="{{$material->descripcion}}" data-cantidad="{{$material->cantidad_solicitada}}" data-oc="{{$material->oc}}" data-codigo="{{$material->codigo}}" data-proveedor="{{$material->proveedor }}">
                                                                    <i class="icon-check">Check</i>
                                                                </button>
                                                            </td>
                                                            @else
                                                            <td style="width: 200px;">

                                                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#material_compras" data-id="{{$material->id}}" data-ot="{{$material->ot}}" data-descripcion="{{$material->descripcion}}" data-cantidad="{{$material->cantidad_solicitada}}" data-oc="{{$material->oc}}" data-proveedor="{{$material->proveedor }}">
                                                                    <i class="icon-bell">Solicitar</i>
                                                                </button>
                                                            </td>
                                                            @endif

                                                            <td>{{$material->ot}}</td>
                                                            <td>{{$material->tipo_material}}</td>
                                                            <td>{{$material->cantidad_solicitada}}</td>
                                                            <td>{{$material->c1}}</td>
                                                            <td>{{$material->c2}}</td>
                                                            <td>{{$material->c3}}</td>
                                                            <td>{{$material->um}}</td>
                                                            <td>{{$material->codigo}}</td>
                                                            <td>{{$material->descripcion}}</td>
                                                            <td>{{$material->empresa}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>
                                                            </th>
                                                            <th>OT</th>
                                                            <th>TIPO</th>
                                                            <th>CANTIDAD</th>
                                                            <th>L</th>
                                                            <th>A</th>
                                                            <th>E/D</th>
                                                            <th>UM</th>
                                                            <th>CODIGO</th>
                                                            <th>DESCRIPCION</th>
                                                            <th>EMPRESA</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- Modal forms-->
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-12">
                                <h4>MATERIAL RECEPCION OC</h4>

                                <section class="hk-sec-wrapper">
                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="table-wrap">
                                                <table id="datable_1" class="table table-hover w-100 display pb-30">
                                                    <thead class="thead-secondary">
                                                        <tr>
                                                            <th>
                                                            </th>
                                                            <th>OT</th>
                                                            <th>TIPO</th>
                                                            <th>SOLICITUD</th>
                                                            <th>CANTIDAD</th>
                                                            <th>L</th>
                                                            <th>A</th>
                                                            <th>E/D</th>
                                                            <th>UM</th>
                                                            <th>CODIGO</th>
                                                            <th>DESCRIPCION</th>
                                                            <th>OC</th>
                                                            <th>PROVEEDOR</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($materiales_recepcion as $material)
                                                        <tr>
                                                            @if($material->tipo === 'MATERIAL')
                                                            <td style="width: 200px;">

                                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#recepcion_material" data-id="{{$material->id}}" data-ot="{{$material->ot}}" data-descripcion="{{$material->descripcion}}" data-cantidad="{{$material->cantidad_solicitada}}" data-cantidad_recibida="{{$material->cantidad_recibida}}" data-oc="{{$material->oc}}" data-proveedor="{{$material->proveedor}}">
                                                                    <i class="icon-check"> Entrada</i>
                                                                </button>
                                                            </td>
                                                            @else
                                                            <td>
                                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#regreso_tratamiento" data-id="{{$material->id}}" data-ot="{{$material->ot}}" data-descripcion="{{$material->descripcion}}" data-cantidad="{{$material->cantidad_solicitada}}" data-cantidad_recibida="{{$material->cantidad_recibida}}" data-oc="{{$material->oc}}" data-proveedor="{{$material->proveedor}}">
                                                                    <i class="icon-check">Entrada</i>
                                                                </button>
                                                            </td>
                                                            @endif
                                                            <td>{{$material->ot}}</td>
                                                            <td>{{$material->tipo_material}}</td>
                                                            <td>{{$material->solicitud}}</td>
                                                            <td>{{$material->cantidad_solicitada}}</td>
                                                            <td>{{$material->c1}}</td>
                                                            <td>{{$material->c2}}</td>
                                                            <td>{{$material->c3}}</td>
                                                            <td>{{$material->um}}</td>
                                                            <td>{{$material->codigo}}</td>
                                                            <td>{{$material->descripcion}}</td>
                                                            <td>{{$material->oc}}</td>
                                                            <td>{{$material->proveedor}}</td>
                                                            @endforeach
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>
                                                            </th>
                                                            <th>OT</th>
                                                            <th>TIPO</th>
                                                            <th>CANTIDAD</th>
                                                            <th>L</th>
                                                            <th>A</th>
                                                            <th>E/D</th>
                                                            <th>UM</th>
                                                            <th>CODIGO</th>
                                                            <th>DESCRIPCION</th>
                                                            <th>OC</th>
                                                            <th>PROVEEDOR</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- Modal forms-->
                            </div>
                        </div>


                        <div class="modal fade" id="tratamiento_salida" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Tratamiento: Salida de almacen</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('envio_tratamiento')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-0 form-group">
                                                    <input class="form-control" id="id" name="id" placeholder="" value="" type="text" hidden>
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for="dibujo">OT</label>
                                                    <input class="form-control" id="orden" name="orden" placeholder="" value="" type="text" readonly>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <label for="descripcion">Descripcion</label>
                                                    <input class="form-control" id="descripcion" name="descripcion" placeholder="" value="" type="text" readonly>
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for="cantidad">Cantidad</label>
                                                    <input class="form-control" id="cantidad" name="cantidad" placeholder="" value="" type="text" readonly>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label for="codigo">Codigo</label>
                                                    <input class="form-control" id="codigo" name="codigo" placeholder="" value="" type="text" required>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="proveedor">Proveedor</label>
                                                    <select name="proveedor" id="proveedor" class="form-control" required>
                                                        <option selected disabled value="">Selecciona...</option>
                                                        @foreach($proveedores as $proveedor)
                                                        <option value="{{$proveedor->nombre}}" class="form-control" name="proveedor"> {{$proveedor->nombre}}
                                                        </option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label for="fecha_retorno">Fecha de retorno</label>
                                                    <input class="form-control" id="fecha_retorno" name="fecha_retorno" placeholder="" value="" type="date" required>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="chofer">Chofer</label>
                                                    <input class="form-control" id="chofer" name="chofer" placeholder="" value="" type="text" required>
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


                        <div class="modal fade" id="regreso_tratamiento" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Recepcion de material</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('regreso_tratamiento_almacen')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-0 form-group">
                                                    <input class="form-control" id="id" name="id" placeholder="" value="" type="text" hidden>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <label for="dibujo">Descripcion</label>
                                                    <input class="form-control" id="descripcion" name="descripcion" placeholder="" value="" type="text" readonly>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="dibujo">Cantidad</label>
                                                    <input class="form-control" id="cantidad" name="cantidad" placeholder="" value="" type="text" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 form-group">
                                                    <label for="dibujo">OT</label>
                                                    <input class="form-control" id="ot" name="ot" placeholder="" value="" type="text" readonly>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="dibujo">OC</label>
                                                    <input class="form-control" id="oc" name="oc" placeholder="" value="" type="text" readonly>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="dibujo">Proveedor</label>
                                                    <input class="form-control" id="proveedor" name="proveedor" placeholder="" value="" type="text" readonly>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    <label for="Factura">Factura</label>
                                                    <input class="form-control" id="factura" name="factura" placeholder="" value="" type="text">
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



                        <div class="modal fade" id="aprobacion_material" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Material: En inventario.</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('material_produccion')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-0 form-group">
                                                    <input class="form-control" id="id" name="id" placeholder="" value="" type="text" hidden>
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for="dibujo">OT</label>
                                                    <input class="form-control" id="ot" name="ot" placeholder="" value="" type="text" readonly>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <label for="dibujo">Descripcion</label>
                                                    <input class="form-control" id="descripcion" name="descripcion" placeholder="" value="" type="text" readonly>
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label for="dibujo">Cantidad</label>
                                                    <input class="form-control" id="cantidad" name="cantidad" placeholder="" value="" type="text" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label for="cantidad_recibida">Cantidad almacen</label>
                                                    <input class="form-control" id="cantidad_almacen" name="cantidad_almacen" placeholder="" value="" type="text" required>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="Salida">Salida</label>
                                                    <select name="tipo_entrega" id="tipo_entrega" class="form-control" required>
                                                        <option selected disabled value="">Selecciona...</option>
                                                        <option value="ALMACEN" class="form-control" name="almacen"> Almacen
                                                        </option>

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

                        <div class="modal fade" id="material_compras" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Material: Solicitar a compras</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('envio_material')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-0 form-group">
                                                    <input class="form-control" id="id" name="id" placeholder="" value="" type="text" hidden>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="dibujo">OT</label>
                                                    <input class="form-control" id="ot" name="ot" placeholder="" value="" type="text" readonly>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="dibujo">Cantidad</label>
                                                    <input class="form-control" id="cantidad" name="cantidad" placeholder="" value="" type="text" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    <label for="dibujo">Descripcion</label>
                                                    <input class="form-control" id="descripcion" name="descripcion" placeholder="" value="" type="text" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label for="Factura">Cantidad</label>
                                                    <input class="form-control" id="cantidad_almacen" name="cantidad_almacen" placeholder="" value="" type="text">
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <label for="Salida">solicitud</label>
                                                    <select name="solicitud" id="solicitud" class="form-control">
                                                        <option value="-" class="form-control" name="-"> Selecciona</option>
                                                        <option value="abastecer" class="form-control" name="almacen"> Abastecer
                                                        </option>
                                                        <option value="resurtir" class="form-control" name="produccion">
                                                            Resurtir </option>
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

                        <div class="modal fade" id="recepcion_material" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Recepcion de material</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('recepcion_material')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-0 form-group">
                                                    <input class="form-control" id="id" name="id" placeholder="" value="" type="text" hidden>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <label for="dibujo">Descripcion</label>
                                                    <input class="form-control" id="descripcion" name="descripcion" placeholder="" value="" type="text" readonly>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="dibujo">Cantidad</label>
                                                    <input class="form-control" id="cantidad" name="cantidad" placeholder="" value="" type="text" readonly>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 form-group">
                                                    <label for="dibujo">OT</label>
                                                    <input class="form-control" id="ot" name="ot" placeholder="" value="" type="text" readonly>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="dibujo">OC</label>
                                                    <input class="form-control" id="oc" name="oc" placeholder="" value="" type="text" readonly>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="dibujo">Proveedor</label>
                                                    <input class="form-control" id="proveedor" name="proveedor" placeholder="" value="" type="text" readonly>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label for="Factura">Factura</label>
                                                    <input class="form-control" id="factura" name="factura" placeholder="" value="" type="text">
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <label for="cantidad_recibida">Cantidad recibida</label>
                                                    <input class="form-control" id="cantidad_recibida" name="cantidad_recibida" placeholder="" type="text">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label for="tipo_recepcion">Recepcion</label>
                                                    <select name="tipo_recepcion" id="tipo_recepcion" class="form-control">
                                                        <option value="-" class="form-control" name="-"> Selecciona</option>
                                                        <option value="PARCIAL" class="form-control" name="parcial"> Entrega
                                                            parcial</option>
                                                        <option value="FINAL" class="form-control" name="final"> Entrega final
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="Salida">Salida</label>
                                                    <select name="tipo_entrega" id="tipo_entrega" class="form-control">
                                                        <option value="-" class="form-control" name="-"> Selecciona</option>
                                                        <option value="ALMACEN" class="form-control" name="almacen"> Almacen
                                                        </option>
                                                        <option value="PRODUCCION" class="form-control" name="produccion">
                                                            Producccion </option>
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


                    </div>
                    <!-- /Container -->

                    <!-- Footer -->
                    <div class="hk-footer-wrap container-fluid">
                        <footer class="footer">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <p class="d-inline-block">Siguenos</p>
                                    <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
                                    <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
                                    <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a>
                                </div>
                            </div>
                        </footer>
                    </div>
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
            $('#recepcion_material').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var ot = button.data('ot')
                var id = button.data('id')
                var descripcion = button.data('descripcion')
                var cantidad = button.data('cantidad')
                var cantidad_recibida = button.data('cantidad_recibida')

                var oc = button.data('oc')
                var proveedor = button.data('proveedor')


                var modal = $(this)
                modal.find('.modal-title').text('Recepcion de material')
                modal.find('#ot').val(ot)
                modal.find('#id').val(id)
                modal.find('#descripcion').val(descripcion)
                modal.find('#cantidad').val(cantidad)
                modal.find('#cantidad_recibida').val(cantidad_recibida)
                modal.find('#oc').val(oc)
                modal.find('#proveedor').val(proveedor)


            })
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#aprobacion_material').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var ot = button.data('ot')
                var id = button.data('id')
                var descripcion = button.data('descripcion')
                var cantidad = button.data('cantidad')


                var modal = $(this)
                modal.find('.modal-title').text('Recepcion: Hay material en almacen')
                modal.find('#ot').val(ot)
                modal.find('#id').val(id)
                modal.find('#descripcion').val(descripcion)
                modal.find('#cantidad').val(cantidad)


            })
        });
    </script>


    <script>
        $(document).ready(function() {
            $('#tratamiento_salida ').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var ot = button.data('ot')
                var id = button.data('id')
                var descripcion = button.data('descripcion')
                var cantidad = button.data('cantidad')
                var codigo = button.data('codigo')


                var modal = $(this)
                modal.find('.modal-title').text('Tratamiento: Salida de almacen')
                modal.find('#id').val(id)
                modal.find('#orden').val(ot)
                modal.find('#descripcion').val(descripcion)
                modal.find('#cantidad').val(cantidad)
                modal.find('#codigo').val(codigo)


            })
        });
    </script>


    <script>
        $(document).ready(function() {
            $('#regreso_tratamiento ').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var ot = button.data('ot')
                var id = button.data('id')
                var oc = button.data('oc')
                var descripcion = button.data('descripcion')
                var cantidad = button.data('cantidad')
                var proveedor = button.data('proveedor')


                var modal = $(this)
                modal.find('.modal-title').text('Tratamiento: Regreso a almacen')
                modal.find('#ot').val(ot)
                modal.find('#id').val(id)
                modal.find('#oc').val(oc)
                modal.find('#descripcion').val(descripcion)
                modal.find('#cantidad').val(cantidad)
                modal.find('#proveedor').val(proveedor)


            })
        });
    </script>



    <script>
        $(document).ready(function() {
            $('#material_compras ').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var ot = button.data('ot')
                var id = button.data('id')
                var descripcion = button.data('descripcion')
                var cantidad = button.data('cantidad')
                var oc = button.data('oc')
                var proveedor = button.data('proveedor')


                var modal = $(this)
                modal.find('.modal-title').text('Compra de material')
                modal.find('#ot').val(ot)
                modal.find('#id').val(id)
                modal.find('#descripcion').val(descripcion)
                modal.find('#cantidad').val(cantidad)
                modal.find('#oc').val(oc)
                modal.find('#proveedor').val(proveedor)


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