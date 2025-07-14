<?php
require("connection.php");
function get_liste_objet(){
    $sql="SELECT nom_objet,id_objet FROM PF_objet";
    $resultat = mysqli_query(bdd(), $sql);
    $tab = [];
    while ($donnees = mysqli_fetch_assoc($resultat)) {
        $tab[] = $donnees;
    }
    return $tab;
}


function liste_emprunte(){
    $sql="SELECT id_objet,date_retour FROM v_objet_emprunt WHERE date_retour>NOW() AND date_retour is not null";
    $resultat = mysqli_query(bdd(), $sql);
    $tab = [];
    while ($donnees = mysqli_fetch_assoc($resultat)) {
        $tab[] = $donnees;
    }
    return $tab;
}

function liste_efa_niverina(){
    $sql="SELECT id_objet,date_retour FROM v_objet_emprunt WHERE date_retour<NOW() OR date_retour is null";
    $resultat = mysqli_query(bdd(), $sql);
    $tab = [];
    while ($donnees = mysqli_fetch_assoc($resultat)) {
        $tab[] = $donnees;
    }
    return $tab;
}



