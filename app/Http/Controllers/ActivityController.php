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
       $activity = Activity::whereIn('client_id', $clientIds)->get();
        return view('activity.index', compact('activity'));
    }
}
