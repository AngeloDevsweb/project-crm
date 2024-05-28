<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Client;
use App\Models\Contract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ContractController extends Controller
{
   //middleware para validacion de rutas
   public function __construct()
   {
       $this->middleware('auth');
   }

    public function index()
    {
        //
        $user = Auth::user();
        $clientsId = $user->clients->pluck('id');
        $contrats = Contract::whereIn('client_id', $clientsId)->get();
        return view('contrats.index', compact('contrats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $user = Auth::user();
        $clients = $user->clients;
        return view('contrats.create', compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $contrat = new Contract($request->all());
        $contrat->save();
        return redirect()->route('contrats.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
