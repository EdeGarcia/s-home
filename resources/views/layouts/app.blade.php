<!-- ======= Login Page ======= -->
<!DOCTYPE html>
<html lang="en">

@include('components.head')

<body class="bg-gray-100 text-gray-800">
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href="index.html">S-HOME</a></h1>
            <nav class="navbar" id="navbar">
               
                <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
                    @if (auth()->check())
                        <li class="mx-8 ">
                            <p class="text-xl" > Bienvenido <b>{{ auth()->user()->name}}</b></p>
                        </li>
                        <li>
                            <a href="{{route('login.destroy')}}" class="getstarted scrollto"> Cerrar Sesión</a>
                        </li>
                    @else
                        <li class="mx-6">
                            <a href="{{route('login')}}" class="">Iniciar Sesión </a>
                        </li>
                        <li>
                            <a href="{{route('registrar')}}" class="getstarted scrollto"> Registrarse</a>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>
    </header>
    @yield('content')
</body>
</html>