

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>crm.dev</title>
    <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="alinear">
        <div class="container">
            
                <div class="card card-body shadow">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="">
                                <h2 class="text-center mb-5 mt-5">{{ __('LOGIN') }}</h2>
    
                                <div class="">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
    
                                        
                                            
                                            <div class="">
                                                <input id="email" type="email"
                                                    class="cajatexto @error('email') is-invalid @enderror" name="email"
                                                    value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
    
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        
    
                                        <div class="">
                                            <div class="">
                                                <input id="password" type="password"
                                                    class="cajatexto @error('password') is-invalid @enderror" name="password"
                                                    required autocomplete="current-password" placeholder="Password">
    
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
    
                                        <div class="row mb-0">
                                            <div class="col-md-4 offset-md-4">
                                                <button type="submit" class="btnform">
                                                    {{ __('Login') }}
                                                </button>
    
                                            </div>
                                        </div>
                                    </form>
                                    
                                    @if (Route::has('register'))
                                    
                                        <h4 class="texto">Aun no tienes cuenta? <a href="{{route('register')}}" class="btnswitch">Registrate</a> </h4>
                                    
                                @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ secure_asset('storage/login.jpg') }}" height="550px" width="100%" alt="">
                        </div>
                    </div>
                </div>
            
        </div>
    </div>
    
</body>
</html>



