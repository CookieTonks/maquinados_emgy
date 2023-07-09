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

    @livewireStyles
    @livewireScripts


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

                        <div class="row stats-row">
                            <div class="col-xl-12">
                                <section class="hk-sec-wrapper">
                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="table-wrap">
                                                <table id="datable_1" class="table table-hover w-100 display pb-30">
                                                    <thead class="thead-primary">
                                                        <tr>
                                                            <th>
                                                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalForms">
                                                                    <i class="">Agregar</i>
                                                                </button>
                                                            </th>
                                                            <th>OT</th>
                                                            <th>Cliente</th>
                                                            <th>Usuario</th>
                                                            <th>Descripcion</th>
                                                            <th>Cantidad</th>
                                                            <th>Vendedor</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($orders as $order)
                                                        <tr>
                                                            <td style="width: 300px;">
                                                                <a target="_blank" href="{{route('order_pdf', $order->id)}}" class="btn btn-primary btn-sm"><i class="material-icons">remove_red_eye</i></a>
                                                                <a href="{{route('edition_order', $order->id)}}" class="btn btn-primary btn-sm"><i class="material-icons">create</i></a>
                                                                <a href="{{route('material_order', $order->id)}}" class="btn btn-primary btn-sm"><i class="material-icons">control_point_duplicate</i></a>
                                                                <a href="{{route('ruta_ot', $order->id)}}" class="btn btn-primary btn-sm"><i class="material-icons">timeline</i></a>
                                                            </td>
                                                            <td>
                                                                <a target="_blank" href="public/storage/dibujos/{{$order->id}}/{{$order->id}}.pdf">{{$order->id}}</a>
                                                            </td>
                                                            <td>{{$order->cliente}}</td>
                                                            <td>{{$order->usuario}}</td>
                                                            <td>{{$order->descripcion}}</td>
                                                            <td>{{$order->cantidad}}</td>
                                                            <td>{{$order->vendedor}}</td>

                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>+</th>
                                                            <th>OT</th>
                                                            <th>Cliente</th>
                                                            <th>Usuario</th>
                                                            <th>Descripcion</th>
                                                            <th>Cantidad</th>
                                                            <th>Vendedor</th>
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
                        <div class="modal fade" id="exampleModalForms" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Nueva: Orden de trabajo.</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('dashboard_ordenes_register')}}" method="post" enctype="multipart/form-data">
                                            @csrf



                                            <livewire:country-dropdown />



                                            <div class="row stats-row">
                                                <div class="col-md-6 form-group">
                                                    <label for="oc">OC</label>
                                                    <input name="oc" class="form-control" id="oc" placeholder="" value="" type="text" required>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="partida">Partida</label>
                                                    <input name="partida" class="form-control" id="partida" placeholder="" value="" type="number" required>
                                                </div>

                                            </div>


                                            <div class="row stats-row">
                                                <div class="col-md-12 form-group">
                                                    <label for="partida">Archivo OC</label>
                                                    <input type="file" placeholder="Solo archivos en PDF" class="form-control" name="archivo" accept="application/pdf" id="archivo">
                                                </div>
                                            </div>

                                            <div class="row stats-row">
                                                <div class="col-md-4 form-group">
                                                    <label for="cantidad">Cantidad</label>
                                                    <input name="cantidad" class="form-control" id="cantidad" placeholder="" value="" required type="number">
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <label for="descripcion">Descripcion</label>
                                                    <input name="descripcion" class="form-control" id="descripcion" placeholder="" required value="" type="text">
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="container">
                                                <div class="row stats-row" id="proceso_dinamico">
                                                    <div class="form-group form-horizontal">
                                                        <label class="control-label">Tiempo por pieza</label>
                                                        <div class="form-inline">
                                                            <select style="width:180px;" class="input-small form-control" id="proceso-selector" name="Proceso[]">
                                                                <option value="TORNEADO">TORNEADO</option>
                                                                <option value="FRESADO">FRESADO</option>
                                                                <option value="RECTIFICADO">RECTIFICADO</option>
                                                                <option value="CNC">CNC</option>
                                                                <option value="TORNO CNC">TORNO CNC</option>
                                                                <option value="CEPILLADO">CEPILLADO</option>
                                                                <option value="SOLDADURA">SOLDADURA</option>
                                                                <option value="PINTURA">PINTURA</option>
                                                                <option value="ENSAMBLE">ENSAMBLE</option>
                                                            </select>
                                                            <input style="width:90px; margin-left:5px;" type="number" class="input-small form-control" id="hora" name="hora[]" step="any" placeholder="(H)" required>
                                                            <input style="width:90px; margin-left:5px;" type="number" class="input-small form-control" id="minutos" name="minutos[]" placeholder="(M)" required>
                                                            <button style="margin-left:5px" type="button" class="btn btn-success btn-add" id="proceso_add"><i class="material-icons">add</i></a></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="row stats-row">
                                                <div class="col-md-12 form-group">
                                                    <label for="tratamiento">Tratamiento</label>
                                                    <input class="form-control" id="tratamiento" name="tratamiento" placeholder="" value="" type="text required">
                                                </div>
                                            </div>

                                            <hr />
                                            <div class="row stats-row">
                                                <div class="col-md-4 form-group">
                                                    <label for="Monto">P/U</label>
                                                    <input class="form-control" id="monto" name="monto" placeholder="" value="" type="number" required>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="Moneda">Moneda</label>
                                                    <select name="moneda" class="form-control custom-select d-block w-100" id="moneda">
                                                        <option value="">Selecciona una opcion...</option>
                                                        <option>USD</option>
                                                        <option>MXN</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="Vendedor">Vendedor</label>
                                                    <select name="vendedor" class="form-control custom-select d-block w-100" id="vendedor">
                                                        <option value="">Selecciona una opcion...</option>
                                                        @foreach ($vendedores as $vendedor)
                                                        <option value="{{$vendedor->name}}"> {{$vendedor->name}} </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="row stats-row">
                                                <div class="col-md-6 form-group">
                                                    <label for="tipo_dibujo">Tipo dibujo</label>
                                                    <select class="form-control custom-select d-block w-100" name="tipo_dibujo" id="tipo_dibujo">
                                                        <option value="">Selecciona una opcion...</option>
                                                        <option>Cliente</option>
                                                        <option>Ingenieria</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-6 form-group">
                                                    <label for="Comentarios">Comentarios</label>
                                                    <input class="form-control" id="comentarios_diseno" name="comentarios_diseno" placeholder="" value="" type="text" required>
                                                </div>
                                            </div>

                                            <div class="row stats-row">
                                                <div class="col-md-12 form-group">
                                                    <label for="Dibujo">Dibujo</label>
                                                    <input type="file" placeholder="Solo archivos en PDF" class="form-control" name="dibujo" accept="application/pdf" id="dibujo">

                                                </div>
                                            </div>
                                            <hr />

                                            <div class="row stats-row">
                                                <div class="col-md-6 form-group">
                                                    <label for="Salidad de produccion">Salida de produccion</label>
                                                    <input class="form-control" id="salida_produccion" name="salida_produccion" placeholder="" value="" type="date" required>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="Salida de cliente">Salida de cliente</label>
                                                    <input class="form-control" id="salida_cliente" name="salida_cliente" placeholder="" value="" type="date" required>
                                                </div>
                                            </div>

                                            <div class="row stats-row">
                                                <div class="col-md-6 form-group">
                                                    <label for="prioridad">Prioridad</label>
                                                    <select class="form-control custom-select d-block w-100" name="prioridad" id="prioridad">
                                                        <option value="">Selecciona una opcion...</option>
                                                        <option>Normal</option>
                                                        <option>Urgente</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="tipo_material">Material</label>
                                                    <select class="form-control custom-select d-block w-100" name="tipo_material" id="tipo_material">
                                                        <option value="">Selecciona una opcion...</option>
                                                        <option>Emgy</option>
                                                        <option>Cliente</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <br>
                                            <div class="row stats-row">
                                                <button type="submit" class="btn btn-block btn-primary">Registrar</button>

                                            </div>
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
        $(function() {
            $("#tipo_dibujo").change(function() {
                if ($(this).val() == "Cliente") {
                    $("#dibujo").prop("disabled", false);
                    $("#comentarios_diseño").prop("disabled", true);

                } else {
                    $("#dibujo").prop("disabled", true);
                    $("#comentarios_diseno").prop("disabled", false);
                }
            });
        });
    </script>

    <script>
        function getHTMLString() {
            var complex_html = [
                '<br>',
                '<div class="form-inline">',
                '<select style="width:180px;" class="input-small form-control" id="proceso-selector" name="Proceso[]">',
                ' <option value="TORNEADO">TORNEADO</option>',
                ' <option value="FRESADO">FRESADO</option>', ' <option value="RECTIFICADO">RECTIFICADO</option>',
                '<option value="CNC">CNC</option>',
                '<option value="TORNO CNC">TORNO CNC</option>',
                '<option value="CEPILLADO">CEPILLADO</option>',
                ' <option value="SOLDADURA">SOLDADURA</option>',
                '<option value="PINTURA">PINTURA</option>',
                '<option value="ENSAMBLE">ENSAMBLE</option>',
                '</select> ',
                '<input style="width:120px; margin-left:5px;" type="number" class="input-small form-control" id="hora"  name="hora[]" step="any" placeholder="(H)"> ',
                '<input style="width:120px; margin-left:5px;" type="text" class="input-small form-control"  id="minuto" name="minutos[]"  placeholder="(M)"> ',
                '</div>',
            ].join('');
            return complex_html;
        }

        $(document).ready(function() {
            var formCount = 0;
            $("#proceso_add").on('click', function() {

                if (formCount < 10) {
                    var html = getHTMLString();
                    var element = $(html);

                    $('#proceso_dinamico').append(html);
                    formCount++;
                } else {
                    return;
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