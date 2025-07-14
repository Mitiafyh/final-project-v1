<?php 
require("../includes/fonction.php");
$liste=get_liste_objet();
$liste_emprunt=liste_emprunte();
$etat=false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <h1>Liste objet</h1>
    <ul>
<?php foreach ($liste as $ls) { ?>
    <li>
        <?= $ls['nom_objet']?> 
        <?php 
        $est_emprunte = false;
        foreach ($liste_emprunt as $ls_e) { 
            if ($ls['id_objet'] == $ls_e['id_objet']) {
                echo $ls_e['date_retour'];
                $est_emprunte = true;
                break;
            }
        }
        if (!$est_emprunte) { ?>
            <button>emprunter</button>
       <?php } ?>
        
    </li>
<?php } ?>
</ul>
</body>
</html>