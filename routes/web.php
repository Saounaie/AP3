<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\VoyageController;



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

Route::get('/adhérents', [App\Http\Controllers\AdherentsController::class, 'getAdherents']);

Route::get('/evenements', [App\Http\Controllers\EvenementController::class, 'getEvenements']);

Route::resource('voyage', App\Http\Controllers\VoyageController::class);
Route::get('/createVoyage', [VoyageController::class], 'create');
Route::post('/createVoyage', [VoyageController::class], 'save');

Route::get('/editVoyage', [VoyageController::class, 'edit']);
Route::put('/editVoyage', [VoyageController::class, 'update']);
Route::delete('/gestionVoyage', [VoyageController::class, 'destroy']);

