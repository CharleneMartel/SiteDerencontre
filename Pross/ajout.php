<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "../Master_Data/database.php";


if (!empty($_POST)) {
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $email = $_POST['email'];
  $mdp = $_POST['mdp'];
  $ville = $_POST['ville'];
  $sportPratique = $_POST['sportPratique'];
  $niveau = $_POST['niveau'];
  $nouveauSport = $_POST['nouveauSport'];

  $err = 0;
  if (empty($nom))
    $err = 1;
  if (empty($prenom))
    $err = 1;
  if (empty($email))
    $err = 1;
  if (empty($mdp))
    $err = 1;
  if (empty($ville))
    $err = 1;
  if (empty($sportPratique) && empty($nouveauSport))
    $err = 1;
  if (empty($niveau))
    $err = 1;

  $sql = $db->prepare("INSERT INTO `utilisateurs` (`nom`, `prenom`, `email`, `mot_de_passe`, `ville`, `sport_pratique`, `niveau`) VALUES (:nom, :prenom, :email, :mdp, :ville, :sportPratique, :niveau)");
  $sql->bindParam(':nom', $nom);
  $sql->bindParam(':prenom', $prenom);
  $sql->bindParam(':email', $email);
  $sql->bindParam(':mdp', $mdp);
  $sql->bindParam(':ville', $ville);

  if (empty($sportPratique) && !empty($nouveauSport)) {
    $sportQuery = $db->prepare("SELECT * FROM `sports` WHERE `nom`= :nom");
    $sportQuery->bindParam(':nom', $nouveauSport);
    $sportQuery->execute();
    $count = $sportQuery->rowCount();

    if ($count == 0) {
      $sqlSport = $db->prepare("INSERT INTO `sports` (`nom`) VALUES (:nouveauSport)");
      $sqlSport->bindParam(':nouveauSport', $nouveauSport);
      $sqlSport->execute();
    }
    $sql->bindParam(':sportPratique', $nouveauSport);
  } else {
    $sql->bindParam(':sportPratique', $sportPratique);
  }

  $sql->bindParam(':niveau', $niveau);

  if ($sql->execute()) {
    header("Location:../index.php");
  } else {
    exit('Erreur bdd');
  }
} else {
  $msg = "Veuillez-remplir tout les champs";
  header("Location:../Page_ajout.php?msg=$msg");
}
