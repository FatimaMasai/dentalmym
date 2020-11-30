<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
        <!-- Meta -->
        <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
        <meta name="author" content="ThemePixels">

        <title>LOGIN</title> 
        <link href="{{asset('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
        <link href="{{asset('lib/Ionicons/css/ionicons.css')}}" rel="stylesheet"> 
        <link rel="stylesheet" href="{{asset('css/bracket.css')}}"> 
    </head>

    <body>
        <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">
            <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
                <img src="{{asset('img/logo-dental.png')}}" alt="" class="img-fluid tx-center mg-l-40">
                <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal"></span> Bienvenido <span class="tx-normal"></span></div>
                <div class="tx-center mg-b-20">Consultorio Dental M&M</div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    
                    <div class="form-group"> 
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Ingresa Email" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group"> 
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  placeholder="Ingresa Password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror 
                    </div>

                    <div class="form-group row mb-0"> 
                        <div class="col-md-10 text-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Recordar Pass') }}
                                </label>
                            </div>
                        </div>
                    </div> 
                    <div class="form-group"> 
                        <button type="submit" class="btn btn-primary">
                            {{ __('Ingresar') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Recuperar Password?') }}
                            </a>
                        @endif 
                    </div>
                </form>
            </div> 
        </div> 
        <script src="{{asset('lib/jquery/jquery.js')}}"></script>
        <script src="{{asset('lib/popper.js/popper.js')}}"></script>
        <script src="{{asset('lib/bootstrap/bootstrap.js')}}"></script>
    </body>
</html>
