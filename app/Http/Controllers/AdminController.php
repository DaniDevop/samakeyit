<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersRequest;
use App\Mail\UsersFileEmail;
use App\Models\DemandeActeNaissance;
use App\Models\DemandeDecesModel;
use App\Models\DemandeMariage;
use App\Models\Demandeur;
use App\Models\DocumentAdmin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class AdminController extends Controller
{
    //



    public function index(){

        return view("Admin.index");
    }

    public function ajout_document(){
        return view("Admin.ajoute_document");
    }


    public function listes_document(){
        $ModelsDemandeActeNaissance =DemandeActeNaissance::paginate(5);
        $DemandeDecesModel =  DemandeDecesModel::paginate(5);
        $DemandeAll =  DemandeMariage::paginate(5);
        return view("Admin.demande",[
            'ModelsDemandeActeNaissance'=>$ModelsDemandeActeNaissance,
            'DemandeDecesModel'=>$DemandeDecesModel,
            'DemandeAll'=>$DemandeAll
        ]);
    }

    public function detailsActenaissance($id){

        $Models =DemandeActeNaissance::find($id);
        if(!$Models){

            toastr()->error('Opération impossible ');
            return back();
        }
        $demandeAll =DocumentAdmin::all();

        return view('Admin.details_acte_naissance',[
            'Models'=>$Models,
            'demandeAll'=>$demandeAll
        ]);

    }


    public function logout(){
        $user= User::find(Auth::user()->id);
        $user->status='off';
        $user->save();
        Auth::logout();

        return redirect()->route('login.admin');
    }


    public function doLogin(Request $request){
        $request->validate([
          'emailOrTel'=>'required',
          'password'=>'required',

        ],[
            'emailOrTel.required'=>'L identifiant est requis',
            'password.required'=>'Le mot de passes est requis'

        ]);

        if(!Auth::attempt(['email'=>$request->emailOrTel,'password'=>$request->password])  && !Auth::attempt(['tel'=>$request->emailOrTel,'password'=>$request->password])){

            toastr()->error('Vos informations sont invalide');
            return back();
        }
        $user= User::find(Auth::user()->id);
        $user->status='on';
        $user->save();

        return redirect()->route('home.admin');
    }

    public function login(){

        return view('Admin.login');
    }
    public function detailsADeces($id){

        $Models =DemandeDecesModel::find($id);
        if(!$Models){

            toastr()->error('Opération impossible ');
            return back();
        }
        $demandeAll =DocumentAdmin::all();

        return view('Admin.details_deces',[
            'Models'=>$Models,
            'demandeAll'=>$demandeAll
        ]);

    }

    public function detailsActMariage($id){

        $Demande =DemandeMariage::find($id);
        if(!$Demande){

            toastr()->error('Opération impossible ');
            return back();
        }
        $demandeAll =DocumentAdmin::all();

        return view('Admin.details_mariage',[
            'Demande'=>$Demande,
            'demandeAll'=>$demandeAll
        ]);

    }

    public function addDocument(Request $request){

        $request->validate([
                       "titre"=> "required",
                       "document"=> "required|mimes:pdf",
                       "numer_registre"=> "required"
        ]);

        $demande = new DocumentAdmin();
        $demande->titre= $request->input("titre");
        $demande->numer_registre= $request->input("numer_registre");
        $demande->document= $request->file("document")->store('doc','public');
        $demande->save();
        toastr()->info('Document ajouté avec succèss');
        return back();
    }


    public function envoieFileToMailNaissance(Request $request){

        $request->validate([
            'document_id'=>'required',
            'id'=>'required',
            'users_id'=>'required|exists:demandeurs,id'
        ]);

        $document=DocumentAdmin::find($request->document_id);

        $user=Demandeur::find($request->users_id);

        $demandeNaissance=DemandeActeNaissance::find($request->id);
        $demandeNaissance->status='Valider';
        $demandeNaissance->save();
        Mail::to(new UsersFileEmail($document,$user));
        toastr()->info('Information envoyé avec succèss');

        return back();
    }


    public function envoieFileToMailDeces(Request $request){

        $request->validate([
            'document_id'=>'required',
            'id'=>'required',
            'users_id'=>'required|exists:demandeurs,id'
        ]);

        $document=DocumentAdmin::find($request->document_id);

        $user=Demandeur::find($request->users_id);

        $demandeNaissance=DemandeDecesModel::find($request->id);
        $demandeNaissance->status='Valider';
        $demandeNaissance->save();
        Mail::to(new UsersFileEmail($document,$user));
        toastr()->info('Information envoyé avec succèss');

        return back();
    }

    public function envoieFileToMailMariage(Request $request){

        $request->validate([
            'document_id'=>'required',
            'id'=>'required',
            'users_id'=>'required|exists:demandeurs,id'
        ]);

        $document=DocumentAdmin::find($request->document_id);

        $user=Demandeur::find($request->users_id);

        $demandeNaissance=DemandeMariage::find($request->id);
        $demandeNaissance->status='Valider';
        $demandeNaissance->save();
        Mail::to(new UsersFileEmail($document,$user));
        toastr()->info('Information envoyé avec succèss');

        return back();
    }

    public function users(){

        $userAll=User::paginate(5);
        $demandeNaissance=DemandeActeNaissance::count();
        $demandeDeces=DemandeDecesModel::count();
        $demandeMariage=DemandeMariage::count();
        $userConnecte=User::where('status','on')->get();

        return view("Admin.users",compact("userAll","demandeNaissance","demandeMariage",'demandeDeces','userConnecte'));

    }


    public function create(UsersRequest $usersRequest){

        $user =new User();
        $randomString = Str::random(16);
        $user->matricule= 'S'.$randomString.'k';

        $user->name= $usersRequest->nom;
        $user->email= $usersRequest->email;
        $user->tel= $usersRequest->tel;
        $user->password= bcrypt($usersRequest->password);
        $user->profile=$usersRequest->file("profile")->store('profile','public') ? : '';
        $user->save();
        toastr()->success('Utilisateur ajouté avec succèss !');
        return back();
    }
}
