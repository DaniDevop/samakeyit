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
        <form id="connexionForm">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="mot_de_passe">Mot de passe:</label>
            <input type="password" id="mot_de_passe" name="mot_de_passe" required><br><br>

            <button type="submit">Valider</button>
        </form>
    </div>

    <script>
        document.getElementById("connexionForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent the form from submitting normally

            // Simulate authentication (replace this with your actual authentication logic)
            var email = document.getElementById("email").value;
            var motDePasse = document.getElementById("mot_de_passe").value;

            // Example of authentication logic
            if (email === "example@example.com" && motDePasse === "password") {
                // Redirect to the page with the menu of Acte de naissance, Acte de mariage, Acte de décès
                window.location.href = "menu.html";
            } else {
                alert("Email ou mot de passe incorrect");
            }
        });
    </script>
</body>
</html>
