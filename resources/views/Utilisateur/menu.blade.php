<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif;}

.sidebar {
  height: 100%;
  width: 250px; /* Agrandit la largeur de la sidebar */
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #007bff; /* Change la couleur de fond en bleu */
  overflow-x: hidden;
  padding-top: 16px;
}

.sidebar a {
  padding: 10px 15px; /* Ajuste le padding pour les liens */
  text-decoration: none;
  font-size: 20px;
  color: #ffffff; /* Change la couleur du texte en blanc */
  display: block;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 250px; /* Ajuste la marge gauche pour correspondre à la nouvelle largeur de la sidebar */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
@include('Utilisateur.pages.styles')

</head>
<body>

<div class="sidebar">
<a href="{{route('menu.users')}}"><i class="fa fa-fw fa-home"></i> Acceuil</a>

<a href="{{route('acte_naissance.users')}}"><i class="fa fa-fw fa-home"></i> Demande d'acte de naissance</a>
  <a href="{{route('acte_mariage.users')}}"><i class="fa fa-fw fa-wrench"></i> Acte de mariage</a>
  <a href="{{route('actes_deces.users')}}"><i class="fa fa-fw fa-user"></i> Acte de décès</a>
  <a href="{{route('deconnection.users')}} "><i class="fa fa-fw fa-envelope"></i> Déconnexion</a>
</div>


<div class="main">
  <h4>Demande d acte de naissance </h4>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">numéro-registre</th>
      <th scope="col">nom_pere</th>
      <th scope="col">nom_mere</th>
      <th scope="col">nannee_de_naissance</th>
      <th scope="col">Status</th>
      <th scope="col">Details</th>
    </tr>
  </thead>
  <tbody>
    @foreach($ModelsDemandeActeNaissance as $Models)
    <tr>
      <th scope="row"> {{$Models->numero_registe}} </th>
      <td>{{$Models->nom_pere}}</td>
      <td>{{$Models->nom_mere}}</td>
      <td>{{$Models->annee_de_naissance}}</td>
      <td>{{$Models->status}}</td>
      <td> <a href="#" class="btn btn-info"><i class="bi bi-eye"></i></a> </td>
    </tr>
     @endforeach
  </tbody>
</table>
</div>


<div class="main">
  <h4>Demande d acte de deces</h4>
  <table class="table">
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

    <tr>
    <th > {{$DecesModel->numero_registre}}  </th>

      <th scope="row"> {{$DecesModel->date_naissance}}  </th>
      <td>{{$DecesModel->nom_pere}}</td>
      <td>{{$DecesModel->nom_mere}}</td>
      <td>{{$DecesModel->date_deces}}</td>
      <td>{{$DecesModel->lieu_deces}}</td>
      <td>{{$DecesModel->status}}</td>

      <td> <a href="#" class="btn btn-info"><i class="bi bi-eye"></i></a> </td>
    </tr>
    @endforeach

  </tbody>
</table>
</div>

<div class="main">
  <h4>Demande d acte de Mariage </h4>
  <table class="table">
  <thead>
    <tr>
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

  @foreach(   $DemandeMariage as $Demande  )
    <tr>
      <th scope="row"> {{$Demande->numero_registre_mariage}} </th>
      <td colspan="2">{{$Demande->centre}}</td>
      <td>{{$Demande->date_mariage}}</td>
      <td>{{$Demande->regime_matrimonial}}</td>
      <td>{{$Demande->status}}</td>
      <td> <a href="#" class="btn btn-info"><i class="bi bi-eye"></i></a> </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</body>
</html>
