<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('Admin.pages.styles')
</head>
<body>
    <div class="content">
    <header>
        <p><label for="menu"><span class="fa fa-bars"></span></label><span class="accueil">Accueil</span></p>

        <div class="search-wrapp">
            <span class="fa fa-search"></span>
            <input type="search" name="" placeholder="recherche">
        </div>

        <div id="dropdown" class="user-wrapp">
            <div>
                <h4>agent  : </br> {{Auth::user()->name}}</h4>
                <small>Admin</small>
            </div>
            <img decoding="async" src="{{asset('storage/'.Auth::user()->profile)}}"width="30" height="30" class="logo-admin">
            <div class="dropdown-content">
                <p>Profil</p>
                <a href="{{route('logout.authentification')}}">Déconnexion</a>
            </div>
        </div>
    </header>
     <center>
     <div class="main">
     <div style="padding-top:70px;"></div>

  <h4>Demande d acte de naissance </h4>
  <table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">numéro-registre</th>
      <td>Nom</td>
      <th scope="col">nom_pere</th>
      <th scope="col">nom_mere</th>
      <th scope="col">nannee_de_naissance</th>
      <th scope="col">Status</th>
      <th scope="col">Details</th>
    </tr>
  </thead>
  <tbody>

    <tr>
        @foreach($ModelsDemandeActeNaissance as $Models)
        @if($Models->status =='En-cours')
      <th scope="row"> {{$Models->numero_registe}} </th>
      <td>{{$Models->nom_pere}}</td>
      <td>{{$Models->nom}}</td>
      <td>{{$Models->nom_mere}}</td>
      <td>{{$Models->annee_de_naissance}}</td>
      <td>{{$Models->status}}</td>
      <td> <a href="{{route('details.Actenaissance.users',['id'=>$Models->id])}}" class="btn btn-info"><i class="bi bi-eye"></i></a> </td>
    </tr>
    @endif
    @endforeach

  </tbody>
</table>
</div>
{{$ModelsDemandeActeNaissance->links()}}



<div class="main">
     <div style="padding-top:70px;"></div>

  <h4>Demande d acte de naissance </h4>
  <table class="table table-striped table-hover">
  <thead>
  <th scope="col">Numéro-registre</th>
      <th scope="col">Centre</th>
      <th scope="col">Date</th>
      <th scope="col">Lieu</th>
      <th scope="col">Regime</th>
      <th scope="col">Status</th>
      <th scope="col">Details</th>
    </tr>
  </thead>
  <tbody>

   @foreach ($DemandeAll as $Demande)

   @if($Demande->status =='En-cours')
    <tr>
      <th scope="row"> {{$Demande->numero_registre_mariage}} </th>
      <td colspan="2">{{$Demande->centre}}</td>
      <td>{{$Demande->date_mariage}}</td>
      <td>{{$Demande->regime_matrimonial}}</td>
      <td>{{$Demande->status}}</td>
      <td> <a href="{{route('details.Acte.Mariage',['id'=>$Models->id])}}" class="btn btn-info"><i class="bi bi-eye"></i></a> </td>
      </tr>
      @endif
      @endforeach

  </tbody>
</table>
</div>
     </center>

     <div class="main">
     <div style="padding-top:70px;"></div>

  <h4>Demande d acte de décès </h4>
  <table class="table table-striped table-hover">
  <thead>
  <tr>
    <th scope="col">Numéro-registre</th>
      <th scope="col">Nom-pere</th>
      <th scope="col">Nom de la mère</th>
      <th scope="col">Date-du-décès</th>
      <th scope="col">Lieu-du-décès</th>
      <th scope="col">Status</th>
      <th scope="col">Details</th>
    </tr>
  </thead>
  <tbody>
  @foreach( $DemandeDecesModel as  $DecesModel)
     @if($DecesModel->status =='En-cours')
    <tr>
    <th > {{$DecesModel->numero_registre}}  </th>

      <th scope="row"> {{$DecesModel->date_naissance}}  </th>
      <td>{{$DecesModel->nom_pere}}</td>
      <td>{{$DecesModel->nom_mere}}</td>
      <td>{{$DecesModel->date_deces}}</td>
      <td>{{$DecesModel->lieu_deces}}</td>
      <td>{{$DecesModel->status}}</td>

      <td> <a href="{{route('detailsA.Deces',['id'=>$DecesModel->id])}}" class="btn btn-info"><i class="bi bi-eye"></i></a> </td>
    </tr>
    @endif
    @endforeach

  </tbody>
</table>
</div>
{{$ModelsDemandeActeNaissance->links()}}

   @include('Admin.pages.sidebar')

</body>
</html>
