
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
        <h1>Formulaire Acte de mariage</h1>
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
  <h4>Demande d acte de Mariage </h4>
  <table class="table">
  <thead>
    <tr>
    <th scope="col">Numéro-registre</th>
      <th scope="col">Centre</th>
      <th scope="col">Date</th>
      <th scope="col">Lieu</th>
      <th scope="col">Regime</th>
      <th scope="col">Date-Marie</th>
      <th scope="col">Date-Femme</th>
    </tr>
  </thead>
  <tbody>


    <tr>
      <th scope="row"> {{$Demande->numero_registre_mariage}} </th>
      <td colspan="2">{{$Demande->centre}}</td>
      <td>{{$Demande->date_mariage}}</td>
      <td>{{$Demande->regime_matrimonial}}</td>
      <td>{{$Demande->date_naissance_marie}}</td>
      <td>{{$Demande->date_naissance_mariee}}</td>
    </tr>

  </tbody>
</table>
</div>
        <form id="acteNaissanceForm" action="{{route('update.ActeMariages.app')}}" method="POST">
            @csrf
      <div>
        <label for="numero_registre_mariage">Numéro du registre de mariage :</label><br>
        <input type="text" id="numero_registre_mariage" name="numero_registre_mariage" value="{{$Demande->numero_registre_mariage}}" >
      </div><br>

      <div>
        <label for="centre">Centre :</label><br>
        <input type="text" id="centre" name="centre" value="{{$Demande->centre}}" >
      </div><br>

      <div>
        <label for="date_mariage">Date du mariage :</label><br>
        <input type="date" id="date_mariage" name="date_mariage" value="{{$Demande->date_mariage}}" >
      </div><br>

      <div>
        <label for="lieu_mariage">Lieu du mariage :</label><br>
        <input type="text" id="lieu_mariage" name="lieu_mariage" value="{{$Demande->lieu_mariage}}" >
      </div><br>

      <div>
        <label for="date_naissance_marie">Date de naissance du marié :</label><br>
        <input type="date" id="date_naissance_marie" name="date_naissance_marie" value="{{$Demande->date_naissance_marie}}">
      </div><br>

      <div>
        <label for="date_naissance_mariee">Date de naissance de la mariée :</label><br>
        <input type="date" id="date_naissance_mariee" name="date_naissance_mariee"  value="{{$Demande->date_naissance_mariee}}">
      </div><br>

      <div>
        <label for="regime_matrimonial">Régime matrimonial :</label><br>
        <input type="text" id="regime_matrimonial" name="regime_matrimonial" value="{{$Demande->regime_matrimonial}}" >
      </div><br>

      <div>
        <label for="polygamie_monogamie">Polygamie ou monogamie :</label><br>
        <select id="polygamie_monogamie" name="polygamie_monogamie" >
            <option value="{{$Demande->polygamie_monogamie}}">{{$Demande->polygamie_monogamie}}</option>
          <option value="monogamie">Monogamie</option>
          <option value="polygamie">Polygamie</option>
        </select>
      </div><br>
      <input type="hidden" id="regime_matrimonial" name="id" value="{{$Demande->id}}" >

      <input type="submit" value="Soumettre">
    </form>
        <div id="message" style="display: none;"></div>
    </div>


    </div>

</body>
</html>
