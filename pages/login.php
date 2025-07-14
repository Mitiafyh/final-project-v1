<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<header class="header">
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

  
</body>
</html>
