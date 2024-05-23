<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ContactsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('clients', ClientsController::class);
Route::resource('contacts', ContactsController::class);
Route::resource('activity', ActivityController::class);

