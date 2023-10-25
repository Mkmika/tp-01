<?php

use App\Http\Controllers\LogementController;
use App\Http\Controllers\SejourController;
use App\Models\Logement;
use Illuminate\Support\Facades\Route;

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

// LOGEMENT

Route::get('/formulaire',[LogementController::class,'show'])->name('show');
Route::get('/listeLogement',[LogementController::class,'liste'])->name('liste');

Route::post('/create/store',[LogementController::class,'store'])->name('store');

Route::get('/updateListeLogement/{id}',[LogementController::class,'getUpdateLogement'])->name('getUpdateLogement');

Route::post('/update/{id}', [LogementController::class,'update'])->name('update');

Route::delete('/delete/{id}', [LogementController::class,'delete'])->name('delete');

/* Route::post('/savePhoto',[LogementController::class,'savePhoto'])->name('savePhoto'); */

// SEJOUR

Route::get('/formSejour',[SejourController::class,'showSejour'])->name('showSejour');
Route::get('/listeSejour',[SejourController::class,'listSejour'])->name('listSejour');
Route::post('/create/storeSejour',[SejourController ::class,'storeSejour'])->name('storeSejour');
Route::get('/editSejour/{id}',[SejourController::class,'editSejour'])->name('editSejour');
Route::post('/updateS/{id}', [SejourController::class,'updateS'])->name('updateS');
Route::delete('/deleteSejour/{id}', [SejourController::class,'deleteSejour'])->name('deleteSejour');

