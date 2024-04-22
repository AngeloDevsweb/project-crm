@extends('layouts.app')
@section('content')
<h3>Clientes</h3>
<p>Debajo veras información de todos tus clientes en una lista </p>

<div>
    <button class="btn btn-primary"><ion-icon name="person-add-outline"></ion-icon>Nuevo cliente</button>
    <table class="table shadow table-hover">
        <thead class="table-secondary">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Direccion</th>
                <th scope="col">Telefono</th>
                <th scope="col">Industria</th>
                <th scope="col">Web</th>
                <th scope="col">Estado</th>
                <th scope="col">Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td><ion-icon name="person-circle-outline"></ion-icon>{{$client->nombre}}</td>
                    <td>{{$client->direccion}}</td>
                    <td>{{$client->telefono}}</td>
                    <td>{{$client->industria}}</td>
                    <td>{{$client->web}}</td>
                    <td><div class="bg-success">{{$client->estado}}</div></td>
                    <td>Ver detalles...</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection