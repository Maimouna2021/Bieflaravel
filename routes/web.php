<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProprietaireController;

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


Route::get('/',[ProprietaireController::class,'index']);
Route::get('/add',[ProprietaireController::class,'create']);
Route::post('/inscription',[ProprietaireController::class,'store'])->name("insert.pos");
Route::get('/detail/{id}',[ProprietaireController::class,'detail'])->name("proprietaire.detail");
Route::get('/proprietaire/{id}',[ProprietaireController::class,'delete'])->name("proprietaire.supprimer");
Route::PUT('/update/{id}',[ProprietaireController::class,'update'])->name("proprietaire.update");

