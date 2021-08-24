<?php
require_once '../includes/database.php';
$nouveauSport = $_POST['nouveauSport'];

//On insère les données reçues
$sql = $db->prepare("
            UPDATE `utilisateurs` SET  `sport_pratique` = :nouveauSport,) ");
$sql->bindParam(':nouveauSport', $nouveauSport);
$sql->execute();

//On renvoie l'utilisateur vers la page de remerciement
if ($sql->execute()) {
    header("Location:../profil.php");
} else {
    exit('Erreur');
}
