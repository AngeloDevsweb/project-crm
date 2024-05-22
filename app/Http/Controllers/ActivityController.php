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
    
}
