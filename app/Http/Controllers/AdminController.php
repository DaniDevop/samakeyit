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
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class AdminController extends Controller
{
    //



    public function index(){

        $demandeNaissance=DemandeActeNaissance::count();
        $demandeDeces=DemandeDecesModel::count();
        $demandeMariage=DemandeMariage::count();
        return view('admins.home ',[
            'demandeNaissance'=> $demandeNaissance,
            'demandeDeces'=>$demandeDeces,
            'demandeMariage'=>$demandeMariage
        ]);

    }

    public function listesDemande_mariage(){

        $demandeMariage=DemandeMariage::paginate(10);
        return view('admins.mariage.listes',[
            'demandeMariage'=> $demandeMariage
        ]);
    }



    public function listesDemande_naissance(){

        $ModelsDemandeActeNaissance=DemandeActeNaissance::paginate(10);
        return view('admins.naissance.listes',[
            'ModelsDemandeActeNaissance'=> $ModelsDemandeActeNaissance
        ]);
    }

    public function details_mariage(){

        $Demande=DemandeMariage::paginate(10);
        return view('admins.mariage.details',[
            'Demande'=> $Demande
        ]);
    }


    public function details_naissance($id){



        $Models=DemandeActeNaissance::find($id);
        if(!$Models){
            toastr()->error('Erreur dans l envoie des données');
            return back();
        }
        $demandeAll =DocumentAdmin::all();

        return view('admins.naissance.details',[
            'Models'=> $Models,
            'demandeAll'=>$demandeAll
        ]);
    }


    public function listesDemande_deces(){

        $DemandeDecesModel=DemandeDecesModel::paginate(10);
        return view('admins.deces.listes',[
            'DemandeDecesModel'=>$DemandeDecesModel
        ]);
    }

    public function details_deces(){

        $DecesModel=DemandeDecesModel::paginate(10);
        return view('admins.deces.details',[
            'DecesModel'=>$DecesModel
        ]);
    }

    public function update_account(){
        return view('Admin.actions.update_account');
    }

    public function ajout_document(){
        return view("admins.document");
    }


    public function listes_document(){
        $ModelsDemandeActeNaissance =DemandeActeNaissance::paginate(5);
        $DemandeDecesModel =  DemandeDecesModel::paginate(5);
        $DemandeAll =  DemandeMariage::paginate(5);
        return view("Admin.actions.index",[
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

        return view('Admin.actions.details_acte_naissance',[
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


    public function addUsers(){

        return view('admins.user');
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

        toastr()->info('Bienvenue 🖐');

        return redirect()->route('home.admin');
    }

    public function login(){

        return view('Admins.login');
    }
    public function detailsADeces($id){

        $Models =DemandeDecesModel::find($id);
        if(!$Models){

            toastr()->error('Opération impossible ');
            return back();
        }
        $demandeAll =DocumentAdmin::all();

        return view('Admin.actions.details_deces',[
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

        return view('Admin.actions.details_mariage',[
            'Demande'=>$Demande,
            'demandeAll'=>$demandeAll
        ]);

    }


    public function deleteUsers($id){

        $Demande =User::find($id);
        if(!$Demande){

            toastr()->error('Opération impossible ');
            return back();
        }

        if(Auth::user()->id ==$Demande->id){
            toastr()->warning('Etans vous meme connecté vous pouvez pas supprimer votre compte ');
            return back();
        }
        $Demande->delete();

        toastr()->info('Utilisateur supprimer avec succèss ');
      return redirect()->back();

    }

    public function addDocument(Request $request){




        $request->validate([
                       "titre"=> "required",
                       "doc"=> "required|mimes:pdf",
                       "numer_registre"=> "required"
        ],[
            'titre.required'=>'Le titre est requis',
            'doc.mimes'=>'le Document doit etre de type pdf ',
            'numer_registre'=>'Le numéro de registre est requis'
        ]);


        $demande = new DocumentAdmin();
        $demande->titre= $request->input("titre");
        $demande->numer_registre= $request->input("numer_registre");
        $demande->document= $request->file("doc")->store('doc','public');
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


        dd(Mail::to(new UsersFileEmail($document,$user)));
        toastr()->info('Information envoyé avec succèss');

        return back();
    }

    public function users(){

        $userAll=User::paginate(5);
        $demandeNaissance=DemandeActeNaissance::count();
        $demandeDeces=DemandeDecesModel::count();
        $demandeMariage=DemandeMariage::count();
        $userConnecte=User::where('status','on')->get();

        return view("admins.users.listes",compact("userAll","demandeNaissance","demandeMariage",'demandeDeces','userConnecte'));

    }


    public function update_users(){
        return view('admins.update');
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


    public function update_password_admin(Request $usersRequest){

        $usersRequest->validate([
            'password'=>'required',
           'password_confirm'=>'required',
           'id'=>'required|exists:users,id',


        ],[
            'password.required'=>'Le mots de passe est requis',
           'password_confirm.required'=>'Le mot de passe de confirmation est requis',


        ]);
        $user =User::find($usersRequest->id);
        if(!$user){
            toastr()->error('Une erreur c est produite ');
            return back();
        }

        if($usersRequest->password != $usersRequest->password_confirm){
            toastr()->error('Les mots de passes sont différents ');
            return back();
        }

        $user->password= Hash::make($usersRequest->password) ;

        $user->save();
        toastr()->success('Informations mise à jour avec succés !');
        return back();
    }


    public function update_account_users(Request $usersRequest){

        $usersRequest->validate([
            'nom'=>'required',
           'prenom'=>'required',
           'email'=>'required|email',
           'tel'=>'required',
           'profile'=>'nullable|image:png,jpg,jpeg',
           'id'=>'required|exists:users,id',


        ],[
            'nom.required'=>'Le nom est requis dans le formulaire',
           'prenom.required'=>'Le prenom est requis pour l inscription',
           'email.email'=>'L email doit etre du bon format 📨',
           'tel.required'=>'Le téléphone est requis dans le formulaire',
           'profile.image'=>'Le profile doit etre de type image ex : jpg,png,jpeg',

        ]);
        $user =User::find($usersRequest->id);
        if(!$user){
            toastr()->error('Une erreur c est produite ');
            return back();
        }

        $user->name= $usersRequest->nom;
        $user->prenom= $usersRequest->prenom;
        $user->email= $usersRequest->email;
        $user->tel= $usersRequest->tel;

        if($usersRequest->hasFile('profile')){
            $user->profile=$usersRequest->file("profile")->store('profile','public');

        }

        $user->save();
        toastr()->success('Informations mise à jour avec succés !');
        return back();
    }


    public function update_password_reset_admin(Request $usersRequest){

        $usersRequest->validate([
            'password'=>'required',
            'password_confirm'=>'required',
           'emailOrTel'=>'required',


        ],[
            'password.required'=>'Le mots de passe est requis',
           'password_confirm.required'=>'Le mot de passe de confirmation est requis',
           'emailOrTel.required'=>'L email est requis dans le formulaire',
        ]);
        $user =User::where('email',$usersRequest->emailOrTel)->orWhere('tel',$usersRequest->emailOrTel)->first();
        if(!$user){
            toastr()->error('Une erreur c est produite ');
            return back();
        }

        if($usersRequest->password != $usersRequest->password_confirm){
            toastr()->error('Les mots de passes sont différents ');
            return back();
        }

        $user->password= Hash::make($usersRequest->password) ;

        $user->save();
        toastr()->success('Informations mise à jour avec succés !');
        return redirect()->route('login.admin');
    }


    public function adminPasswordReset(){

        return view('admins.reset_password');
    }

}
