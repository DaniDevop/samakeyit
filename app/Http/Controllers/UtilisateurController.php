<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    //



    public function home(){
        return view('Utilisateur.index');

    }

    public function login(){
        return view('Utilisateur.login');

    }

    public function signup(){
        return view('Utilisateur.inscription');

    }

    public function acte_naissance(){
        return view('Utilisateur.acte_naissance');

    }


    public function acte_mariage(){
        return view('Utilisateur.actes_mariages');

    }

    public function acte_de_deces(){
        return view('Utilisateur.actes_deces');

    }
    public function menu(){
        return view('Utilisateur.menu');

    }
}
