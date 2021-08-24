<?php include_once 'Master_Data/header.php' ?>



<html lang="fr"> 

<head>    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mon profil</title>
</head>

<body>
      <h2>Voici le profil de <?= $afficher_profil['nom'] . $afficher_profil['prenom']; ?></h2>
      <div>Quelques informations sur vous : </div>
        <ul>
            <li>Votre id est : <?= $afficher_profil['id'] ?></li>
              <li>Votre mail est : <?= $afficher_profil['mail'] ?></li>
              <li>Votre compte a été crée le : <?= $afficher_profil['date_creation_compte'] ?></li>
            </ul>

    <div>
        <label name="nouveauSport">Ajouter un sport si votre sport n'apparait pas dans la liste</label>
        <input name="nouveauSport" class="form-control">
        <br>
        <button type="submit" class="btn bouton">Ajouter le sport</button>
        <?php
        if (isset($_POST['ajout'])) {
            $req_sport = 'INSERT INTO `sports` (`id`, `nom`) VALUES (NULL, "' . $_POST['nouveauSport'] . "')";
            if ($connexion->query($req_sport)) {
                echo "<div> DONNEE INSEREES dans la table sprt </div>";
            }
        }
        ?>
    </div>
</body>

</html>

<?php
session_start();
include('Master_Data/database.php');
// On récupère les informations de l'utilisateur connecté
$afficher_profil = $DB->query(
    "SELECT * 
    FROM utilisateur 
    WHERE id = ?",
    array($_SESSION['id'])
);
$afficher_profil = $afficher_profil->fetch();
?>

<?php include_once 'Master_Data/footer.php' ?>