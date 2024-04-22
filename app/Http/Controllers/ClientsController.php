<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//
use App\Models\Client;

class ClientsController extends Controller
{   
    //middleware para validacion de rutas
    public function __construct()
    {
        $this->middleware('auth');
    }
    //funcion para mostra la lista de clientes
    public function index(){
        // $clients = Client::All();
        // return view('clients.index', compact('clients'));
        $userId = Auth::id();
        $clients = Client::where('user_id', $userId)->get();
        //dd($clients);
        return view('clients.index', compact('clients'));

    }
    //funcion para mostrar el formulario de creacion de cliente
    public function create(){
        return view('clients.create');
    }
    //funcion para crear un cliente en la base de datos
    public function store(Request $request){
        Client::create($request->all());
        return redirect()->route('clients.index');
    }
    //funcion para mostrar un solo cliente
    public function show(Client $client){
        return view('clients.show', compact('client'));
    }
    //
    public function edit(Client $client){
        return view('clients.edit', compact('client'));
    }
    //
    public function update(Request $request, Client $client){
        $client->update($request->all());
        return redirect()->route('clients.index');
    }
    //publi
    public function destroy(Client $client){
        $client->delete();
        return redirect()->route('clients.index');
    }
}
