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
            <div class="login-wrapper wd-300 wd-xs-600 pd-25 pd-xs-40 bg-white rounded shadow-base">
            
                <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><img src="{{asset('img/logo-dental.png')}}" alt="" class="img-fluid" width="50"><span class="tx-normal"></span> {{ __('Registrar') }}<span class="tx-normal"></span></div>
                <div class="tx-center mg-b-20">Consultorio Dental M&M</div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    
                    <div class="form-group row"> 
                            <div class="col-md-6">
                            <label for="">Nombre</label>
                                <input id="name" type="text"  class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                            <label for="">Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                        </div> 

                        <div class="form-group row"> 

                            <div class="col-md-6">
                            <label for="">Password</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                            <label for="">Confirmar Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>

                        </div>

                        <div class="form-group row"> 

                           
                        </div>

                        <div class="form-group row mb-0">
                        <div class="col-md-2"></div>
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                            <div class="col-md-2">
                                <a href="http://localhost/sistema-v/public/login">Login</a>
                            </div>
                        </div>
                </form>
            </div> 
        </div> 
        <script src="{{asset('lib/jquery/jquery.js')}}"></script>
        <script src="{{asset('lib/popper.js/popper.js')}}"></script>
        <script src="{{asset('lib/bootstrap/bootstrap.js')}}"></script>
    </body>
</html>
