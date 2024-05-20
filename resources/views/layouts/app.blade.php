<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/clients.css') }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        

        <div>
            <div class="sidebar-container">
                <div class="logo">
                    <img src="{{asset('/storage/login.jpg')}}" alt="" class="image-logo" >
                    <h4 class="text-center text-white">CRM.dev</h4>
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="menu">
                    

                        <a href="/dashboard" class="navegacion"><ion-icon class="icon-navigation" name="apps-outline"></ion-icon>Dashboard</a>
                        <a href="/clients" class="navegacion"><ion-icon class="icon-navigation" name="briefcase-outline"></ion-icon>Clientes</a>
                        <a href="" class="navegacion"><ion-icon class="icon-navigation" name="people-outline"></ion-icon>Contactos</a>
                        <a href="" class="navegacion"><ion-icon class="icon-navigation" name="folder-outline"></ion-icon>Contratos</a>
                        <a href="" class="navegacion"><ion-icon class="icon-navigation" name="albums-outline"></ion-icon>Actividades</a>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="navegacion"><ion-icon class="icon-navigation" name="download-outline"></ion-icon></ion-icon>Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    
                </div>
            </div>
        </div>

        <main class="principal-content">
            @yield('content')
        </main>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
