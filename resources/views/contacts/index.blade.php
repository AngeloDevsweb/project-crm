@extends('layouts.app')
@section('content')
    <div class="container-contact">
        <h3><strong>Contactos</strong></h3>
        <p>A continuación verás una lista de todos tus contactos.</p>

        <div class="">
            <a href="/contacts/create" class="btn-CrearContacto"><ion-icon name="person-add-outline"></ion-icon>Nuevo Contacto</a>
            <table class="table shadow table-hover mt-5">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Cargo</th>
                        <th scope="col">Relación Comercial</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Detalles</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr>
                            <td>{{ $contact->nombre }}</td>
                            <td>{{ $contact->descripcion }}</td>
                            <td>{{ $contact->cargo }}</td>
                            <td>{{ $contact->relacionComercial }}</td>
                            <td>{{ $contact->telefono }}</td>
                            <td><a href="{{ route('contacts.show', $contact->id) }}" class="view-client"><ion-icon name="eye"></ion-icon></a></td>
                            {{-- <td>{{ $contact->correo }}</td>
                    <td>{{ $contact->nota }}</td>
                    <td>{{ $contact->client->nombre }}</td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
