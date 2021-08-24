<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "../Master_Data/database.php";
//Valeurs

$sportPratique = $_POST['sportPratique'];
$niveau = $_POST['niveau'];
$nouveauSport = $_POST['nouveauSport'];


$requete = $db->prepare("SELECT `id` FROM `utilisateurs` WHERE `email` = $email");
$requete->execute();
$resultat = $requete->fetchAll();

echo $resultat[0];


//On insère les données reçues
$sql = $db->prepare(
    "UPDATE `utilisateurs` SET  `sport_pratique` = :sport, `niveau` = :niveau) WHERE `id` = $resultat"
);
$sql->bindParam(':sport', $sport);
$sql->execute();

//On renvoie l'utilisateur vers la page de remerciement
if ($sql->execute()) {
    header("Location:../profil.php");
} else {
    exit('Erreur');
}
