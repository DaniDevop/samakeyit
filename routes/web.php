<?php

use App\Http\Controllers\UtilisateurController;
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



Route::get('/',[UtilisateurController::class,'home']);
Route::get('/inscription',[UtilisateurController::class,'signup'])->name('signup.users');
Route::get('/login',[UtilisateurController::class,'login'])->name('login.users');
Route::get('/acte_naissance',[UtilisateurController::class,'acte_naissance'])->name('acte_naissance.users');
Route::get('/acte_mariages',[UtilisateurController::class,'acte_mariage'])->name('acte_mariage.users');
Route::get('/acte_deces',[UtilisateurController::class,'acte_de_deces'])->name('actes_deces.users');
Route::get('/acceuil_users',[UtilisateurController::class,'menu'])->name('menu.users');
