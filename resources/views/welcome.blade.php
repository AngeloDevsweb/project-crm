<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{asset('/storage/faviconcrm.png')}}" type="image/x-icon">
        <title>CRMDEV</title>

        <!-- Bootstrap CSS (CDN) -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        
        <!-- Custom Styles -->
        <link rel="stylesheet" href="{{ asset('css/home.css?v=1.1') }}">
        
        <!-- Vite Scripts (si los usas, asegúrate de que están configurados correctamente) -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="shadow-sm p-4">
                        <h2 class="titulo-home">CRMDEV</h2>
                        <p class="description-home">
                            CRMDEV es un sistema que ayuda a las empresas a gestionar sus relaciones con los clientes. 
                            Proporciona herramientas para rastrear interacciones, administrar contactos, automatizar actividades y mejorar la comunicación con los clientes.
                            Un buen CRM puede ayudar a aumentar la eficiencia, mejorar la retención de clientes y optimizar las estrategias de ventas y marketing.
                        </p>
                        <a href="{{ route('login') }}" class="bton-comenzar">COMIENZA YA</a>
                    </div>
                </div>
                <div class="col-md-8">
                    <img src="https://github.com/AngeloDevsweb/Login-and-register-con-firebase/blob/main/src/assets/loginvector.png?raw=true"
                         class="tamano-imagen" alt="Imagen CRM">
                </div>
            </div>
        </div>

        <!-- Bootstrap JS y dependencias (CDN) -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>
