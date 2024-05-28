@extends('layouts.app')
@section('content')
<div class="container-contrats">
    <h3><strong>Contratos</strong></h3>
    <p>A continuación verás una lista de todos tus contratos.</p>

    <div class="">
        <a href="/contrats/create" class="btn-CrearContacto"><ion-icon name="person-add-outline"></ion-icon>Nuevo
            Contrato</a>
        <table class="table shadow table-hover mt-5">
            <thead>
                <tr>
                    <th scope="col">Informacion</th>
                    <th scope="col">Monto</th>
                    <th scope="col">Fecha Fin</th>
                    <th scope="col">Estado</th>
                    <th scope="col" >Ver</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($contrats as $contrat)
                    <tr>
                        <td>{{ $contrat->titulo }}</td>
                        <td>{{ $contrat->monto }}</td>
                        <td>
                            <div>
                                {{ $contrat->fecha_fin }}
                            </div>
                        </td>
                        @php
                            $estadoClases = [
                                'Propuesta' => 'estado-propuesto',
                                'Activo' => 'estado-activo',
                                'Completo' => 'estado-completo',
                            ];
                            $estadoActual = $estadoClases[$contrat->estado];
                        @endphp
                        <td>
                            <div class="{{$estadoActual}}">
                                {{ $contrat->estado }}
                            </div>
                        </td>
                        <td><a href="{{ route('contrats.show', $contrat->id) }}" class="ver-detalles" ><ion-icon name="eye"></ion-icon></a></td>
                    </tr>
                              
                @endforeach
            </tbody>
        </table>
</div>
@endsection