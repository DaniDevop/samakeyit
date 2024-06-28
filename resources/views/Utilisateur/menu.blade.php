<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
<style>
body {
  font-family: "Lato", sans-serif;
}

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
  margin-left: 260px; /* Ajuste la marge gauche pour correspondre à la nouvelle largeur de la sidebar */
  padding: 20px; /* Ajoute un padding pour espacer le contenu du bord */
}

.table-container {
  padding-top: 70px;
  margin: auto;
  max-width: 90%; /* Limite la largeur maximale des tableaux */
}

.table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 20px;
}

.table th,
.table td {
  padding: 12px 15px;
  text-align: left;
  border: 1px solid #ddd;
}

.table th {
  background-color: #007bff; /* Couleur de fond pour les en-têtes de tableau */
  color: #ffffff;
}

.table tbody tr:nth-child(even) {
  background-color: #f9f9f9; /* Couleur de fond pour les lignes paires */
}

.table tbody tr:hover {
  background-color: #f1f1f1; /* Couleur de fond au survol */
}

.table .btn-info {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

@media screen and (max-height: 450px) {
  .sidebar {
    padding-top: 15px;
  }
  .sidebar a {
    font-size: 18px;
  }
}
</style>
@include('Utilisateur.pages.styles')

</head>
<body>

<div class="sidebar">
  <a href="{{route('menu.users')}}"><i class="bi bi-house-door"></i> Accueil</a>
  <a href="{{route('acte_naissance.users')}}"><i class="bi bi-file-earmark-person"></i> Demande d'acte de naissance</a>
  <a href="{{route('acte_mariage.users')}}"><i class="bi bi-file-earmark-heart"></i> Acte de mariage</a>
  <a href="{{route('actes_deces.users')}}"><i class="bi bi-file-earmark-excel"></i> Acte de décès</a>
  <a href="{{route('deconnection.users')}}"><i class="bi bi-box-arrow-right"></i> Déconnexion</a>
</div>

<div class="main">
  <div class="table-container">
    <h4>Demande d'acte de naissance</h4>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Numéro-registre</th>
          <th scope="col">Nom père</th>
          <th scope="col">Nom mère</th>
          <th scope="col">Année de naissance</th>
          <th scope="col">Status</th>
          <th scope="col">Details</th>
        </tr>
      </thead>
      <tbody>
        @foreach($ModelsDemandeActeNaissance as $Models)
        @if($Models->status == 'En-cours')
        <tr>
          <th scope="row">{{ $Models->numero_registe }}</th>
          <td>{{ $Models->nom_pere }}</td>
          <td>{{ $Models->nom_mere }}</td>
          <td>{{ $Models->annee_de_naissance }}</td>
          <td>{{ $Models->status }}</td>
          <td>
            <a href="{{ route('details.ActeNaissance', ['id' => $Models->id]) }}" class="btn btn-info">
              <i class="bi bi-eye"></i>
            </a>
          </td>
        </tr>
        @endif
        @endforeach
      </tbody>
    </table>
  </div>

  <div class="table-container">
    <h4>Demande d'acte de décès</h4>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Numéro-registre</th>
          <th scope="col">Nom père</th>
          <th scope="col">Nom mère</th>
          <th scope="col">Date du décès</th>
          <th scope="col">Lieu du décès</th>
          <th scope="col">Status</th>
          <th scope="col">Details</th>
        </tr>
      </thead>
      <tbody>
        @foreach($DemandeDecesModel as $DecesModel)
        @if($DecesModel->status == 'En-cours')
        <tr>
          <th scope="row">{{ $DecesModel->numero_registre }}</th>
          <td>{{ $DecesModel->nom_pere }}</td>
          <td>{{ $DecesModel->nom_mere }}</td>
          <td>{{ $DecesModel->date_deces }}</td>
          <td>{{ $DecesModel->lieu_deces }}</td>
          <td>{{ $DecesModel->status }}</td>
          <td>
            <a href="{{ route('details.Deces', ['id' => $DecesModel->id]) }}" class="btn btn-info">
              <i class="bi bi-eye"></i>
            </a>
          </td>
        </tr>
        @endif
        @endforeach
      </tbody>
    </table>
  </div>

  <div class="table-container">
    <h4>Demande d'acte de mariage</h4>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Numéro-registre</th>
          <th scope="col">Centre</th>
          <th scope="col">Date</th>
          <th scope="col">Lieu</th>
          <th scope="col">Régime</th>
          <th scope="col">Status</th>
          <th scope="col">Details</th>
        </tr>
      </thead>
      <tbody>
        @foreach($DemandeMariage as $Demande)
        @if($Demande->status != 'Valider')
        <tr>
          <th scope="row">{{ $Demande->numero_registre_mariage }}</th>
          <td>{{ $Demande->centre }}</td>
          <td>{{ $Demande->date_mariage }}</td>
          <td>{{ $Demande->lieu_mariage }}</td>
          <td>{{ $Demande->regime_matrimonial }}</td>
          <td>{{ $Demande->status }}</td>
          <td>
            <a href="{{ route('details.Mariage', ['id' => $Demande->id]) }}" class="btn btn-info">
              <i class="bi bi-eye"></i>
            </a>
          </td>
        </tr>
        @endif
        @endforeach
      </tbody>
    </table>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
