<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="../reste/style.css">
</head>
<body>
<header class="header">
        <h1>EcoSphere</h1>
    </header>
<div class="container">
<div class="cuteicon1"></div>
<div class="login">
    <form action="traitement_login.php" method="post" class="form-container">
        <h2>Login</h2>
        <p>Email: <input type="email" name="mail"></p>
        <p>Mot de passe: <input type="password" name="mdp"></p>
        <input type="submit" name="connect" value="Se connecter">
    </form>
    <?php 
    if (isset($_GET['erreur'])) { ?>
    <p class="erreur">Email ou mot de passe incorrect </p>
    <?php } ?>
    <div class="create-account">
                <form action="inscription.php" method="post">
                    <input type="submit" name="creer" value="Créer un compte">
                </form>
            </div>

        </div>
        <div class="cuteicon1"></div>
    </div>

    <footer class="footer">
    <p>copyright 2025 My Facebook — Tous droits réservés.</p>
    <div class="footer-links">
        <a href="#">Confidentialité</a>
        <a href="#">Conditions</a>
        <a href="#">Aide</a>
    </div>
</footer>
</body>
</html>
