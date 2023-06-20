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

                        <form action="{{route('edicion_order', $order)}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="cliente">Cliente</label>
                                    <select name="cliente" class="form-control custom-select d-block w-100" id="cliente">
                                        <option value="{{$order->cliente}}">{{$order->cliente}}</option>
                                        @foreach ($clientes as $cliente)
                                        <option value="{{$cliente->cliente}}">{{$cliente->cliente}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="usuario">Usuario</label>
                                    <select name="usuario" class="form-control custom-select d-block w-100" id="usuario">
                                        <option value="{{$order->usuario}}">{{$order->usuario}}</option>
                                        @foreach ($usuarios as $usuario)
                                        <option value="{{$usuario->nombre}}">{{$usuario->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="oc">OC</label>
                                    <input name="oc" class="form-control" id="oc" placeholder="" value="{{$order->oc}}" type="text">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="partida">Partida</label>
                                    <input name="partida" class="form-control" id="partida" placeholder="" value="{{$order->partida}}" type="number">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <label for="cantidad">Cantidad</label>
                                    <input name="cantidad" class="form-control" id="cantidad" placeholder="" value="{{$order->cantidad}}" type="number">
                                </div>
                                <div class="col-md-8 form-group">
                                    <label for="descripcion">Descripcion</label>
                                    <input name="descripcion" class="form-control" id="descripcion" placeholder="" value="{{$order->descripcion}}" type="text">
                                </div>
                            </div>
                            <hr />
                            <hr />
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="tratamiento">Tratamiento</label>
                                    <input class="form-control" id="tratamiento" name="tratamiento" placeholder="" value="{{$order->tratamiento}}" type="text">
                                </div>
                            </div>

                            <hr />
                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <label for="Monto">Monto</label>
                                    <input class="form-control" id="monto" name="monto" placeholder="" value="{{$order->monto}}" type="number">
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="Moneda">Moneda</label>
                                    <select name="moneda" class="form-control custom-select d-block w-100" id="moneda">
                                        <option value="{{$order->moneda}}">{{$order->moneda}}</option>
                                        <option value="USD">USD</option>
                                        <option value="MXN">MXN</option>
                                    </select>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="Vendedor">Vendedor</label>
                                    <select name="vendedor" class="form-control custom-select d-block w-100" id="vendedor">
                                        <option value="{{$order->vendedor}}">{{$order->vendedor}}</option>
                                        @foreach ($vendedores as $vendedor)
                                        <option value="{{$vendedor->name}}"> {{$vendedor->name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="tipo_dibujo">Tipo dibujo</label>
                                    <select class="form-control custom-select d-block w-100" name="tipo_dibujo" id="tipo_dibujo">
                                        <option value="{{$order->tipo_dibujo}}">{{$order->tipo_dibujo}}</option>
                                        <option>Cliente</option>
                                        <option>Ingenieria</option>
                                    </select>
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="Comentarios">Comentarios</label>
                                    <input class="form-control" id="comentario_diseno" name="comentario_diseno" placeholder="" value="{{$order->comentario_diseno}}" type="text">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="Salidad de produccion">Salida de produccion</label>
                                    <input class="form-control" id="salida_produccion" name="salida_produccion" placeholder="" value="{{$order->salida_produccion}}" type="date">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="Salida de cliente">Salida de cliente</label>
                                    <input class="form-control" id="salida_cliente" name="salida_cliente" placeholder="" value="{{$order->salida_cliente}}" type="date">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="prioridad">Prioridad</label>
                                    <select class="form-control custom-select d-block w-100" name="prioridad" id="prioridad">
                                        <option value="{{$order->prioridad}}">{{$order->prioridad}}</option>
                                        <option>Normal</option>
                                        <option>Urgente</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="tipo_material">Material</label>
                                    <select class="form-control custom-select d-block w-100" name="tipo_material" id="tipo_material">
                                        <option value="{{$order->tipo_material}}">{{$order->tipo_material}}</option>
                                        <option>EMGY</option>
                                        <option>Cliente</option>
                                    </select>
                                </div>
                            </div>


                            <br>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                <a href="{{route('dashboard_ordenes')}}" class="btn btn-block btn-success">Regresar</a>

                                </div>
                                <div class="col-md-6 form-group">
                                    <button type="submit" class="btn btn-block btn-primary">Registrar</button>

                                </div>
                            </div>
                        </form>


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