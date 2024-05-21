@extends('layouts.app')
@section('content')
    <h3><strong>Clientes</strong></h3>
    <p>Debajo veras información de todos tus clientes en una lista </p>

    <div>
        <a href="/clients/create" class="btn-CrearCliente"><ion-icon name="person-add-outline"></ion-icon>Nuevo cliente</a>
        <table class="table shadow table-hover mt-5">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Industria</th>
                    <th scope="col">Web</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Detalles</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    <tr class="p-2">
                        <td><ion-icon name="person-circle-outline"></ion-icon>{{ $client->nombre }}</td>
                        <td>{{ $client->direccion }}</td>
                        <td>{{ $client->telefono }}</td>
                        <td>{{ $client->industria }}</td>
                        <td>{{ $client->web }}</td>
                        @php
                            $estadoClases = [
                                'Activo' => 'estilo-estado-valido',
                                'Inactivo' => 'estilo-estado-invalido',
                                'Riesgoso' => 'estilo-estado-riesgoso',
                                'Perdido' => 'estilo-estado-perdido',
                            ];
                            $claseEstado = $estadoClases[$client->estado] ?? 'estilo-estado-default';
                        @endphp
                        <td>
                            <div class="{{$claseEstado}}">{{ $client->estado }}</div>
                        </td>
                        <td><a href="{{ route('clients.show', $client->id) }}" class="view-client"><ion-icon
                                    name="arrow-redo"></ion-icon></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
