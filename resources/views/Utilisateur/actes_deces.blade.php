
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
        <form id="acteDecesForm" onsubmit="processPayment(event)">
      <div>
        <label for="numero_registre">Numéro du registre :</label><br>
        <input type="text" id="numero_registre" name="numero_registre" required>
      </div><br>

      <div>
        <label for="centre">Centre :</label><br>
        <input type="text" id="centre" name="centre" required>
      </div><br>

      <div>
        <label for="date_deces">Date du décès :</label><br>
        <input type="date" id="date_deces" name="date_deces" required>
      </div><br>

      <div>
        <label for="lieu_deces">Lieu du décès :</label><br>
        <input type="text" id="lieu_deces" name="lieu_deces" required>
      </div><br>

      <div>
        <label for="sexe">Sexe :</label><br>
        <select id="sexe" name="sexe" required>
          <option value="homme">Homme</option>
          <option value="femme">Femme</option>
        </select>
      </div><br>

      <div>
        <label for="date_naissance">Date de naissance du défunt(e) :</label><br>
        <input type="date" id="date_naissance" name="date_naissance" required>
      </div><br>

      <div>
        <label for="nom_pere">Nom du père du défunt(e) :</label><br>
        <input type="text" id="nom_pere" name="nom_pere" required>
      </div><br>

      <div>
        <label for="nom_mere">Nom de la mère du défunt(e) :</label><br>
        <input type="text" id="nom_mere" name="nom_mere" required>
      </div><br>

      <input type="submit" value="Soumettre">
    </form>
        <div id="message" style="display: none;"></div>
    </div>

    <script>
    function processPayment(event) {
      event.preventDefault(); // Empêcher la soumission normale du formulaire

      // Récupérer les données du formulaire
      const formData = new FormData(document.getElementById('acteDecesForm'));
      const data = {};
      formData.forEach((value, key) => {
        data[key] = value;
      });

      // Exemple d'appel à l'API Orange Money (simulé)
      const paymentDetails = {
        amount: 100.00,
        recipient: 'NUMERO_DU_DESTINATAIRE', // Remplacez par le numéro du destinataire réel
        description: 'Paiement pour l\'acte de décès',
      };

      // Remplacez ce bloc par l'appel réel à l'API Orange Money avec fetch ou axios
      fetch('https://www.bing.com/search?q=api+orange+money&form=ANSPH1&refig=e5e8e80e67ea4410bc09e64973d18d9a&pc=U531&pqasv=api+orange+money&pqlth=16&assgl=16&sgcn=api+orange+money&sgtpv=CT&swbcn=7&smvpcn=0&cvid=e5e8e80e67ea4410bc09e64973d18d9a&clckatsg=1&hsmssg=0#', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          // Ajoutez les en-têtes nécessaires comme l'authentification
        },
        body: JSON.stringify(paymentDetails),
      })
      .then(response => response.json())
      .then(data => {
        alert('Paiement effectué avec succès.'); // Message de succès
        document.getElementById('acteDecesForm').reset(); // Réinitialiser le formulaire
      })
      .catch(error => {
        console.error('Erreur lors du paiement:', error);
        alert('Erreur lors du paiement. Veuillez réessayer.'); // Message d'erreur
      });
    }
  </script>
    </div>

</body>
</html>
