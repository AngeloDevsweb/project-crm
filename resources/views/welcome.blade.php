<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{asset('/storage/faviconcrm.png')}}" type="image/x-icon">
        <title>CRMDEV</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
          <!-- Scripts -->
             @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body class="">
        <div class="container">
            {{-- @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

            <div class="row">
                <div class="col-md-4">
                    <div class="shadow-sm p-4">
                        <h2 class="titulo-home">CRMDEV</h2>
                    <p class="description-home">CRMDEV es un sistema que ayuda a las empresas a gestionar sus relaciones con los clientes. 
                        Proporciona herramientas para rastrear interacciones, administrar contactos, automatizar actividades y mejorar la comunicación con los clientes.
                         Un buen CRM puede ayudar a aumentar la eficiencia, mejorar la retención de clientes y optimizar las estrategias de ventas y marketing.</p>
                         <a href="{{ route('login') }}" class="bton-comenzar">COMIENZA YA</a>
                    </div>
                </div>
                <div class="col-md-8">
                    <img src="{{ asset('storage/loginvector.png') }}" height="900px" width="100%" alt="">
                </div>
            </div>
            
        </div>
    </body>
</html>
