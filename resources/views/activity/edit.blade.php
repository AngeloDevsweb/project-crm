@extends('layouts.app')
@section('content')
<h3 class="text-center mb-5">ACTUALIZAR ACTIVIDAD</h3>
<div class="">
    <div class="container">

        <a href="/activity" class="back-index"><ion-icon name="chevron-back-circle"></ion-icon></a>

        <div class="card card-body shadow p-5">
            <form class="row g-3" action="{{ route('activity.update', $activity->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="col-md-6">
                    <div class="form-floating">

                        <select id="floatingSelect2" class="form-select" name="client_id" required>
                            @foreach ($clients as $client)
                                <option value="{{$client->id}}" {{$client->id == $activity->client_id ? 'selected': ''}} >{{$client->nombre}}</option>
                            @endforeach
                        </select>
                        <label for="floatingSelect2" class="form-label">Cliente</label>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating">
                        <select id="floatingSelect2" class="form-select" name="tipodeactividad" required>
                            <option value="Llamada" {{$activity->tipodeactividad == 'Llamada' ? 'selected':''}} >Llamada</option>
                            <option value="Email" {{$activity->tipodeactividad == 'Email' ? 'selected':''}}>Email</option>
                            <option value="Reunion" {{$activity->tipodeactividad == 'Reunion' ? 'selected':''}}>Reunion</option>
                        </select>
                        <label for="floatingSelect2" class="form-label">Tipo de Actividad</label>
                    </div>
                </div>
                <div class="col-8">
                    <div class="form-floating">
                        @php
                            $currentDate = date('Y-m-d');
                        @endphp
                        <input type="date" value="{{$activity->fecha}}" name="fecha" class="form-control" id="floatingdate" required min="{{$currentDate}}">
                        <label for="floatingdate">Fecha</label>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-floating">
                        <textarea class="form-control" id="floatingTextarea" name="nota" rows="5" required>{{$activity->nota}}</textarea>
                        <label for="floatingTextarea" class="form-label">Nota</label>
                    </div>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn-ActualizarActividad">Actualizar Actividad</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection