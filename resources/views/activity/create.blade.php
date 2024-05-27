@extends('layouts.app')
@section('content')
<h3 class="text-center mb-5">CREAR NUEVA ACTIVIDAD</h3>
<div class="">
    <div class="container">

        <a href="/activity" class="back-index"><ion-icon name="chevron-back-circle"></ion-icon></a>

        <div class="card card-body shadow p-5">
            <form class="row g-3" action="/activity" method="POST">
                @csrf
                
                <div class="col-md-6">
                    <div class="form-floating">

                        <select id="floatingSelect2" class="form-select" name="client_id" required>
                            @foreach ($clientIds as $client)
                                <option value="{{$client->id}}">{{$client->nombre}}</option>
                            @endforeach
                        </select>
                        <label for="floatingSelect2" class="form-label">Cliente</label>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating">
                        <select id="floatingSelect2" class="form-select" name="tipodeactividad" required>
                            <option>Llamada</option>
                            <option>Email</option>
                            <option>Reunion</option>
                        </select>
                        <label for="floatingSelect2" class="form-label">Tipo de Actividad</label>
                    </div>
                </div>
                <div class="col-8">
                    <div class="form-floating">
                        @php
                            $currentDate = date('Y-m-d');
                        @endphp
                        <input type="date" name="fecha" class="form-control" id="floatingdate" required min="{{$currentDate}}">
                        <label for="floatingdate">Fecha</label>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-floating">
                        <textarea class="form-control" id="floatingTextarea" name="nota" rows="3" required></textarea>
                        <label for="floatingTextarea" class="form-label">Nota</label>
                    </div>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn-CrearContacto">Crear Actividad</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection