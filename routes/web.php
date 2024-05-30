<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployéController; 


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
Route::get('/delete-employé/{id}', [EmployéController::class,'delete_employé']);
Route::get('/update-employé/{id}', [EmployéController::class,'update_employé']);
Route::post('/update/traitement' , [EmployéController::class,'update_employé_traitement']);
Route::get('/employé', [EmployéController::class,'liste_employé']);
Route::get('/ajouter', [EmployéController::class,'ajouter_employé']);
Route::post('/ajouter/traitement', [EmployéController::class,'ajouter_employé_traitement']);