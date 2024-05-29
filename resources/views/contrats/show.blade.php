@extends('layouts.app')
@section('content')
    <h3 class="text-center "><strong>Información de contrato</strong></h3>
    <div class="container">
        <div class="container-contract-detail">
            <div class="card card-body shadow">
                <div class="">
                    <ion-icon name="person" class="avatar-contact"></ion-icon>
                </div>
                
                <h3 class="d-flex justify-content-between"> 
                    <div>
                        <ion-icon class="icon-client-contrat" name="business"></ion-icon>
                        @if ($contrat->client)
                            <strong>{{ $contrat->client->nombre }}</strong>
                        @endif 
                    </div>   
                    <a href="{{route('contrats.edit',$contrat->id)}}" class="icon-update"><ion-icon name="create" ></ion-icon></a>
                </h3>

                <h3 class="fw-semibold">{{$contrat->titulo}}</h3>
                <h4>{{$contrat->monto}}$</h4>
                <div class="rounded shadow-sm mt-3 mb-3">
                    <p class="p-2">{{$contrat->descripcion}}</p>
                </div>

                <div class="d-flex justify-content-around">
                    <div class="d-flex justify-content-start">
                        <ion-icon name="calendar-clear" class="icon-fecha-contrat"></ion-icon>
                        <p class="">{{$contrat->fecha_inicio}}</p>
                    </div>
                    <div class="d-flex justify-content-start">
                        <ion-icon name="calendar-number" class="icon-fecha-contrat"></ion-icon>
                        <p>{{$contrat->fecha_fin}}</p>
                    </div>
                </div>

                <div class="d-flex justify-content-start">
                    <p class="estado-contrat">{{$contrat->estado}}</p>
                    <p class="etapa-contrat">{{$contrat->etapa}}</p>
                </div>

                <div class="row g-3">
                    <a href="/contrats" class="col-md-3 button-back">Volver a la lista</a>
                    <button type="button" class="btn btn-danger col-md-3" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">Eliminar</button>
                </div>
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
                    Deseas eliminar el contrato?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <form action="/contrats/{{$contrat->id}}" method="POST">
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                        @csrf
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection