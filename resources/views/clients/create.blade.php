@extends('layouts.app')
@section('content')
    <h3 class="text-center mb-5">CREAR CLIENTE</h3>
    <div class="">
        <div class="container" >
            
            <a href="/clients" class="back-index"><ion-icon name="chevron-back-circle"></ion-icon></a>
            
            <div class="card card-body shadow p-5">
                <form class="row g-3" action="/clients" method="POST">
                    @csrf
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input id="floatingInput" type="text" name="nombre" class="form-control" placeholder="Ingresar nombre" required >
                            <label for="floatingInput" class="form-label">Nombre</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-floating">
                            <input id="floatingInput2" type="text" class="form-control" name="direccion" required placeholder="Ingresar direccion del cliente">
                            <label for="floatingInput2" class="form-label">Direccion</label>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-floating">
                            <textarea class="form-control" id="floatingTextarea" placeholder="Ingresar descripcion" name="descripcion"  rows="3"></textarea>
                            <label for="floatingTextarea" class="form-label">Descripcion</label>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-floating">
                            <input id="floatingInput3"  type="text" class="form-control" name="web" required  placeholder="Direccion web">
                            <label for="floatingInput3" class="form-label">Web</label>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-floating">
                            <input id="floatingInput4" type="text" class="form-control" name="industria" required placeholder="Tecnologia, agricola, comunicaciones...">
                            <label for="floatingInput4" class="form-label">Industria</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-floating">
                            <input id="floatingInput5" type="text" class="form-control" name="telefono"  placeholder="Telefono">
                            <label for="floatingInput5"  class="form-label">Telefono</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelect" name="estado">
                                <option selected>Activo</option>
                                <option>Inactivo</option>
                                <option>Riesgoso</option>
                                <option>Perdido</option>
                            </select>
                            <label for="floatingSelect" class="form-label">Estado</label>
                        </div>
                      </div>
                      
                      
                      <div class="col-12">
                        <button type="submit" class="btn-CrearCliente">Crear Cliente</button>
                      </div>
                      
                </form>
            </div>
        </div>
    </div>
@endsection