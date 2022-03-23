<nav class="navbar navbar-expand-md navbar-light bg-primary">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/dashboard') }}">
            <img src="{{ asset('storage/images/Logo2.png') }}" alt="Sitssa" width="160" height="50" class="d-inline-block align-text-top">
        </a>

        <div class="collapse navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                @guest
                @else

                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="route" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Rutas </a>
                    <ul class="dropdown-menu bg-primary" aria-labelledby="route">
                        <li><a class="dropdown-item" href="{{ route('stations.index') }}">Terminales</a></li>
                        <li><a class="dropdown-item" href="{{ route('routes.index') }}">Rutas</a></li>
                        <li><a class="dropdown-item" href="">Sub-Rutas</a></li>
                        {{-- <li><a class="dropdown-item" href="{{ route('haul.index') }}">Paradas</a></li>
                    </ul>
                </li> --}}
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('safra.index') }}">zafra</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('report.index') }}">Reporte</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('clothingSize.index') }}">Tallas</a>
                    </li>
                @endguest
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                @else
                    <li class="nav-item dropdown">

                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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
