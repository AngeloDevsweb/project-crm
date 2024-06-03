@extends('layouts.app')
@section('content')
    <div class="container-activity">
        <h3><strong>Actividades</strong></h3>
        <p>A continuación verás una lista de todas tus actividades.</p>

        <div class="">
            <a href="/activity/create" class="btn-CrearContacto"><ion-icon name="person-add-outline"></ion-icon>Nueva
                Actividad</a>
            <table class="table shadow table-hover mt-5">
                <thead>
                    <tr>
                        <th scope="col">Nota</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Tipo de actividad</th>
                        <th scope="col" >Ver</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($activity as $acti)
                        <tr>
                            <td>{{ $acti->nota }}</td>
                            <td>{{ $acti->client->nombre }}</td>
                            <td>
                                <div>
                                    {{ $acti->fecha }}
                                </div>
                            </td>
                            @php
                                $estadoClases = [
                                    'Reunion' => 'estado-bueno',
                                    'Llamada' => 'estado-neutral',
                                    'Email' => 'estado-malo',
                                ];
                                $estadoActual = $estadoClases[$acti->tipodeactividad];
                            @endphp
                            <td>
                                <div class="{{$estadoActual}}">
                                    {{ $acti->tipodeactividad }}
                                </div>
                            </td>
                            <td><a href="{{ route('activity.show', $acti->id) }}" class="ver-detalles" ><ion-icon name="eye"></ion-icon></a></td>
                        </tr>
                                  
                    @endforeach
                </tbody>
            </table>
            {{$activity->links()}}
    </div>
    @endsection
