@extends('layouts.app')
@section('content')

<h3 class="text-center mb-5">EDITAR CONTACTO</h3>
<div class="">
    <div class="container">

        <a href="/contacts" class="back-index"><ion-icon name="chevron-back-circle"></ion-icon></a>

        <div class="card card-body shadow p-5">
            <form class="row g-3" action="{{ route('contacts.update', $contact->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="col-md-6">
                    <div class="form-floating">
                        <input id="floatingInput" type="text" name="nombre" value="{{$contact->nombre}}" class="form-control" required>
                        <label for="floatingInput" class="form-label">Nombre</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input id="floatingInput2" type="text" class="form-control" value="{{$contact->cargo}}" name="cargo" required>
                        <label for="floatingInput2" class="form-label">Cargo</label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <textarea class="form-control" id="floatingTextarea" name="descripcion" rows="3">{{$contact->descripcion}}</textarea>
                        <label for="floatingTextarea" class="form-label">Descripcion</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-floating">
                        <input id="floatingInput3" value="{{$contact->correo}}" type="email" class="form-control" name="correo" required>
                        <label for="floatingInput3" class="form-label">Correo</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-floating">
                        <input id="floatingInput4" type="text" value="{{$contact->telefono}}" class="form-control" name="telefono" required>
                        <label for="floatingInput4" class="form-label">Telefono</label>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating">

                        <select id="floatingSelect2" class="form-select" name="client_id" required>
                            @foreach ($clients as $client)
                                <option value="{{ $client->id }}" {{ $client->id == $contact->client_id ? 'selected' : '' }}>{{ $client->nombre }}</option>
                            @endforeach
                        </select>
                        <label for="floatingSelect2" class="form-label">Cliente</label>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating">
                        <select id="floatingSelect2" class="form-select" name="relacionComercial" required>
                            <option value="Buena" {{$contact->relacionComercial == 'Buena'? 'selected': ''}} >Buena</option>
                            <option value="Neutral"{{$contact->relacionComercial == 'Neutral'? 'selected': ''}} >Neutral</option>
                            <option value="Mala" {{$contact->relacionComercial == 'Mala'? 'selected': ''}}>Mala</option>
                        </select>
                        <label for="floatingSelect2" class="form-label">Relacion Comercial</label>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-floating">
                        <textarea class="form-control" id="floatingTextarea" name="nota" rows="3" required>{{$contact->nota}}</textarea>
                        <label for="floatingTextarea" class="form-label">Nota</label>
                    </div>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn-ActualizarContacto">Editar Contacto</button>
                </div>

            </form>
        </div>
    </div>
</div>
    
@endsection