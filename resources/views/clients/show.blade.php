@extends('layouts.app')
@section('content')
    <h3 class="text-center "><strong>Información detallada del cliente</strong></h3>
    <div class="container">
        <div class="contenedor-detail">
            <div class="card card-body shadow">
                <h5><strong>Cliente:</strong> {{ $client->nombre }} <a href="" class="icon-update"><ion-icon name="create"></ion-icon></a></h5>
                <p>{{ $client->descripcion }}</p>
                <h6><strong>Direccion:</strong></h6>
                <p>{{ $client->direccion }}</p>
                <h6><strong>Sitio Web:</strong></h6>
                <p>{{ $client->web }}</p>
                <h6><strong>Telefono:</strong></h6>
                <p>{{ $client->telefono }}</p>
                <h6><strong>Industria:</strong></h6>
                <p>{{ $client->industria }}</p>
                <h6><strong>Estado:</strong></h6>
                <p>{{ $client->estado }}</p>
                <div class="row g-3">
                    <a href="/clients" class="col-md-3 button-back">Volver a la lista</a>
                    <button type="button" class="btn btn-danger col-md-3" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">Eliminar</button>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel"><strong>IMPORTANTE</strong></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Deseas eliminar el cliente?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <form action="/clients/{{$client->id}}" method="POST">
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                            @csrf
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
