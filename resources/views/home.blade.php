@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="text-center mb-5">Dashboard</h3>
    
    <div class="row g-3">
        <div class="col-md-6">
            <div class="estilo-dash-estado">
                <div class="estilo-dash-estado2">
                    <canvas id="clientesPorEstado"></canvas>
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <canvas id="actividadesPorTipo"></canvas>
        </div>
        <hr>
        <div class="col-md-12">
            <canvas id="actividadesPorFecha"></canvas>
        </div>
        <div class="col-md-6">
            <canvas id="contratosPorEstado"></canvas>
        </div>
        <div class="col-md-6">
            <canvas id="contratosPorCliente"></canvas>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>

    const clientesPorEstado = @json($clientesPorEstado);
    const actividadesPorTipo = @json($actividadesPorTipo);
    const actividadesPorFecha = @json($actividadesPorFecha);
    const contratosPorEstado = @json($contratosPorEstado);
    const contratosPorCliente = @json($contratosPorCliente);

    // Clientes por estado
    new Chart(document.getElementById('clientesPorEstado'), {
        type: 'pie',
        data: {
            labels: Object.keys(clientesPorEstado),
            datasets: [{
                data: Object.values(clientesPorEstado),
                backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56','#e8281a']
            }]
        }
    });

    // Actividades por tipo
    new Chart(document.getElementById('actividadesPorTipo'), {
        type: 'bar',
        data: {
            labels: Object.keys(actividadesPorTipo),
            datasets: [{
                label: 'Actividades por TIPO',
                data: Object.values(actividadesPorTipo),
                backgroundColor: ['#36A2EB','#FF6384', '#FFCE56']
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

    // Actividades por fecha
    new Chart(document.getElementById('actividadesPorFecha'), {
        type: 'line',
        data: {
            labels: Object.keys(actividadesPorFecha),
            datasets: [{
                data: Object.values(actividadesPorFecha),
                backgroundColor: '#FF6384'
            }]
        }
    });

    // Contratos por estado
    new Chart(document.getElementById('contratosPorEstado'), {
        type: 'doughnut',
        data: {
            labels: Object.keys(contratosPorEstado),
            datasets: [{
                data: Object.values(contratosPorEstado),
                backgroundColor: ['#41B06E', '#e8281a', '#FF9800']
            }]
        }
    });

    // Contratos por cliente
    new Chart(document.getElementById('contratosPorCliente'), {
        type: 'bar',
        data: {
            labels: Object.keys(contratosPorCliente),
            datasets: [{
                label: 'Contratos por cliente',
                data: Object.values(contratosPorCliente),
                backgroundColor: '#e8281a',
                borderWith:1
            }]
        }
    });
</script>
@endsection

