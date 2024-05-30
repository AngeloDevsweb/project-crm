<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Client;
use App\Models\Contract;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $clientesPorEstado = Client::selectRaw('estado, COUNT(*) as count')
            ->groupBy('estado')
            ->pluck('count', 'estado');

        $actividadesPorTipo = Activity::selectRaw('tipodeactividad, COUNT(*) as count')
            ->groupBy('tipodeactividad')
            ->pluck('count', 'tipodeactividad');

        $actividadesPorFecha = Activity::selectRaw('DATE(fecha) as fecha, COUNT(*) as count')
            ->groupBy('fecha')
            ->pluck('count', 'fecha');

        $contratosPorEstado = Contract::selectRaw('estado, SUM(monto) as total')
            ->groupBy('estado')
            ->pluck('total', 'estado');

        $contratosPorCliente = Contract::selectRaw('client_id, COUNT(*) as count')
            ->groupBy('client_id')
            ->pluck('count', 'client_id');

        return view('home', compact(
            'clientesPorEstado',
            'actividadesPorTipo',
            'actividadesPorFecha',
            'contratosPorEstado',
            'contratosPorCliente'
        ));
    }

}
