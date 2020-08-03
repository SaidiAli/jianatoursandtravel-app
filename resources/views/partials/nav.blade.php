<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger text-uppercase" href="{{route('home')}}">jiana tours & travel</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item">
                        <a href="{{route('hotel.index')}}" class="nav-link">Hotels</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('tours')}}" class="nav-link">Tours</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="nav-link" href="#" role="button" id="menuDropdown" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Services</a>
                            <div class="dropdown-menu" aria-labelledby="menuDropdown">
                                <a href="{{route('car-hire-and-sale')}}" class="dropdown-item">Car Hire and Sale</a>
                                <a href="#" class="dropdown-item">Bus booking</a>
                                <a href="#" class="dropdown-item">Passport and Visa</a>
                            </div>
                        </div>
                    </li>
                    <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="{{route('profile')}}" class="dropdown-item">Profile</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                </ul>
            </div>
        </div>
    </nav>