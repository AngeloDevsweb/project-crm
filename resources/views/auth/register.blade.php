
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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
                        <div class="card card-body shadow">
                            <h2 class="text-center mt-4 mb-1">{{ __('Register') }}</h2>
            
                            <div class="">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
            
                                    <div class="row mb-3">
                                        
            
                                        <div class="">
                                            <input id="name" placeholder="Nombre" type="text" class="cajatexto @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="">
                                        
            
                                        <div class="">
                                            <input id="email" placeholder="Email" type="email" class="cajatexto @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="">
                                        
            
                                        <div class="">
                                            <input id="password" placeholder="Password" type="password" class="cajatexto @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="">
                                       
            
                                        <div class="">
                                            <input id="password-confirm" placeholder="Confirmar Password" type="password" class="cajatexto" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
            
                                    <div class="row mb-0">
                                        <div class="col-md-4 offset-md-4">
                                            <button type="submit" class="btnform">
                                                {{ __('Register') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                @if (Route::has('login'))
                                        
                                            <h4 class="texto">¿Ya tienes una cuenta? <a href="{{route('login')}}" class="btnswitch">Inicia sesion</a> </h4>
                                        
                                    @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('storage/register.jpg') }}" height="550px" width="100%" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

