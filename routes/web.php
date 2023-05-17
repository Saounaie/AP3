<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoyageController;
use App\Http\Controllers\AdherentController;
use App\Http\Controllers\ReservationController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/adherents/reservations/{idAdherent}', [App\Http\Controllers\AdherentsController::class, 'index']);
Route::get('/reservations/{idReserv}', [App\Http\Controllers\ReservationController::class, 'show'])->name('reservations.show');
Route::get('/createReservation', [App\Http\Controllers\ReservationController::class, 'create'])->name('reservations.create');
Route::post('/createReservation', [App\Http\Controllers\ReservationController::class, 'store'])->name('reservations.store');

// Route::get('/adherents/reservations/{idAdherent}', [AdherentsController::class], 'index');

Route::get('/evenements', [App\Http\Controllers\EvenementController::class, 'getEvenements']);

Route::resource('voyage', App\Http\Controllers\VoyageController::class);
Route::get('/createVoyage', [VoyageController::class], 'create');
Route::post('/createVoyage', [VoyageController::class], 'save');

Route::get('/editVoyage', [VoyageController::class, 'edit']);
Route::put('/editVoyage', [VoyageController::class, 'update']);
Route::delete('/gestionVoyage', [VoyageController::class, 'destroy']);

