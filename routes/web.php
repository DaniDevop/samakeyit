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



Route::get('/inscription',[UtilisateurController::class,'signup'])->name('signup.users');
Route::get('/login',[UtilisateurController::class,'login'])->name('login.users');


Route::post('/add_users_account',[UtilisateurController::class,'store'])->name('store.users');
Route::post('/login-users',[UtilisateurController::class,'loginUsers'])->name('login.Users');
Route::get('/',[UtilisateurController::class,'home'])->name('home.users');


Route::middleware(['auth.user'])->group(function () {

    Route::get('/acceuil_users',[UtilisateurController::class,'menu'])->name('menu.users');
    Route::get('/acte_naissance',[UtilisateurController::class,'acte_naissance'])->name('acte_naissance.users');
    Route::get('/acte_mariages',[UtilisateurController::class,'acte_mariage'])->name('acte_mariage.users');
    Route::get('/acte_deces',[UtilisateurController::class,'acte_de_deces'])->name('actes_deces.users');
    Route::get('/deconnection_users',[UtilisateurController::class,'deconnection'])->name('deconnection.users');
    Route::post('/demande_acte_naissance',[UtilisateurController::class,'demandeActeNaissace'])->name('demande.ActeNaissace');

});
