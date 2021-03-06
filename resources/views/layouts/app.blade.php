<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <marquee BEHAVIOR=ALTERNATE>   <title>Control Gasto 1</title>  </marquee > 


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                   
                      @guest
                     
                <img src="https://i.pinimg.com/originals/0b/63/1a/0b631ad754b602c813617ea6ad7e9204.png" width="30" height="30" 
                class="d-inline-block align-top"alt="">CONTROL DE GASTOS

                @else
                    <img src="https://wallo.com/media/aplicacion-control-gastos-android.png" width="30" height="30" class="d-inline-block align-top"   alt="">CONTROL DE GASTOS
                      <a class="nav-item nav-link"  href="{{route('usuarios')}}">Usuarios</a>
                      <a class="nav-item nav-link" href="{{route('movimiento')}}">Movimiento</a>
                      <a class="nav-item nav-link" href="{{route('tipo')}}">Tipo</a>
                       <a class="nav-item nav-link" target="_blank" href="https://github.com/Noemi12n/control_gastos">GitHud</a>
                      
                @endguest
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                                    {{ Auth::user()->usu_cedula }}
                                </a>




                            <ul class="dropdown-menu">
                            <!-- The user image in the menu -->

                            <li class="user-header">
                                <center>
                                <img src="https://e7.pngegg.com/pngimages/348/800/png-clipart-man-wearing-blue-shirt-illustration-computer-icons-avatar-user-login-avatar-blue-child-thumbnail.png" width="125px">
                                </center>
                            </li>
                           
                                 <center>
                                    Bienvenido
                                <div class="pull-right">
                                    <a href="http://localhost/control_gasto/public/logout" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();" class="dropdown-item">
                                        Cerrar Sesion
                                        </center>
                                    </a>


                                </div>
                            
                        </ul>










                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
