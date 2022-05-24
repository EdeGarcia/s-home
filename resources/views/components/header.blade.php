  <!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

   
      <h1 class="logo"><a href="{{route('home')}}">S-HOME</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          @foreach ($menu as $key => $item)
            @if ($item['MENU_PADRE'] != 0)
              @break
            @endif
            @include('components.menuItem', ['item' => $item])
          @endforeach
          
          @if (auth()->check())
            <li class="mx-8 ">
              <p class="text-xl" > Bienvenido <b>{{ auth()->user()->name}}</b></p>
            </li>
            <li>
              <a href="{{route('login.destroy')}}" class="getstarted scrollto"> Cerrar Sesión</a>
            </li>
          @else
            <li class="mx-6">
            <a href="{{route('login')}}" class="getstarted scrollto">Iniciar Sesión </a>
            </li>
          
          @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->