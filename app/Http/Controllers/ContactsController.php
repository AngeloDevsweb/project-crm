<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;

class ContactsController extends Controller
{
    //agregar middleware de autenticacion
    public function __construct()
    {
        $this->middleware('auth');
    }
    // Método para mostrar la lista de contactos
    public function index()
    {
        $user = Auth::user();
        $contacts = Contact::where('user_id', $user->id)->with('client')->paginate(5);

        return view('contacts.index', compact('contacts'));
    }
    //funcion para mostrar el form crear contacto
    public function create()
    {
        $user = Auth::user();
        $clients = Client::where('user_id', $user->id)->get();

        return view('contacts.create', compact('clients'));
    }

    public function store(Request $request)
    {
        $userId = Auth::id();
        $contact = new Contact($request->all());
        $contact->user_id = $userId;
        $contact->save();

        return redirect()->route('contacts.index');
    }
    //cargar un solo contacto con su cliente asociado
    public function show(Contact $contact)
    {
        //usando eloquent
        $contact->load('client');
        return view('contacts.show', compact('contact'));
    }

    public function edit(Contact $contact)
    {  
        $user = Auth::user();
        $clients = Client::where('user_id', $user->id)->get();
        return view('contacts.edit', compact('contact', 'clients'));
    }

    public function update(Request $request, Contact $contact)
    {
        $contact->update($request->all());
        return redirect()->route('contacts.index');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index');
    }
}
