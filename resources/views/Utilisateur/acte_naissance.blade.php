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
  <a href="{{route('menu.users')}}"><i class="bi bi-house-door"></i> Accueil</a>
  <a href="{{route('acte_naissance.users')}}"><i class="bi bi-file-earmark-person"></i> Demande d'acte de naissance</a>
  <a href="{{route('acte_mariage.users')}}"><i class="bi bi-file-earmark-heart"></i> Acte de mariage</a>
  <a href="{{route('actes_deces.users')}}"><i class="bi bi-file-earmark-excel"></i> Acte de décès</a>
  <a href="{{route('deconnection.users')}}"><i class="bi bi-box-arrow-right"></i> Déconnexion</a>
</div>


<div class="main">

  <div class="container">
       
        <div id="message" style="display: none;"></div>
    </div>


    </div>

</body>
</html>
