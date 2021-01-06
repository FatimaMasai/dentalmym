<div class="container"> 
    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
            @if (Route::has('login'))
                <!-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>  -->
            @endif
            
            @if (Route::has('register'))
                <!-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li> -->
            @endif
        @else 
        <div class="br-logo"><a href=""><span>[</span> Dental M&M <span>]</span></a></div> 
            <div class="br-header">
                <div class="br-header-left">
                    <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
                    <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
                        
                </div> 
                <div class="br-header-right">
                    <nav class="nav"> 
                        <div class="dropdown">
                            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                            <span class="logged-name hidden-md-down">{{ Auth::user()->name }}</span>
                            <img src="{{asset('img/logo-dental.png')}}" class="wd-32 rounded-circle" alt="">
                            <span class="square-10 bg-success"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-header wd-200">
                                <ul class="list-unstyled user-profile-nav"> 
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Salir') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                        </a>
                                    </li>
                                </ul>
                            </div> 
                        </div> 
                    </nav> 
                </div> 
            </div> 
        </div>
            
        @endguest
    </ul> 
</div>