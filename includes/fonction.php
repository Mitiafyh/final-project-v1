<?php
require("connection.php");
function get_liste_objet(){
    $sql="SELECT nom_object FROM PF_objet";
    $resultat = mysqli_query(bdd(), $sql);
    $tab = [];
    while ($donnees = mysqli_fetch_assoc($resultat)) {
        $tab[] = $donnees;
    }
    return $tab;
}

