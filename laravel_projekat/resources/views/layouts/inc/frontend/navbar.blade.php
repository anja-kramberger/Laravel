<div class="main-navbar shadow-sm sticky-top">
    <nav class="navbar navbar-expand-lg" id="prodavnica.nav">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Pocetna</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/onama') }}">O nama</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/galerija') }}">Galerija</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ url('/products') }}">Proizvodi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/kontakt') }}">Kontakt</a>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa fa-shopping-cart"></i> Cart (0)
                        </a>
                    </li>-->
                </ul>
                <ul class="nav justify-contend-end">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('cart')}}">
                        <i class="fa fa-shopping-cart"></i> Cart (<livewire:frontend.cart.cart-count />)
                    </a>
                </li>
                    @guest
                @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @endif

                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        <a class="dropdown-item" href="{{ url('/orders') }}">My Orders</a>
                    </div>
                </li>
                @endguest
                </ul>
            </div>
        </div>
    </nav>
</div>
