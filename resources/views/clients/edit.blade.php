@extends('layouts.app')
@section('content')
    <h2 class="text-center mb-5">Actualizar la informacion del cliente</h2>

    <div class="container">
        <a href="/clients" class="back-index"><ion-icon name="chevron-back-circle"></ion-icon></a>
        <div class="card card-body shadow-lg p-5">
            <form class="row g-3" action="{{ route('clients.update', $client->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="col-md-6">
                    <label class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Ingresar nombre"
                        value="{{ $client->nombre }}" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Direccion</label>
                    <input type="text" class="form-control" name="direccion" value="{{ $client->direccion }}" required
                        placeholder="Ingresar direccion del cliente">
                </div>
                <div class="col-12">
                    <label class="form-label">Descripcion</label>
                    <textarea class="form-control" name="descripcion" rows="3">{{ $client->descripcion }}</textarea>
                </div>
                <div class="col-6">
                    <label class="form-label">Web</label>
                    <input type="text" class="form-control" name="web" required value="{{ $client->web }}"
                        placeholder="Direccion web">
                </div>
                <div class="col-6">
                    <label class="form-label">Industria</label>
                    <input type="text" class="form-control" name="industria" value="{{ $client->industria }}" required
                        placeholder="Tecnologia, agricola, comunicaciones...">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Telefono</label>
                    <input type="text" class="form-control" name="telefono" value="{{ $client->telefono }}"
                        placeholder="Telefono">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Estado</label>
                    <select class="form-select" name="estado">
                        <option value="Activo" {{ $client->estado == 'Activo' ? 'selected' : '' }}>Activo</option>
                        <option value="Inactivo" {{ $client->estado == 'Inactivo' ? 'selected' : '' }}>Inactivo</option>
                        <option value="Riesgoso" {{ $client->estado == 'Riesgoso' ? 'selected' : '' }}>Riesgoso</option>
                        <option value="Perdido" {{ $client->estado == 'Perdido' ? 'selected' : '' }}>Perdido</option>
                    </select>
                </div>
    
    
                <div class="col-12">
                    <button type="submit" class="btn-ActualizarCliente">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
