@extends('layouts.app')
@section('content')
    <h3>aqui va el formulario para la creacion del cliente</h3>

    <div class="container" >
        <form class="row g-3" action="/clients" method="POST">
            @csrf
            <div class="col-md-6">
                <label class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" placeholder="Ingresar nombre" required >
              </div>
              <div class="col-md-6">
                <label  class="form-label">Direccion</label>
                <input type="text" class="form-control" name="direccion" required placeholder="Ingresar direccion del cliente">
              </div>
              <div class="col-12">
                <label class="form-label">Descripcion</label>
                <textarea class="form-control" placeholder="Ingresar descripcion" name="descripcion"  rows="3"></textarea>
              </div>
              <div class="col-6">
                <label  class="form-label">Web</label>
                <input type="text" class="form-control" name="web" required  placeholder="Direccion web">
              </div>
              <div class="col-6">
                <label class="form-label">Industria</label>
                <input type="text" class="form-control" name="industria" required placeholder="Tecnologia, agricola, comunicaciones...">
              </div>
              <div class="col-md-6">
                <label  class="form-label">Telefono</label>
                <input type="text" class="form-control" name="telefono"  placeholder="Telefono">
              </div>
              <div class="col-md-6">
                <label class="form-label">Estado</label>
                <select class="form-select" name="estado">
                  <option selected>Activo</option>
                  <option>Inactivo</option>
                  <option>Riesgoso</option>
                  <option>Perdido</option>
                </select>
              </div>
              
              
              <div class="col-12">
                <button type="submit" class="btn btn-primary">Crear Cliente</button>
              </div>
        </form>
    </div>
@endsection