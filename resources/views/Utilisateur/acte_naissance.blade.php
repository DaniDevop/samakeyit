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
<a href="{{route('acte_naissance.users')}}"><i class="fa fa-fw fa-home"></i> Demande d'acte de naissance</a>
  <a href="{{route('acte_mariage.users')}}"><i class="fa fa-fw fa-wrench"></i> Acte de mariage</a>
  <a href="{{route('actes_deces.users')}}"><i class="fa fa-fw fa-user"></i> Acte de décès</a>
  <a href="{{route('deconnection.users')}} "><i class="fa fa-fw fa-envelope"></i> Déconnexion</a>
</div>

<div class="main">

  <div class="container">
        <h1>Formulaire Acte de Naissance</h1>
        <button id="afficherFormulaire">Acte de Naissance</button>
        <form id="acteNaissanceForm" style="display: none;">
            <label for="numeroRegistre">Numéro de registre:</label><br>
            <input type="text" id="numeroRegistre" name="numeroRegistre"><br>

            <label for="nomPrenomPere">Nom et prénom du père:</label><br>
            <input type="text" id="nomPrenomPere" name="nomPrenomPere"><br>

            <label for="nomPrenomMere">Nom et prénom de la mère:</label><br>
            <input type="text" id="nomPrenomMere" name="nomPrenomMere"><br>

            <label for="anneeNaissance">Année de naissance:</label><br>
            <input type="text" id="anneeNaissance" name="anneeNaissance"><br>

            <label for="nomDepartement">Nom de votre département:</label><br>
            <input type="text" id="nomDepartement" name="nomDepartement"><br>

            <input type="submit" value="Envoyer">
        </form>
        <div id="message" style="display: none;"></div>
    </div>

    <script>
        document.getElementById("afficherFormulaire").addEventListener("click", function() {
            document.getElementById("acteNaissanceForm").style.display = "block";
        });

        document.getElementById("acteNaissanceForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Empêche la soumission par défaut du formulaire

            // Récupérer les valeurs des champs
            var numeroRegistre = document.getElementById("numeroRegistre").value;
            var nomPrenomPere = document.getElementById("nomPrenomPere").value;
            var nomPrenomMere = document.getElementById("nomPrenomMere").value;
            var anneeNaissance = document.getElementById("anneeNaissance").value;
            var nomDepartement = document.getElementById("nomDepartement").value;

            // Afficher le message
            var message = document.getElementById("message");
            message.innerHTML = "Votre demande a été envoyée avec succès.";
            message.style.display = "block";

            // Réinitialiser le formulaire après 2 secondes
            setTimeout(function() {
                document.getElementById("acteNaissanceForm").reset();
                message.style.display = "none";
                document.getElementById("acteNaissanceForm").style.display = "none";
            }, 2000);
        });
    </script></div>

</body>
</html>
