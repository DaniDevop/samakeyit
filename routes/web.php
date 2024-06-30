<?php

use App\Http\Controllers\AdminController;
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


Route::get('/login-actions',function(){
    return view('Admin.actions.index');
});


Route::post('/add_users_account',[UtilisateurController::class,'store'])->name('store.users');
Route::post('/login-users',[UtilisateurController::class,'loginUsers'])->name('login.Users.doLogin');
Route::get('/',[UtilisateurController::class,'home'])->name('home.users');

// Users Controlles
Route::get('/login-admin',[AdminController::class,'login'])->name('login.admin');

Route::post('/doLogin',[AdminController::class,'doLogin'])->name('login.authentification');
Route::get('/reset_password_admin',[AdminController::class,'adminPasswordReset'])->name('admin.Password.Reset');
Route::post('/reset_admin_password_verification',[AdminController::class,'update_password_reset_admin'])->name('update.password.reset.admin');

Route::middleware(['auth.admin'])->group(function () {
    Route::get('/logoutUsers',[AdminController::class,'logout'])->name('logout.authentification');

    Route::get('/admin-users',[AdminController::class,'index'])->name('home.admin');
    Route::get('/admin_add_users',[AdminController::class,'users'])->name('listes.users');
    Route::post('/admin_new_users',[AdminController::class,'create'])->name('create.users');
    Route::get('/admin_ajout_document',[AdminController::class,'ajout_document'])->name('ajout.document');
    Route::post('/admin_new_document',[AdminController::class,'addDocument'])->name('add.Document');
    Route::get('/admin_demande-listes',[AdminController::class,'listes_document'])->name('listes.document');
    Route::get('/demande_acte-naissance/{id}',[AdminController::class,'detailsActenaissance'])->name('details.Actenaissance.users');
    Route::post('/sendEmailToDemandeur',[AdminController::class,'envoieFileToMailNaissance'])->name('envoie.File.ToMail');
    Route::get('/demande_mariage/{id}',[AdminController::class,'detailsActMariage'])->name('details.Acte.Mariage');
    Route::post('/sendEmailToDemandeurMariage',[AdminController::class,'envoieFileToMailMariage'])->name('envoie.File.ToMail.mariage');
    Route::get('/demande_deces/{id}',[AdminController::class,'detailsADeces'])->name('detailsA.Deces');
    Route::post('/sendEmailToDeces',[AdminController::class,'envoieFileToMailDeces'])->name('envoie.File.ToMailDeces');

    Route::get('/update-account',[AdminController::class,'update_account'])->name('update_.ccount.users');

    Route::post('/update_account_admin.inforùations',[AdminController::class,'update_account_users'])->name('update.informations');
    Route::post('/update_password_admin',[AdminController::class,'update_password_admin'])->name('update.password.admin');
    Route::get('/delete_users_account/{id}',[AdminController::class,'deleteUsers'])->name('delete.Users');

    Route::post('/update_account_admin.inforùations',[AdminController::class,'update_account_users'])->name('update.informations');


    Route::get('/listesDemandeMariage',[AdminController::class,'listesDemande_mariage'])->name('listes.Demande_mariage');
    Route::get('/details_DemandeMariage/{id}',[AdminController::class,'details_mariage'])->name('details.users_mariage');

    Route::get('/listesDecesDema',[AdminController::class,'listesDemande_deces'])->name('listes.Demande_deces');
    Route::get('/detailsDecesDemande/{id}',[AdminController::class,'details_deces'])->name('details.Demande_deces');

    Route::get('/listesNaissance',[AdminController::class,'listesDemande_naissance'])->name('listesDemande.users.naissance');


    Route::get('/details_naissance/{id}',[AdminController::class,'details_naissance'])->name('details_naissance.users');
    Route::get('/update_users_account',[AdminController::class,'update_users'])->name('update.account.users.page');
    Route::get('/add_account_users',[AdminController::class,'addUsers'])->name('addUsers.application');

});

Route::middleware(['auth.user'])->group(function () {

    Route::get('/acceuil_users',[UtilisateurController::class,'menu'])->name('menu.users');
    Route::get('/acte_naissance',[UtilisateurController::class,'acte_naissance'])->name('acte_naissance.users');
    Route::get('/acte_mariages',[UtilisateurController::class,'acte_mariage'])->name('acte_mariage.users');
    Route::get('/acte_deces',[UtilisateurController::class,'acte_de_deces'])->name('actes_deces.users');
    Route::get('/deconnection_users',[UtilisateurController::class,'deconnection'])->name('deconnection.users');
    Route::post('/demande_acte_naissance',[UtilisateurController::class,'demandeActeNaissace'])->name('demande.ActeNaissace');
    Route::post('/demande_acte_mariage',[UtilisateurController::class,'demandeActeMariage'])->name('demande.ActeMariage');
    Route::post('/demande_acte_deces',[UtilisateurController::class,'demandeActeDeces'])->name('demande.ActeDeces');
    Route::get('/details_acte_naissance/{id}',[UtilisateurController::class,'detailsActeNaissance'])->name('details.ActeNaissance');
    Route::post('/update_demande_acte_deces',[UtilisateurController::class,'updateActeNaissace'])->name('update.ActeMariage');
    Route::get('/details_mariage/{id}',[UtilisateurController::class,'detailsMariage'])->name('details.Mariage');
    Route::post('/update_demande_mariage',[UtilisateurController::class,'updateMariage'])->name('update.ActeMariages.app');
    Route::get('/details_deces/{id}',[UtilisateurController::class,'detailsDeces'])->name('details.Deces');
    Route::post('/update_demande_deces',[UtilisateurController::class,'updateActeDeces'])->name('deces.update.users');


});
