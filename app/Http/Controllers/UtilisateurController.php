<?php

namespace App\Http\Controllers;

use App\Http\Requests\DemandeDeurRequest;
use App\Models\Demandeur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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



    public function store(DemandeDeurRequest $demandeDeurRequest){

        if($demandeDeurRequest->password != $demandeDeurRequest->password_confirm){
            flash()->error('Les mots de passes sont différents attention');
        return back();
        }
        $users=new Demandeur();
        $users->nom= $demandeDeurRequest->nom;
        $users->prenom= $demandeDeurRequest->prenom;
        $users->email= $demandeDeurRequest->email;
        $users->password= Hash::make($demandeDeurRequest->password);
        $users->num_carte_id= $demandeDeurRequest->num_carte_id;
        $users->tel= $demandeDeurRequest->tel;

        $users->save();
        flash()->success('Inscription valider avec succéss');
        return redirect()->route('login.users');
    }


    public function loginUsers(Request $request){

        $request->validate([
           'emailOrTel'=>'required',
           'password'=>'required',
        ]);

    $users=Demandeur::where('email',$request->emailOrTel)->orWhere('tel',$request->emailOrTel)->first();
    if(!$users){
        toastr()->error("Informations invalide  ici!");
        return back();
    }



    if(!Hash::check($request->password,$users->password)){
        toastr()->error("Informations invalide  là!");
        return back();
    }

    session()->put('users',[$users]);
    session()->put('login',true);

    return redirect()->route('menu.users');
    }


    public function deconnection(){

        session()->forget('users');
        session()->forget('login');
        toastr()->success('Deconnection reussi à bientot ');

        return redirect()->route('login.users');

    }
}
