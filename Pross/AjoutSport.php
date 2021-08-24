<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "../Master_Data/database.php";
//Valeurs
$sport = $_POST['sport'];

//On insère les données reçues
$sql = $db->prepare("
            INSERT INTO `sports` ( `nom`)
            VALUES(:sport)");
$sql->bindParam(':sport', $sport);
$sql->execute();

//On renvoie l'utilisateur vers la page de remerciement
if ($sql->execute()) {
    header("Location:../profil.php");
} else {
    exit('Erreur');
}
