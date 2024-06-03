<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ActivityController extends Controller
{
    //middleware para validacion de rutas
    public function __construct()
    {
        $this->middleware('auth');
    }
    //metodo para mostrar actividades
    public function index(){
        //$activity = Activity::all();
       $user = Auth::user();
       $clientIds = $user->clients->pluck('id');
       $activity = Activity::whereIn('client_id', $clientIds)->paginate(5);
        return view('activity.index', compact('activity'));
    }
    public function create(){
        $user = Auth::user();
        $clientIds = $user->clients;
        return view('activity.create', compact('clientIds'));
    }
    public function store(Request $request){
        $activity = new Activity($request->all());
        $activity->save();

        return redirect()->route('activity.index');
    }
    public function show(Activity $activity){
        $activity->load('client');
        return view('activity.show', compact('activity'));
    }
    public function destroy(Activity $activity){
        $activity->delete();
        return redirect()->route('activity.index');
    }
    public function edit(Activity $activity){
        $user = Auth::user();
        $clients = $user->clients;
        return view('activity.edit', compact('activity', 'clients'));
    }
    public function update(Request $request, Activity $activity){
        $activity->update($request->all());
        return redirect()->route('activity.index');
    }
}
