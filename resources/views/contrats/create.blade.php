@extends('layouts.app')
@section('content')
<h3 class="text-center mb-5">CREAR NUEVO CONTRATO</h3>
<div class="">
    <div class="container">

        <a href="/contrats" class="back-index"><ion-icon name="chevron-back-circle"></ion-icon></a>

        <div class="card card-body shadow p-5">
            <form class="row g-3" action="/contrats" method="POST">
                @csrf
                <div class="col-md-6">
                    <div class="form-floating">
                        <input id="floatingInput" type="text" name="titulo" class="form-control" placeholder="Ingresar" required >
                        <label for="floatingInput" class="form-label">Titulo</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">

                        <select id="floatingSelect2" class="form-select" name="client_id" required>
                            @foreach ($clients as $client)
                                <option value="{{$client->id}}">{{$client->nombre}}</option>
                            @endforeach
                        </select>
                        <label for="floatingSelect2" class="form-label">Cliente</label>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating">
                        <select id="floatingSelect2" class="form-select" name="estado" required>
                            <option>Propuesta</option>
                            <option>Activo</option>
                            <option>Completo</option>
                        </select>
                        <label for="floatingSelect2" class="form-label">Estado</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-floating">
                        @php
                            $currentDate = date('Y-m-d');
                        @endphp
                        <input type="date" name="fecha_inicio" class="form-control" id="floatingdate" required min="{{$currentDate}}">
                        <label for="floatingdate">Fecha Inicio</label>
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-floating">
                        @php
                            $currentDate = date('Y-m-d');
                        @endphp
                        <input type="date" name="fecha_fin" class="form-control" id="floatingdate" required min="{{$currentDate}}">
                        <label for="floatingdate">Fecha Fin</label>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating">
                        <select id="floatingSelect5" class="form-select" name="etapa" required>
                            <option>Seguimiento</option>
                            <option>Prospeccion</option>
                            <option>Demo call</option>
                            <option>Negociacion</option>
                            <option>Cierre</option>
                            <option>Implementacion</option>
                        </select>
                        <label for="floatingSelect5" class="form-label">Etapa</label>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="">
                        <input id="" step="0.01" min="0" type="number" name="monto" class="form-control" placeholder="Ingresar monto Ej:45,50" required >
                        
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-floating">
                        <textarea class="form-control" id="floatingTextarea7" name="descripcion" rows="4" required></textarea>
                        <label for="floatingTextarea7" class="form-label">Descripcion</label>
                    </div>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn-CrearActividad">Crear contrato</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection