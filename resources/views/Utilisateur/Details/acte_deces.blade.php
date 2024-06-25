
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

  <div class="container">
        <h1>Formulaire Acte de décès</h1>

        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color: red;">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

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
      <th scope="col">Sexe</th>
      <th scope="col">Centre</th>
    </tr>
  </thead>
  <tbody>


    <tr>
    <th > {{$DecesModel->numero_registre}}  </th>

      <th scope="row"> {{$DecesModel->date_naissance}}  </th>
      <td>{{$DecesModel->nom_pere}}</td>
      <td>{{$DecesModel->nom_mere}}</td>
      <td>{{$DecesModel->date_deces}}</td>
      <td>{{$DecesModel->lieu_deces}}</td>
      <td>{{$DecesModel->sexe}}</td>
      <td>{{$DecesModel->centre}}</td>

    </tr>


  </tbody>
</table>
</div>
        <form id="acteDecesForm" action="{{route('deces.update.users')}}" method="POST">
      <div>
        @csrf
        <label for="numero_registre">Numéro du registre :</label><br>
        <input type="text" id="numero_registre" name="numero_registre" value="{{$DecesModel->numero_registre}}" >
      </div><br>

      <div>
        <label for="centre">Centre :</label><br>
        <input type="text" id="centre" name="centre"  value="{{$DecesModel->centre}}">
      </div><br>

      <div>
        <label for="date_deces">Date du décès :</label><br>
        <input type="date" id="date_deces" name="date_deces" value="{{$DecesModel->date_deces}}">
      </div><br>

      <div>
        <label for="lieu_deces">Lieu du décès :</label><br>
        <input type="text" id="lieu_deces" name="lieu_deces" value="{{$DecesModel->lieu_deces}}" >
      </div><br>

      <div>
        <label for="sexe">Sexe :</label><br>
        <select id="sexe" name="sexe" >
            <option value="{{$DecesModel->sexe}}">{{$DecesModel->sexe}}</option>
          <option value="homme">Homme</option>
          <option value="femme">Femme</option>
        </select>
      </div><br>

      <div>
        <label for="date_naissance">Date de naissance du défunt(e) :</label><br>
        <input type="date" id="date_naissance" name="date_naissance" value="{{$DecesModel->date_naissance}}">
      </div><br>

      <div>
        <label for="nom_pere">Nom du père du défunt(e) :</label><br>
        <input type="text" id="nom_pere" name="nom_pere" value="{{$DecesModel->nom_pere}}" >
      </div><br>

      <div>
        <label for="nom_mere">Nom de la mère du défunt(e) :</label><br>
        <input type="text" id="nom_mere" name="nom_mere"  value="{{$DecesModel->nom_mere}}">
      </div><br>
      <input type="hidden" id="nom_mere" name="id"  value="{{$DecesModel->id}}">

      <input type="submit" value="Soumettre">
    </form>
        <div id="message" style="display: none;"></div>
    </div>


    </div>

</body>
</html>
