<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo') - FlySearch</title>
    <link rel="icon" href="{{url('img/fleet.png')}}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Faster+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{url('css/master.css')}}"/>
</head>
<body>
    @section('header')
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <!-- Brand -->
            <h1 class="navbar-brand" style="font-family: 'Faster One', cursive;font-size:40px;">FlySearch</h1>
            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                      Idioma
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Español - <img src="{{url('img/espana.png')}}" height="25px" width="25px"/></a>
                        <a class="dropdown-item" href="#">English - <img src="{{url('img/inglaterra.png')}}" height="25px" width="25px"/></a>
                    </div>
                </li>
                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        easternpablo
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Mi perfil</a>
                      <a class="dropdown-item" href="#">Configuración</a>
                    </div>
                </li>
                <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer;">
                        Cerrar sesión
                    </button>
                </form>
            </ul>
        </nav>
    @show
    <div class="container">
        @yield('content')
    </div>
    @section('footer')
        <div id="footer" class="container-fluid fixed-bottom">
            <div class="row">
                <div class="col-4 mt-3"><p>&copy;FlySearch 2020</p></div>
                <div class="col-4"></div>
                <div class="col-4 mt-2"><h2>FlySearch</h2></div>
            </div>
        </div>
    @show
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
