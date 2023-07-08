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
                                                            <th>Descripcion</th>
                                                            <th>Cant. OC</th>
                                                            <th>Cliente</th>
                                                            <th>Fecha limite</th>
                                                            <th>Tiempo trabajado</th>
                                                            <th>Dia asignado</th>
                                                            <th>Estatus</th>
                                                            <th>Cant. Retrabajo</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($ordenes as $orden)
                                                        @if($orden->modalidad == 'RETRABAJO' || $orden->modalidad == 'SCRAP' )
                                                        <tr class="bg-danger text-white">
                                                            <td style="width: 200px;">
                                                                <a target="_blank" href="{{route('order_pdf', $orden->ot)}}" class="btn btn-primary btn-sm"> <i class="material-icons">remove_red_eye</i></a>
                                                                <a href="{{route('inicio_ot', $orden)}}" class="btn btn-primary btn-sm"> <i class="material-icons">add</i></a>
                                                                <a href="{{route('pausa_ot', $orden)}}" class="btn btn-warning btn-sm"> <i class="material-icons">add</i></a>
                                                                <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#salida_produccion" data-id="{{$orden->id}}" data-ot="{{$orden->ot}}" data-cliente="{{$orden->cliente}}" data-descripcion="{{$orden->descripcion}}">
                                                                    <i class="material-icons">add</i>

                                                                </button>
                                                            </td>
                                                            <td> <a target="_blank" href="public/storage/dibujos/{{$orden->id}}/{{$orden->id}}.pdf">{{$orden->id}}</a></td>
                                                            <td>{{$orden->descripcion}}</td>
                                                            <td>{{$orden->cantidad}}</td>

                                                            <td>{{$orden->cliente}}</td>
                                                            <td>{{$orden->fecha_production}}</td>
                                                            <td>{{$orden->tiempo_progreso}}</td>
                                                            <td>{{$orden->fecha_recepcion}}</td>
                                                            <td>{{$orden->estatus}}</td>
                                                            <td>{{$orden->cant_retrabajo}}</td>

                                                        </tr>
                                                        @else
                                                        <tr>
                                                            <td style="width: 200px;">
                                                                <a target="_blank" href="{{route('order_pdf', $orden->ot)}}" class="btn btn-primary btn-sm">  <i class="material-icons">remove_red_eye</i></a>
                                                                <a href="{{route('inicio_ot', $orden)}}" class="btn btn-primary btn-sm">  <i class="material-icons">fast_forward</i></a>
                                                                <a href="{{route('pausa_ot', $orden)}}" class="btn btn-warning btn-sm">  <i class="material-icons">stop</i></a>
                                                                <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#salida_produccion" data-id="{{$orden->id}}" data-ot="{{$orden->ot}}" data-cliente="{{$orden->cliente}}" data-descripcion="{{$orden->descripcion}}">
                                                                <i class="material-icons">check</i>
                                                                </button>
                                                            </td>
                                                            <td> <a target="_blank" href="public/storage/dibujos/{{$orden->id}}/{{$orden->id}}.pdf">{{$orden->id}}</a></td>
                                                            <td>{{$orden->descripcion}}</td>
                                                            <td>{{$orden->cantidad}}</td>

                                                            <td>{{$orden->cliente}}</td>
                                                            <td>{{$orden->fecha_production}}</td>
                                                            <td>{{$orden->tiempo_progreso}}</td>
                                                            <td>{{$orden->fecha_recepcion}}</td>
                                                            <td>{{$orden->estatus}}</td>
                                                            <td>{{$orden->cant_retrabajo}}</td>
                                                        </tr>
                                                        @endif

                                                        @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>
                                                            </th>
                                                            <th>OT</th>
                                                            <th>Descripcion</th>
                                                            <th>Cant.OC</th>
                                                            <th>Cliente</th>
                                                            <th>Fecha limite</th>
                                                            <th>Tiempo trabajado</th>
                                                            <th>Dia asignado</th>
                                                            <th>Estatus</th>
                                                            <th>Cant. Retrabajo</th>
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

                        <div class="modal fade" id="salida_produccion" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Nueva: Carga de dibujo.</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('final_ot')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-0 form-group">
                                                    <input class="form-control" id="id" name="id" placeholder="" value="" type="text" hidden>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="ot">OT</label>
                                                    <input class="form-control" id="ot" name="ot" placeholder="" value="" type="number" onlyread>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="cliente">Cliente</label>
                                                    <input class="form-control" id="cliente" name="cliente" placeholder="" value="" type="text">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    <label for="ot">Descripcion</label>
                                                    <input class="form-control" id="descripcion" name="descripcion" placeholder="" value="" type="text" onlyread>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label for="Acabado">Acabado</label>
                                                    <select name="criterio_acabado" id="criterio_acabado" class="form-control">
                                                        <option value="-" class="form-control" name="-"> Selecciona</option>
                                                        <option value="CONFORME" class="form-control" name="CONFORME"> CONFORME</option>
                                                        <option value="NO CONFORME" class="form-control" name="NO CONFORME"> NO CONFORME</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="Rebabeo">REBABEO</label>
                                                    <select name="criterio_rebabeo" id="criterio_rebabeo" class="form-control">
                                                        <option value="-" class="form-control" name="-"> Selecciona</option>
                                                        <option value="CONFORME" class="form-control" name="CONFORME"> CONFORME</option>
                                                        <option value="NO CONFORME" class="form-control" name="NO CONFORME"> NO CONFORME</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label for="Machueleado">Machueleado</label>
                                                    <select name="criterio_machueleado" id="criterio_machueleado" class="form-control">
                                                        <option value="-" class="form-control" name="-"> Selecciona</option>
                                                        <option value="CONFORME" class="form-control" name="CONFORME"> CONFORME</option>
                                                        <option value="NO CONFORME" class="form-control" name="NO CONFORME"> NO CONFORME</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="Rebabeo">Limpieza</label>
                                                    <select name="criterio_limpieza" id="criterio_limpieza" class="form-control">
                                                        <option value="-" class="form-control" name="-"> Selecciona</option>
                                                        <option value="CONFORME" class="form-control" name="CONFORME"> CONFORME</option>
                                                        <option value="NO CONFORME" class="form-control" name="NO CONFORME"> NO CONFORME</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label for="Chaflanes">Chaflanes</label>
                                                    <select name="criterio_chaflanes" id="criterio_chaflanes" class="form-control">
                                                        <option value="-" class="form-control" name="-"> Selecciona</option>
                                                        <option value="CONFORME" class="form-control" name="CONFORME"> CONFORME</option>
                                                        <option value="NO CONFORME" class="form-control" name="NO CONFORME"> NO CONFORME</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label for="Profundidad roscas">Profundidad roscas</label>
                                                    <select name="criterio_roscas" id="criterio_roscas" class="form-control">
                                                        <option value="-" class="form-control" name="-"> Selecciona</option>
                                                        <option value="CONFORME" class="form-control" name="CONFORME"> CONFORME</option>
                                                        <option value="NO CONFORME" class="form-control" name="NO CONFORME"> NO CONFORME</option>
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

                    <script>
                        $(document).ready(function() {
                            $('#salida_produccion').on('show.bs.modal', function(event) {
                                var button = $(event.relatedTarget) // Button that triggered the modal
                                var ot = button.data('ot')
                                var id = button.data('id')
                                var cliente = button.data('cliente')

                                var descripcion = button.data('descripcion')



                                var modal = $(this)
                                modal.find('.modal-title').text('Finalizacion de trabajo')
                                modal.find('#ot').val(ot)
                                modal.find('#id').val(id)
                                modal.find('#cliente').val(cliente)

                                modal.find('#descripcion').val(descripcion)



                            })
                        });
                    </script>

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