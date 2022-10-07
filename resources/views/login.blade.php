<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">    
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
                <img src="{{asset('img/RRHHLOGO.png')}}" alt="" style="width:400px">
            </div>
            <h3>Bienvenidos al Sistema de Gestión de Recursos Humanos</h3>
            <p>Iniciar Sesi&oacute;n</p>
            <form class="m-t" role="form" action="" method="post">
                @csrf
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Correo" required="" name="login">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="" name="password">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
                
            </form>
            <p class="m-t"> <small>GRUPO 2 &copy; 2022</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>

</body>

</html>


