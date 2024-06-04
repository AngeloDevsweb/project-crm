<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Contract;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $user = Auth::user();

        $clientesPorEstado = Client::where('user_id', $user->id)
            ->selectRaw('estado, COUNT(*) as count')
            ->groupBy('estado')
            ->pluck('count', 'estado');


        // Contactos por cliente
        $contactosPorCliente = Contact::whereHas('client', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })->selectRaw('client_id, COUNT(*) as count')
            ->groupBy('client_id')
            ->pluck('count', 'client_id');

        // Actividades por tipo
        $actividadesPorTipo = Activity::whereHas('client', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })->selectRaw('tipodeactividad, COUNT(*) as count')
            ->groupBy('tipodeactividad')
            ->pluck('count', 'tipodeactividad');

        // Contratos por etapa
        $contratosPorEtapa = Contract::whereHas('client', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })->selectRaw('etapa, COUNT(*) as count')
            ->groupBy('etapa')
            ->pluck('count', 'etapa');


        return view('home', compact('clientesPorEstado', 'contactosPorCliente', 'actividadesPorTipo', 'contratosPorEtapa'));
    }
}
