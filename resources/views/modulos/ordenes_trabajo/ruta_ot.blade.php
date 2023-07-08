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
                            <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"></span></span>Panel de inicio</h4>
                        </div>

                        <div class="row stats-row">
                            <div class="col-xl-12">
                                <section class="hk-sec-wrapper">
                                    <div class="row stats-row">
                                        <div class="col-sm">
                                            <div style="display:none;">
                                                <textarea id="code" style="width: 200%;" rows="20">
                        @foreach($ordenes as $orden)
                          st=>start: <?php if ($orden->sistema_ot == '-') {
                                            echo "OT:{$orden->ot}\n";
                                        } else {
                                            echo "OT: {$orden->ot}|invalid\n";
                                        } ?>
                          e=>end: <?php if ($orden->sistema_facturacion == '-') {
                                        echo "FACTURACION\n";
                                    } else {
                                        echo "FACTURACION|invalid\n";
                                    } ?>
                        op1=>operation: <?php if ($orden->sistema_ingenieria == '-') {
                                            echo "INGENIERIA\n";
                                        } else {
                                            echo "INGENIERIA|invalid\n";
                                        } ?>
                        op2=>operation: <?php if ($orden->sistema_almacen == '-') {
                                            echo "ALMACEN\n";
                                        } else {
                                            echo "ALMACEN|invalid\n";
                                        } ?>
                        op3=>operation: <?php if ($orden->sistema_compras == '-') {
                                            echo "COMPRAS\n";
                                        } else {
                                            echo "COMPRAS|invalid\n";
                                        } ?>
                        op4=>operation: <?php if ($orden->sistema_almacenr == '-') {
                                            echo "ALMACEN\n";
                                        } else {
                                            echo "ALMACEN|invalid\n";
                                        } ?>
                        op5=>operation: <?php if ($produccion->estatus == 'E.CALIDAD') {
                                            echo "PRODUCCION|finalizada\n";
                                        } elseif ($produccion->estatus == 'FINALIZADA') {
                                            echo "PRODUCCION|maquina\n";
                                        } elseif ($produccion->estatus == 'REGISTRADA') {
                                            echo "PRODUCCION|registrada\n";
                                        } elseif ($produccion->estatus == 'EN MAQUINA') {
                                            echo "PRODUCCION|maquina\n";
                                        } elseif ($produccion->estatus == 'ASIGNADA') {
                                            echo "PRODUCCION|maquina\n";
                                        } elseif ($produccion->estatus == 'PAUSADA') {
                                            echo "PRODUCCION|maquina\n";
                                        } else {
                                            echo "PRODUCCION\n";
                                        } ?>
                          op6=>operation: <?php if ($orden->sistema_calidad == '-') {
                                                echo "CALIDAD\n";
                                            } else {
                                                echo "CALIDAD|invalid\n";
                                            } ?>
                          op7=>operation: <?php if ($orden->sistema_embarques == '-') {
                                                echo "EMBARQUES\n";
                                            } else {
                                                echo "EMBARQUES|invalid\n";
                                            } ?>
                        @endforeach
                        st(right)->op1->op2(right)->op3(right)->op4(right)->op5(right)->op6(right)->op7(right)->e
                      </textarea>
                                            </div>
                                            <div style="display:none;"><button id="run" type="button">Run</button></div>
                                            <div id="canvas" style="text-align: center;"></div>
                                        </div>
                                    </div>
                                </section>
                                <!-- Modal forms-->
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">OT</th>
                                            <th scope="col">Cliente</th>
                                            <th scope="col">Maquina</th>
                                            <th scope="col">Técnico</th>
                                            <th scope="col">Estatus</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <th>{{$produccion->ot}}</th>
                                            <th>{{$produccion->cliente}}</th>
                                            <th>{{$produccion->maquina_asignada}}</th>
                                            <th>{{$produccion->persona_asignada}}</th>
                                            <th>{{$produccion->estatus}}</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

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
                                                            <th>OT</th>
                                                            <th>Movimiento</th>
                                                            <th>Responsable</th>
                                                            <th>Hora</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($registros as $registro)
                                                        <tr>

                                                            <td>{{$registro->ot}}</td>
                                                            <td>{{$registro->movimiento}}</td>
                                                            <td>{{$registro->responsable}}</td>
                                                            <td>{{$registro->created_at}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>OT</th>
                                                            <th>Movimiento</th>
                                                            <th>Responsable</th>
                                                            <th>Hora</th>

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.3.0/raphael.min.js" integrity="sha512-tBzZQxySO5q5lqwLWfu8Q+o4VkTcRGOeQGVQ0ueJga4A1RKuzmAu5HXDOXLEjpbKyV7ow9ympVoa6wZLEzRzDg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <script src="http://flowchart.js.org/flowchart-latest.js"></script>
    <script src="../plantilla/flowchart/release/flowchart.js"></script>


    <script>
        window.onload = function() {
            var btn = document.getElementById("run"),
                cd = document.getElementById("code"),
                chart;

            (btn.onclick = function() {
                var code = cd.value;

                if (chart) {
                    chart.clean();
                }

                chart = flowchart.parse(code);
                chart.drawSVG('canvas', {
                    // 'x': 30,
                    // 'y': 50,
                    'line-width': 3,
                    'maxWidth': 30, //ensures the flowcharts fits within a certian width
                    'line-length': 70,
                    'text-margin': 10,
                    'font-size': 30,
                    'font': 'normal',
                    'font-family': 'Helvetica',
                    'font-weight': 'normal',
                    'font-color': 'black',
                    'line-color': 'black',
                    'element-color': 'black',
                    'fill': 'white',
                    'yes-text': 'yes',
                    'no-text': 'no',
                    'arrow-end': 'block',
                    'scale': 1,
                    'symbols': {
                        'start': {
                            'font-color': 'black',
                            'element-color': 'black',
                            'fill': 'yellow'
                        },
                        'end': {
                            'class': 'end-element'
                        }
                    },
                    'flowstate': {
                        'past': {
                            'fill': '#FFFFFF',
                            'font-size': 12
                        },
                        'current': {
                            'fill': 'yellow',
                            'font-color': 'red',
                            'font-weight': 'bold'
                        },
                        'future': {
                            'fill': '#FFFFFF'
                        },
                        'request': {
                            'fill': 'blue'
                        },
                        'invalid': {
                            'fill': '#2eb870'
                        },
                        'finalizada': {
                            'fill': '#2eb870'
                        },
                        'registrada': {
                            'fill': '#FFFF00'
                        },
                        'maquina': {
                            'fill': '#FFA500'
                        },
                        'approved': {
                            'fill': '#D3D3D3',
                            'font-size': 12,
                            'yes-text': 'APPROVED',
                            'no-text': 'n/a'
                        },
                        'rejected': {
                            'fill': '#C45879',
                            'font-size': 12,
                            'yes-text': 'n/a',
                            'no-text': 'REJECTED'
                        }
                    }
                });

                $('[id^=sub1]').click(function() {
                    alert('info here');
                });
            })();

        };

        function myFunction(event, node) {
            console.log("You just clicked this node:", node);
        }
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