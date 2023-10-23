<?php

use App\Http\Controllers\LogementController;
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
Route::get('/formulaire',[LogementController::class,'show'])->name('show');

Route::get('/listeLogement',[LogementController::class,'liste'])->name('liste');

Route::post('/create/store',[LogementController::class,'store'])->name('store');

Route::get('/update/{id}', function(){
    return view('updateLogement');
});
Route::post('/update/{id}', [LogementController::class,'update'])->name('update');

Route::delete('/delete/{id}', [LogementController::class,'delete'])->name('delete');

