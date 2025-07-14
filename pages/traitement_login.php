<?php 

 require('../includes/connection.php');

 if(isset($_POST['nom'])&&isset($_POST['mail'])&&isset($_POST['mdp'])&&isset($_POST['dtn'])&&isset($_POST['ville'])&&isset($_POST['genre'])){
$nom=$_POST['nom'];
$mail=$_POST['mail'];
$mdp=$_POST['mdp'];
$dtn=$_POST['dtn'];
$ville=$_POST['ville'];
$genre=$_POST['genre'];


$sql="insert into Membres (Email,Motdepasse,Nom,Date_Naissance) values('%s','%s','%s','%s');";
$resultat=sprintf($sql,$mail,$mdp,$nom,$dtn);
$hafa = mysqli_query(bdd(),$resultat);

header('location: ../pages/login.php');
 }else{
    session_start();
$mail = $_POST['mail'];
$mdp  = $_POST['mdp'];

$sql = "select * from Membres where Email = '$mail' and Motdepasse = '$mdp';";


$resultat = mysqli_query(bdd(), $sql);

$nb_ligne = mysqli_num_rows($resultat);

if ($nb_ligne == 0) {
    header('Location: ../pages/login.php?erreur=1');
} else {
    $ligne = mysqli_fetch_assoc($resultat); 
    $_SESSION['nom'] = $ligne['Nom'];
    $_SESSION['id'] = $ligne['idMembre'];
    header('Location: ../pages/accueil.php');
}
 }
 
 
 ?>
