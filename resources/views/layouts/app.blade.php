<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Meta -->
  <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
  <meta name="author" content="ThemePixels"> 
  <title>Consultorio Dental M&M</title>  
  <!-- vendor css -->
  <link href="{{asset('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
  <link href="{{asset('lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
  <link href="{{asset('lib/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
  <link href="{{asset('lib/jquery-switchbutton/jquery.switchButton.css')}}" rel="stylesheet">
  <link href="{{asset('lib/rickshaw/rickshaw.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/chartist/chartist.css')}}" rel="stylesheet"> 
 <link href="{{asset('lib/highlightjs/github.css')}}" rel="stylesheet">
  <link href="{{asset('lib/morris.js/morris.css')}}" rel="stylesheet">


  <!-- Bracket CSS -->
  <link rel="stylesheet" href="{{asset('css/bracket.css')}}">
</head>

<body>
    <div id="app">
      <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
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
                                  <div class="input-group hidden-xs-down wd-170 transition">
                                      <input id="searchbox" type="text" class="form-control" placeholder="Search">
                                      <span class="input-group-btn">
                                          <button class="btn btn-secondary" type="button"><i class="fa fa-search"></i></button>
                                      </span>
                                  </div> 
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
          </div>
      </nav>
      @include('menu')
    </div>
    @include('layouts.contenido')
    
      <main class="py-4">
          @yield('content') 
      </main>
      
    </div>    
    <script src="{{asset('lib/highlightjs/highlight.pack.js')}}"></script>
    <script src="{{asset('lib/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('lib/morris.js/morris.js')}}"></script> 


    <script src="{{asset('lib/jquery/jquery.js')}}"></script>
    <script src="{{asset('lib/popper.js/popper.js')}}"></script>
    <script src="{{asset('lib/bootstrap/bootstrap.js')}}"></script>
    <script src="{{asset('lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
    <script src="{{asset('lib/moment/moment.js')}}"></script>
    <script src="{{asset('lib/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{asset('lib/jquery-switchbutton/jquery.switchButton.js')}}"></script>
    <script src="{{asset('lib/peity/jquery.peity.js')}}"></script>
    <script src="{{asset('lib/chartist/chartist.js')}}"></script>
    <script src="{{asset('lib/jquery.sparkline.bower/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('lib/d3/d3.js')}}"></script>
    <script src="{{asset('lib/rickshaw/rickshaw.min.js')}}"></script>
    
    <script src="{{asset('js/bracket.js')}}"></script>
    <script src="{{asset('js/ResizeSensor.js')}}"></script>
    <script src="{{asset('js/dashboard.js')}}"></script>
    <script>
      $(function(){
        'use strict'

        // FOR DEMO ONLY
        // menu collapsed by default during first page load or refresh with screen
        // having a size between 992px and 1299px. This is intended on this page only
        // for better viewing of widgets demo.
        $(window).resize(function(){
          minimizeMenu();
        });

        minimizeMenu();

        function minimizeMenu() {
          if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
            // show only the icons and hide left menu label by default
            $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
            $('body').addClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideUp();
          } else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
            $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
            $('body').removeClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideDown();
          }
        }
      });
    </script>
    <script src = "https://code.iconify.design/1/1.0.7/iconify.min.js"> </script>
  </body>
</html>

