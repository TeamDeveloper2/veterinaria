@if (Auth::user()->type == 1 || Auth::user()->type == 3)
<!DOCTYPE html>
<html lang="en">
<head>
    <title>veterinaria El Cristo</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])


    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{asset('css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">

    <!-- Gritter -->
    <link href="{{asset('js/plugins/gritter/jquery.gritter.css')}}" rel="stylesheet">

    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <link href="{{asset('css/plugins/iCheck/custom.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css')}}" rel="stylesheet">

    <link href="{{asset('css/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">

    <!-- Mainly scripts -->
    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{asset('js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

    <!-- Flot -->
    <script src="{{asset('js/plugins/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('js/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('js/plugins/flot/jquery.flot.spline.js')}}"></script>
    <script src="{{asset('js/plugins/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('js/plugins/flot/jquery.flot.pie.js')}}"></script>

    <!-- Peity -->
    <script src="{{asset('js/plugins/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('js/demo/peity-demo.js')}}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{asset('js/inspinia.js')}}"></script>
    <script src="{{asset('js/plugins/pace/pace.min.js')}}"></script>

    <!-- jQuery UI -->
    <script src="{{asset('js/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

    <!-- GITTER -->
    <script src="{{asset('js/plugins/gritter/jquery.gritter.min.js')}}"></script>

    <!-- Sparkline -->
    <script src="{{asset('js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>

    <!-- Sparkline demo data  -->
    <script src="{{asset('js/demo/sparkline-demo.js')}}"></script>

    <!-- ChartJS-->
    <script src="{{asset('js/plugins/chartJs/Chart.min.js')}}"></script>

    <!-- Toastr -->
    <script src="{{asset('js/plugins/toastr/toastr.min.js')}}"></script>

    <!-- iCheck -->
    <script src="{{asset('js/plugins/iCheck/icheck.min.js')}}"></script>
    <!-- Typehead -->
    <script src="{{asset('js/plugins/typehead/bootstrap3-typeahead.min.js')}}"></script>

    <script src="{{asset('js/plugins/dataTables/datatables.min.js')}}"></script>
    <script src="{{asset('js/plugins/dataTables/dataTables.bootstrap4.min.js')}}"></script>

    <script src="{{asset('js/jquery.PrintArea.js')}}"></script>

        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });

            function previewImage(nb) {
                var reader = new FileReader();
                reader.readAsDataURL(document.getElementById('uploadImage'+nb).files[0]);
                    reader.onload = function (e) {
                    document.getElementById('uploadPreview'+nb).src = e.target.result;
            };
}
        </script>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">

                        <h3 style="color:#FFFFFF"> Veterinaria- El Cristo</h3>
                        <div class="dropdown profile-element">

                            <img alt="image" class="rounded-circle" width="60px" src="{{asset('img/noUser.jpg')}}"/>
                            <h4> Administrador </h4>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="block m-t-xs font-bold"> {{ Auth::user()->name }} <b class="caret"></b></span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">

                                <li><a class="dropdown-item" href=""
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Cerrar Sesion') }}
                                    </a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">  @csrf</form>
                            </ul>
                        </div>
                        <div class="logo-element">
                            Veterinaria El Cristo
                        </div>
                    </li>
                    <li  >
                        <a href={{route('indexbitacora')}}><i class="fa fa-home"></i> <span class="nav-label">Inicio</span></a>
                    </li>

                    <li  >

                    <a href=""><i class="fa fa-users"></i> <span class="nav-label">Usuarios</span></a>
                    <ul>
                        <li><a href={{route('homec')}}>Usuarios</a></li>

                        </ul>
                    </li>
                    <li  >

                        <a href=""><i class="fa fa-user"></i> <span class="nav-label">Cliente</span></a>
                        <ul>
                            <li><a href={{route('homec1')}}>Cliente
                                </a></li>
                            </ul>
                        </li>


                    <li  >
                        <a href=""><i class="fa fa-stethoscope" aria-hidden="true"></i> <span class="nav-label">Examenes Medicos</span></a>
                        <ul>

                            <li><a href="{{route('lista_ecografia')}}">Ecografia</a></li>
                            <li><a href="{{route('hemograma_index')}}">Hemograma</a></li>
                            <li><a href="{{route('cirugia.index')}}">Cirugia</a></li>

                            </ul>
                        </li>


                        <li  >
                            <a href=""><i class="fa fa-shower" aria-hidden="true"></i> <span class="nav-label">Servicio Spa</span></a>
                            <ul>
                                <li><a href="{{route('spa.index')}}">Mostrar</a></li>
                                <li><a href="{{route('spa.create')}}">Registrar</a></li>
                            </ul>
                         </li>

                      <li>
                            <a href="{{route('admin_citas')}}"><i class="fa fa-stethoscope" aria-hidden="true"></i> <span class="nav-label">Cita</span></a>
                        </li>
                        <li>
                                <a href=""><i class="fa fa-stethoscope" aria-hidden="true"></i> <span class="nav-label">Emergencia</span></a>
                                <ul>
                                    <li><a href="{{route('cuestion')}}">Registrar</a></li>
                                    <li><a href="{{route('index')}}">Mostrar</a></li>

                                    </ul>
                                </li>

                    <li  >
                        <a href=""><i class="fa fa-linux"></i> <span class="nav-label"> Mascota</span></a>
                        <ul>
                            <li><a href={{route('homem')}}>Mascota</a></li>
                            <li><a href={{route('indexr')}}>Registro Veterinario</a></li>
                            <li><a href={{route('indextratamiento')}}>Tratamiento Mascota</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-cart-plus" aria-hidden="true"></i> <span class="nav-label">Ventas</span></a>
                            <ul>
                                <li><a href="{{route('proveedor_index')}}">Proveedores</a></li>
                                <li><a href="{{route('ventas_index')}}">Ventas</a></li>
                            </ul>
                        </li>


                    <li  >
                            <a href=""><i class="fa fa-archive"></i> <span class="nav-label">Articulos General</span></a>
                            <ul>
                                <li><a style="color:#FFFFFF"="#" href="{{route('indexArt')}}">Articulos</a></li>
                                <li><a style="color:#FFFFFF"="#" href="{{route('indexArtMec')}}">Medicamentos</a></li>

                                </ul>
                            </li>

                    <li  >
                             <a href=""><i class="fa fa-line-chart"></i> <span class="nav-label">Venta</span></a>
                            <ul>
                                <li><a href style="color:#FFFFFF"="#">Venta</a></li>
                                </ul>
                            </li>

                    <li  >
                        <a href=""><i class="fa fa-line-chart"></i> <span class="nav-label">Reportes</span></a>
                        <ul>
                            <li><a href="{{route('reporte-inventario')}}">Reporte de inventario</a></li>
                            <li><a href="{{route('reporte-venta')}}">Reporte de Ventas</a></li>
                            <li><a href="{{route('reporte-cliente')}}">Reprote de Clientes</a></li>
                            <li><a href="{{route('reporte-cita')}}">Reporte de citas</a></li>

                            </ul>
                    </li>








                </ul>

            </div>
        </nav>


        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2  btn btn-warning " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">

            </form>
        </div>
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has(''))
                                <li class="nav-item" >
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has(''))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif


                        @endguest
                    </ul>
        </nav>
        </div>


        @yield('content')

        <div class="footer">
            <div class="float-right">
                UAGRM - FICCT
            </div>
            <div>
                <strong>Copyright</strong> GRUPO 2  &copy; 2022
            </div>
        </div>
    </div>
</div>
@yield('script')
</body>
</html>
@else
    @extends('layouts.cliente')
@endif
