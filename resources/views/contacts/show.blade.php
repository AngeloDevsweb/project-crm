@extends('layouts.app')
@section('content')
<h3 class="text-center "><strong>Información detallada del cliente</strong></h3>
<div class="container">
    <div class="contenedor-detail">
        <div class="card card-body shadow">
            <div class="">
                <ion-icon name="person" class="avatar-contact"></ion-icon>
            </div>
            <h3 class="d-flex justify-content-between"> <strong>{{ $contact->nombre }}</strong> <a href="{{route('contacts.edit',$contact->id)}}" class="icon-update"><ion-icon name="create" ></ion-icon></a></h3>
            <p>{{$contact->descripcion}}</p>

            <div class="d-flex justify-content-around mt-2">
                <div class="d-flex justify-content-between" >
                    <ion-icon name="business" class="iconos-contact"></ion-icon>
                    <p>{{ $contact->client->nombre}}</p>
                </div>
                <div class="d-flex justify-content-between">
                    <ion-icon name="chatbubbles" class="iconos-contact"></ion-icon>
                    <p>{{$contact->relacionComercial}}</p>
                </div>
                <div class="d-flex justify-content-between">
                    <ion-icon name="briefcase" class="iconos-contact"></ion-icon>
                    <p>{{$contact->cargo}}</p>
                </div>
            </div>

            <div class="mt-4">
                <div>
                    <ion-icon name="at-circle" class="iconos-calls"></ion-icon>
                    <p>{{$contact->correo}}</p>
                </div>
                <div>
                    <ion-icon name="call" class="iconos-calls"></ion-icon>
                    <p>{{$contact->telefono}}</p>
                </div>
            </div>

            <div class="shadow mb-4 p-3 rounded">
                <h6 class="titulo-nota">Nota</h6>
                <p>{{$contact->nota}}</p>
            </div>

            <div class="row g-3">
                <a href="/contacts" class="col-md-3 button-back">Volver a la lista</a>
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
                    Deseas eliminar el contacto?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <form action="/contacts/{{$contact->id}}" method="POST">
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