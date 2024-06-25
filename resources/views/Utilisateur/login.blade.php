<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - SAMAY KEUYITE</title>
    @include('Utilisateur.pages.styles')

</head>
<body>
    <div class="container">
        <h1>Connexion</h1>
        <form id="connexionForm" action="{{route('login.Users')}}" method="POST">
            @csrf
            <label for="email">Email:</label>
            <input type="email" id="email" name="emailOrTel" required><br><br>

            <label for="mot_de_passe">Mot de passe:</label>
            <input type="password" id="mot_de_passe" name="password" required><br><br>

            <button type="submit">Valider</button>
        </form>
    </div>

</body>
</html>
