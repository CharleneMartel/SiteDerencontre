<?php include_once 'Master_Data/header.php' ?>


<body>
    <title>Mon profil</title>
      <h2>Voici le profil de <?= $afficher_profil['nom'] . $afficher_profil['prenom']; ?></h2>
        <div>Quelques informations sur vous : </div>
        <ul>
              <li>Votre nom est : <?= $afficher_profil['nom'] ?></li>
              <li>Votre mail est : <?= $afficher_profil['mail'] ?></li>
              <li>Votre compte a été crée le : <?= $afficher_profil['date_creation_compte'] ?></li>
            </ul>
    <?php
    session_start();
    include('Master_Data/database.php');
    // S'il n'y a pas de session alors on ne va pas sur cette page
    if (!isset($_SESSION['nom'])) {
        header('Location: index.php');
        exit;
    }
    // On récupère les informations de l'utilisateur connecté
    $afficher_profil = $DB->query(
        "SELECT * 
    FROM utilisateurs 
    WHERE nom = ?",
        array($_SESSION['nom'])
    );

    $afficher_profil = $afficher_profil->fetch();
    ?>
    <div>
        <label name="nouveauSport">Ou ajouter un sport si votre sport n'apparait pas dans la liste</label>
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
    <?php include_once 'Master_Data/footer.php' ?>