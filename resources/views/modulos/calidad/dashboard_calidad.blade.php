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
                            <li class="breadcrumb-item active" aria-current="page">Calidad</li>
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
                            <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"></span></span>Módulo Calidad </h4>
                        </div>

                        <form action="{{route('rechazo_cliente')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-2 form-group">
                                    <label for="oc">Rechazo del cliente:</label>
                                    <input class="form-control" id="ot" name="ot" placeholder="" value="" type="text">
                                </div>

                                <div class="col-md-1 form-group">
                                    <label>Agregar</label>
                                    <button class="btn btn-primary btn-block" type="submit">
                                        <i class="material-icons">add</i>
                                    </button>
                                </div>
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-xl-8">
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
                                                            <th>Tipo</th>
                                                            <th>Cliente</th>
                                                            <th>Descripcion</th>
                                                            <th>Cantidad</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($ordenes as $orden)
                                                        <tr>
                                                            <td style="width: 200px;">
                                                                <a target="_blank" href="{{route('order_pdf', $orden->id)}}" class="btn btn-primary btn-sm"><i class="material-icons">remove_red_eye</i></a>

                                                                <button type="button" class="btn  btn-sm btn-success" data-toggle="modal" data-target="#nueva_inspeccion" data-id="{{$orden->id}}" data-ot="{{$orden->ot}}" data-cliente="{{$orden->cliente}}" data-cantpro="{{$orden->cantidad}}">
                                                                    <i class="material-icons">add</i>
                                                                </button>
                                                            </td>
                                                            <td> <a target="_blank" href="public/storage/dibujos/{{$orden->ot}}/{{$orden->ot}}.pdf">{{$orden->ot}}</a></td>
                                                            <td>{{$orden->tipo_salida}}</td>
                                                            <td>{{$orden->cliente}}</td>
                                                            <td>{{$orden->descripcion}}</td>
                                                            <td>{{$orden->cantidad}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>
                                                            </th>
                                                            <th>OT</th>
                                                            <th>Tipo</th>
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

                            <div class="col-xl-4">
                                <section class="hk-sec-wrapper">
                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="card">
                                                <div class="card-header card-header-action">
                                                    <h6>Ordenes con retrabajo</h6>
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
                                                                        <th>Descripcion</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach($retrabajos as $retrabajo)
                                                                    <tr>
                                                                        <td>{{$retrabajo->ot}}</td>
                                                                        <td>{{$retrabajo->cliente}}</td>
                                                                        <td>{{$retrabajo->descripcion}}</td>
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



                        <div class="modal fade" id="nueva_inspeccion" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Nueva: Inspección.</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('calidad_embarques')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <input type="hidden" name="id" id="id"></input>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label for="ot">OT</label>
                                                    <input class="form-control" id="ot" name="ot" placeholder=""  type="number" onlyread>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="ot">Cliente</label>
                                                    <input class="form-control" id="cliente" name="cliente" placeholder="" type="text" onlyread>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    <label for="Salida">Tipo de inspeccion</label>
                                                    <select name="tipo_inspeccion" id="tipo_inspeccion" class="form-control" required>
                                                        <option value="LIBERADO" class="form-control" name="produccion"> LIBERADO </option>
                                                        <option value="SCRAP" class="form-control" name="-"> SCRAP</option>
                                                        <option value="RETRABAJO" class="form-control" name="almacen"> RETRABAJO</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    <label for="ot">Cantidad produccion</label>
                                                    <input class="form-control" id="cantpro" name="cantpro" placeholder="" value="" type="text" onlyread>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 form-group">
                                                    <label for="">Cant. Scrap</label>
                                                    <input required class="form-control" id="cant_scrap" name="cant_scrap" placeholder="" value="" type="number" onlyread>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="ot">Cant. Retrabajo</label>
                                                    <input required class="form-control" id="cant_retrabajo" name="cant_retrabajo" placeholder="" value="" type="number" onlyread>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="ot">Cant. Liberada</label>
                                                    <input required class="form-control" id="cant_liberada" name="cant_liberada" placeholder="" value="" type="number" onlyread>
                                                </div>
                                            </div>
                                            <hr>

                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    <label for="Salida">Servicio externo</label>
                                                    <select required name="servicio_externo" id="servicio_externo" class="form-control">
                                                        <option value="REQUERIDO" class="form-control"> REQUERIDO</option>
                                                        <option value="NO REQUERIDO" class="form-control"> NO REQUERIDO</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    <label for="Salida">Código</label>
                                                    <input required class="form-control" id="codigo" name="codigo" placeholder="" value="" type="text">

                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    <label for="archivo">Inspección final</label>
                                                    <input  class="form-control" id="doc" name="doc" placeholder="" value="" type="file">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label for="operador">Operador</label>
                                                    <input required class="form-control" id="operador" name="operador" placeholder="" value="" type="text">
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="descripcion">Descripcion</label>
                                                    <input required class="form-control" id="descripcion" name="descripcion" placeholder="" value="" type="text">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 form-group">
                                                    <label for="num_parte"># Parte</label>
                                                    <input required class="form-control" id="num_parte" name="num_parte" placeholder="" value="" type="text">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="analisis">Analisis</label>
                                                    <input required class="form-control" id="analisis" name="analisis" placeholder="" value="" type="text">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label for="origen">Origen</label>
                                                    <input required class="form-control" id="origen" name="origen" placeholder="" value="" type="text">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    <label for="disposicion">Disposicion</label>
                                                    <input required class="form-control" id="disposicion" name="disposicion" placeholder="" value="" type="text">
                                                </div>

                                            </div>
                                            <br>
                                            <button type="submit" class="btn btn-block btn-primary">Registrar</button>
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
            $('#nueva_inspeccion').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var id = button.data('id')
                var ot = button.data('ot')
                var cliente = button.data('cliente')
                var cantpro = button.data('cantpro')



                var modal = $(this)
                modal.find('.modal-title').text('Nueva inspeccion de calidad')
                modal.find('#ot').val(ot)
                modal.find('#id').val(id)
                modal.find('#cliente').val(cliente)
                modal.find('#cantpro').val(cantpro)


            })
        });
    </script>

    <script>
        $(function() {
            $("#tipo_inspeccion").change(function() {
                if ($(this).val() == "SCRAP") {
                    $("#cant_scrap").prop("disabled", false);
                    $("#cant_retrabajo").prop("disabled", true);
                    $("#cant_liberada").prop("disabled", true);
                    $("#operador").prop("disabled", false);
                    $("#analisis").prop("disabled", false);
                    $("#origen").prop("disabled", false);
                    $("#disposicion").prop("disabled", false);
                    $("#num_parte").prop("disabled", false);
                    $("#descripcion").prop("disabled", false);
                    $("#servicio_externo").prop("disabled", true);
                    $("#codigo").prop("disabled", true);

                } else if ($(this).val() == "RETRABAJO") {
                    $("#cant_scrap").prop("disabled", true);
                    $("#cant_retrabajo").prop("disabled", false);
                    $("#cant_liberada").prop("disabled", true);
                    $("#operador").prop("disabled", false);
                    $("#analisis").prop("disabled", false);
                    $("#origen").prop("disabled", false);
                    $("#disposicion").prop("disabled", false);
                    $("#num_parte").prop("disabled", false);
                    $("#descripcion").prop("disabled", false);
                    $("#servicio_externo").prop("disabled", true);
                    $("#codigo").prop("disabled", true);


                } else if ($(this).val() == "LIBERADO") {
                    $("#cant_scrap").prop("disabled", true);
                    $("#cant_retrabajo").prop("disabled", true);
                    $("#cant_liberada").prop("disabled", false);
                    $("#operador").prop("disabled", true);
                    $("#analisis").prop("disabled", true);
                    $("#origen").prop("disabled", true);
                    $("#disposicion").prop("disabled", true);
                    $("#num_parte").prop("disabled", true);
                    $("#descripcion").prop("disabled", true);
                    $("#servicio_externo").prop("disabled", false);
                    $("#codigo").prop("disabled", false);
                }
            });
        });
    </script>

    <script>
        $(function() {
            $("#servicio_externo").change(function() {
                if ($(this).val() == "REQUERIDO") {
                    $("#codigo").prop("disabled", false);

                } else if ($(this).val() == "NO REQUERIDO") {
                    $("#codigo").prop("disabled", true);

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