<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('theme.include.header')
</head>

  <body>
    <div id="app">
      <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        @include('theme.include.perfil')
      </nav>
      @include('theme.include.slider')
    </div>
      @include('layouts.contenido')
    
    <main class="py-4">
      @yield('content') 
    </main>
      
    </div>    
    @include('theme.include.footer')
    @yield('localscript')
  </body>
</html>

