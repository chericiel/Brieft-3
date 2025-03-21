<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Inscription</title>
    <!-- Inclusion de Bootstrap 5 via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">
    
    <div class="card shadow p-4" style="width: 100%; max-width: 450px;">
        <h2 class="text-center mb-4">Inscription</h2>
        <form action="traitement_inscription.php" method="POST">
            <!-- Champ Nom d'utilisateur -->
            <div class="mb-3">
                <label for="username" class="form-label">Nom d'utilisateur :</label>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>
            <!-- Champ Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Adresse Email :</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <!-- Champ Mot de passe -->
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe :</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <!-- Champ Confirmation du mot de passe -->
            <div class="mb-3">
                <label for="confirm_password" class="form-label">Confirmer le mot de passe :</label>
                <input type="password" id="confirm_password" name="confirm_password" class="form-control" required>
            </div>
            <!-- Case à cocher -->
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="terms" required>
                <label class="form-check-label" for="terms">Client</label>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="terms" required>
                <label class="form-check-label" for="terms">J'accepte les <a href="#">termes et conditions</a></label>
            </div>
            <!-- Bouton d'inscription -->
            <button type="submit" class="btn btn-primary w-100">S'inscrire</button>
        </form>
        <p class="text-center mt-3">Déjà inscrit ? <a href="login.php">Se connecter</a></p>
    </div>

    <!-- Inclusion de Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
