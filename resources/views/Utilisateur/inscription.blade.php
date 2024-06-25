<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - SAMAY KEUYITE</title>
    @include('Utilisateur.pages.styles')

</head>
<body>
    <div class="container">
        <h1>Inscription</h1>
        <form>
            <label for="nom_prenom">Nom et Prénom:</label>
            <input type="text" id="nom_prenom" name="nom_prenom" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="num_carte_id">Numéro de carte d'identité nationale:</label>
            <input type="text" id="num_carte_id" name="num_carte_id" required><br><br>

            <label for="num_telephone">Numéro de téléphone:</label>
            <input type="tel" id="num_telephone" name="num_telephone" required><br><br>

            <label for="mot_de_passe">Mot de passe:</label>
            <input type="password" id="mot_de_passe" name="mot_de_passe" required><br><br>

            <button type="submit">Terminer</button>
        </form>
    </div>
</body>
</html>
