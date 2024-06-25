<?php

namespace App\Http\Controllers;

use App\Http\Requests\DemandeActeNaissance;
use App\Http\Requests\DemandeDecesRequest;
use App\Http\Requests\DemandeDeurRequest;
use App\Http\Requests\DemandeMariageRequest;
use App\Models\DemandeActeNaissance as ModelsDemandeActeNaissance;
use App\Models\DemandeDecesModel;
use App\Models\DemandeMariage;
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
        $users = session()->get('users');
        return view('Utilisateur.acte_naissance',[
            'users'=> $users
        ]);

    }


    public function acte_mariage(){
        $users = session()->get('users');

        return view('Utilisateur.actes_mariages',[
            'users'=> $users
        ]);

    }

    public function acte_de_deces(){
        $users = session()->get('users');
        return view('Utilisateur.actes_deces',[
            'users'=> $users
        ]);

    }
    public function menu(){
        $users =session()->get('users');
        $ModelsDemandeActeNaissance = ModelsDemandeActeNaissance::where('demandeur_id', $users[0]->id)->get();
        $DemandeDecesModel =  DemandeDecesModel::where('demandeur_id', $users[0]->id)->get();
        $DemandeMariage =  DemandeMariage::where('demandeur_id', $users[0]->id)->get();

        return view('Utilisateur.menu',[
               'users'=>$users,
               'ModelsDemandeActeNaissance'=>$ModelsDemandeActeNaissance,
               'DemandeDecesModel'=>$DemandeDecesModel,
               'DemandeMariage'=>$DemandeMariage
        ]);

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


    public function demandeActeNaissace(DemandeActeNaissance $demandeActeNaissance){

        $todayCount = ModelsDemandeActeNaissance::where('demandeur_id', $demandeActeNaissance->id)
        ->whereDate('created_at', date('Y-m-d'))
        ->count();

    if ($todayCount > 0) {
        toastr()->warning('Vous avez déjà une demande en cours ');
        return back();
    }
        $demande=new ModelsDemandeActeNaissance();
        $demande->nom_pere=$demandeActeNaissance->nom_pere;
        $demande->nom_mere=$demandeActeNaissance->nom_mere;
        $demande->departement=$demandeActeNaissance->departement;

        $demande->numero_registe=$demandeActeNaissance->numero_registre;
        $demande->annee_de_naissance=$demandeActeNaissance->annee_de_naissance;
        $demande->demandeur_id=$demandeActeNaissance->id;
        $demande->status='En-cours';

        $demande->save();
        toastr()->info('Votre demande à été envoyé consulter vos messages !');
        return back();
    }

    public function demandeActeMariage(DemandeMariageRequest $demandeActeNaissance){

        $todayCount = DemandeMariage::where('demandeur_id', $demandeActeNaissance->id)
        ->whereDate('created_at', date('Y-m-d'))
        ->count();

    if ($todayCount > 0) {
        toastr()->warning('Vous avez déjà une demande en cours ');
        return back();
    }
        $demande=new DemandeMariage();
        $demande->numero_registre_mariage=$demandeActeNaissance->numero_registre_mariage;
        $demande->centre=$demandeActeNaissance->centre;
        $demande->date_mariage=$demandeActeNaissance->date_mariage;

        $demande->lieu_mariage=$demandeActeNaissance->lieu_mariage;
        $demande->date_naissance_marie=$demandeActeNaissance->date_naissance_marie;
        $demande->date_naissance_mariee=$demandeActeNaissance->date_naissance_mariee;
        $demande->regime_matrimonial=$demandeActeNaissance->regime_matrimonial;
        $demande->polygamie_monogamie=$demandeActeNaissance->polygamie_monogamie;

        $demande->demandeur_id=$demandeActeNaissance->id;
        $demande->status='En-cours';

        $demande->save();
        toastr()->info('Votre demande à été envoyé consulter vos messages !');
        return back();
    }


    public function demandeActeDeces(DemandeDecesRequest $demandeActeNaissance){

        $todayCount = DemandeDecesModel::where('demandeur_id', $demandeActeNaissance->id)
        ->whereDate('created_at', date('Y-m-d'))
        ->count();

    if ($todayCount > 0) {
        toastr()->warning('Vous avez déjà une demande en cours ');
        return back();
    }
        $demande=new  DemandeDecesModel();
        $demande->numero_registre=$demandeActeNaissance->numero_registre;
        $demande->centre=$demandeActeNaissance->centre;
        $demande->date_naissance=$demandeActeNaissance->date_naissance;

        $demande->lieu_deces=$demandeActeNaissance->lieu_deces;
        $demande->sexe=$demandeActeNaissance->sexe;
        $demande->nom_mere=$demandeActeNaissance->nom_mere;
        $demande->nom_pere=$demandeActeNaissance->nom_pere;

        $demande->date_deces=$demandeActeNaissance->date_deces;

        $demande->demandeur_id=$demandeActeNaissance->id;
        $demande->status='En-cours';

        $demande->save();
        toastr()->info('Votre demande à été envoyé consulter vos messages !');
        return back();
    }
}
