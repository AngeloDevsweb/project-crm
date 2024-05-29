@extends('layouts.app')
@section('content')
<h3 class="text-center mb-5">EDITAR CONTRATO</h3>
<div class="">
    <div class="container">

        <a href="/contrats" class="back-index"><ion-icon name="chevron-back-circle"></ion-icon></a>

        <div class="card card-body shadow p-5">
            <form class="row g-3" action="{{ route('contrats.update', $contrat->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="col-md-6">
                    <div class="form-floating">
                        <input id="floatingInput" type="text" value="{{$contrat->titulo}}" name="titulo" class="form-control" required >
                        <label for="floatingInput" class="form-label">Titulo</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">

                        <select id="floatingSelect2" class="form-select" name="client_id" required>
                            @foreach ($clients as $client)
                                <option value="{{$client->id}}" {{$contrat->client_id == $client->id ? 'selected':''}} >{{$client->nombre}}</option>
                            @endforeach
                        </select>
                        <label for="floatingSelect2" class="form-label">Cliente</label>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating">
                        <select id="floatingSelect2" class="form-select" name="estado" required>
                            <option value="Propuesta" {{$contrat->estado == 'Propuesta' ? 'selected':''}}>Propuesta</option>
                            <option value="Activo" {{$contrat->estado == 'Activo' ? 'selected':''}}>Activo</option>
                            <option value="Completo" {{$contrat->estado == 'Completo' ? 'selected':''}}>Completo</option>
                        </select>
                        <label for="floatingSelect2" class="form-label">Estado</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-floating">
                        @php
                            $currentDate = date('Y-m-d');
                        @endphp
                        <input type="date" name="fecha_inicio" value="{{$contrat->fecha_inicio}}" class="form-control" id="floatingdate" required min="{{$currentDate}}">
                        <label for="floatingdate">Fecha Inicio</label>
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-floating">
                        @php
                            $currentDate = date('Y-m-d');
                        @endphp
                        <input type="date" value="{{$contrat->fecha_fin}}" name="fecha_fin" class="form-control" id="floatingdate" required min="{{$currentDate}}">
                        <label for="floatingdate">Fecha Fin</label>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating">
                        <select id="floatingSelect5" class="form-select" name="etapa" required>
                            <option value="Seguimiento" {{$contrat->etapa == 'Seguimiento' ? 'selected':''}}>Seguimiento</option>
                            <option value="Prospeccion" {{$contrat->etapa == 'Prospeccion' ? 'selected':''}}>Prospeccion</option>
                            <option value="Demo call" {{$contrat->etapa == 'Demo call' ? 'selected':''}}>Demo call</option>
                            <option value="Negociacion" {{$contrat->etapa == 'Negociacion' ? 'selected':''}}>Negociacion</option>
                            <option value="Cierre" {{$contrat->etapa == 'Cierre' ? 'selected':''}}>Cierre</option>
                            <option value="Implementacion" {{$contrat->etapa == 'Implementacion' ? 'selected':''}}>Implementacion</option>
                        </select>
                        <label for="floatingSelect5" class="form-label">Etapa</label>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="">
                        <input value="{{$contrat->monto}}" step="0.01" min="0" type="number" name="monto" class="form-control" placeholder="Ingresar monto Ej:45,50" required >              
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-floating">
                        <textarea class="form-control" id="floatingTextarea7" name="descripcion" rows="4" required>{{$contrat->descripcion}}</textarea>
                        <label for="floatingTextarea7" class="form-label">Descripcion</label>
                    </div>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn-CrearActividad">Actualizar contrato</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection