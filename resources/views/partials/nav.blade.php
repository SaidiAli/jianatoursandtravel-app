<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav" style="background-color: white">
        <div class="container">
            <a class="navbar-brand text-uppercase site-header" href="{{route('home')}}">jiana tours & travel</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item">
                        <a href="{{route('hotel.index')}}" class="nav-link raleway">Hotels</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('tours')}}" class="nav-link raleway">Tours</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="nav-link raleway" href="#" role="button" id="menuDropdown" data-toggle="dropdown"
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
                                <a class="nav-link nav-button raleway m-md-2" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link raleway nav-button m-md-2" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            @if(auth()->user()->hotels->count() > 0 or auth()->user()->admin)
                            <li class="nav-item">
                                        <a href="{{route('hotels.manage')}}" class="nav-link raleway">
                                            Manage Hotels
                                        </a>
                            </li>
                    @endif
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link raleway dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="{{route('profile')}}" class="dropdown-item">
                                        <i class="uil uil-user"></i>
                                        Profile
                                    </a>

                                    @if(auth()->user()->admin)
                                        <a href="{{route('cars.index')}}" class="dropdown-item">
                                            <i class="uil  uil-car-sideview"></i>
                                            <span>Manage Cars</span>
                                        </a>
                                    @endif

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="uil uil-sign-out-alt"></i>
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
