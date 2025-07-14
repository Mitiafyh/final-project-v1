<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body class="inscription-background">
<div class="inscription-wrapper">
        <form action="traitement_login.php" method="post" class="inscription-card">
            <p class="subtitle">Créez votre compte gratuitement</p>

            <label>Nom</label>
            <input type="text" name="nom" required>

            <label>Email</label>
            <input type="email" name="mail" required>

            <label>Mot de passe</label>
            <input type="password" name="mdp" required>

            <label>Genre</label>
            <select name="genre" >
                <option value="M">Masculin</option>
                <option value="F">Feminin</option>
            </select>            

            <label>Date de naissance</label>
            <input type="date" name="dtn" required>

            <label>ville</label>
            <input type="text" name="ville" required>

            <input type="submit" value="Créer mon compte">
        </form>
    </div>
    <!-- <footer class="footer">
        <p>copyright 2025 — On vous souhaite la bienvenue !</p>
        <div class="footer-links">
            <a href="#">Confidentialité</a>
            <a href="#">Conditions</a>
            <a href="#">Support</a>
        </div>
    </footer> -->
</body>
</html>
