@extends('layouts.app')
@section('content')
    <h3 class="text-center "><strong>Información de Actividad</strong></h3>
    <div class="container">
        <div class="container-activity-detail">
            <div class="card card-body shadow">
                <h3 class="d-flex justify-content-between"> <strong>{{ $activity->tipodeactividad }}</strong> <a href="{{route('activity.edit',$activity->id)}}" class="icon-update"><ion-icon name="create" ></ion-icon></a></h3>
                <p class="estilo-actividad-tipo">Tipo de actividad</p>
                <div class="d-flex justify-content-center align-items-center">
                    <ion-icon name="calendar-number" class="icono-fecha"></ion-icon>
                    <p class="estilo-fecha">{{$activity->fecha}}</p>
                </div>

                <div class="shadow-sm card-body rounded">
                    <h4 class="fw-semibold">NOTA</h4>
                    <hr>
                    <p>{{$activity->nota}}</p>
                </div>

                <div class="shadow-sm card-body rounded mt-4">
                    <h4 class="fw-semibold">CLIENTE</h4>
                    <h6 class="estilo-cliente">{{$activity->client->nombre}}</h6>
                    <p>{{$activity->client->descripcion}}</p>
                </div>

                <div class="row g-3">
                    <a href="/activity" class="col-md-3 button-back">Volver a la lista</a>
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
                 Deseas eliminar esta actividad?
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                 <form action="/activity/{{$activity->id}}" method="POST">
                     @method('DELETE')
                     <button type="submit" class="btn btn-danger">Eliminar</button>
                     @csrf
                 </form>

             </div>
         </div>
     </div>
 </div>
@endsection