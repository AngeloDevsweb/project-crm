@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-5">Dashboard</h1>

    <p>detalles de registros</p>
    <div class="row">
        <!-- Clientes por Estado -->
        <div class="col-md-6">
            <h3>Clientes por Estado</h3>
            <canvas id="clientesPorEstadoChart"></canvas>
        </div>

        <!-- Contactos por Cliente -->
        <div class="col-md-6">
            <h3>Contactos por Cliente</h3>
            <canvas id="contactosPorClienteChart"></canvas>
        </div>
    </div>
    <hr>
    <div class="row mt-4">
        <!-- Actividades por Tipo -->
        <div class="col-md-6">
            <h3>Actividades por Tipo</h3>
            <canvas id="actividadesPorTipoChart"></canvas>
        </div>

        <!-- Contratos por Etapa -->
        <div class="col-md-6">
            <h3>Contratos por Etapa</h3>
            <canvas id="contratosPorEtapaChart"></canvas>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Clientes por Estado
        var ctxClientesPorEstado = document.getElementById('clientesPorEstadoChart').getContext('2d');
        var clientesPorEstadoChart = new Chart(ctxClientesPorEstado, {
            type: 'pie',
            data: {
                labels: {!! json_encode($clientesPorEstado->keys()) !!},
                datasets: [{
                    label: 'Clientes por Estado',
                    data: {!! json_encode($clientesPorEstado->values()) !!},
                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
                }]
            }
        });

        // Contactos por Cliente
        var ctxContactosPorCliente = document.getElementById('contactosPorClienteChart').getContext('2d');
        var contactosPorClienteChart = new Chart(ctxContactosPorCliente, {
            type: 'bar',
            data: {
                labels: {!! json_encode($contactosPorCliente->keys()) !!},
                datasets: [{
                    label: 'Contactos por Cliente',
                    data: {!! json_encode($contactosPorCliente->values()) !!},
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Actividades por Tipo
        var ctxActividadesPorTipo = document.getElementById('actividadesPorTipoChart').getContext('2d');
        var actividadesPorTipoChart = new Chart(ctxActividadesPorTipo, {
            type: 'doughnut',
            data: {
                labels: {!! json_encode($actividadesPorTipo->keys()) !!},
                datasets: [{
                    label: 'Actividades por Tipo',
                    data: {!! json_encode($actividadesPorTipo->values()) !!},
                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40'],
                }]
            }
        });

        // Contratos por Etapa
        var ctxContratosPorEtapa = document.getElementById('contratosPorEtapaChart').getContext('2d');
        var contratosPorEtapaChart = new Chart(ctxContratosPorEtapa, {
            type: 'bar',
            data: {
                labels: {!! json_encode($contratosPorEtapa->keys()) !!},
                datasets: [{
                    label: 'Contratos por Etapa',
                    data: {!! json_encode($contratosPorEtapa->values()) !!},
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
</script>
@endsection
