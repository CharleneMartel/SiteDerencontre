<?php include_once 'Master_Data/header.php' ?>

<h3 class="Titre">Informations de votre profil</h3>

<?php
try {
    $host = 'localhost';
    $login = 'root';
    $password = '';
    $database = 'bdsitederencontre';
    $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC

    );

    $bdd = new PDO("mysql:host=$host;dbname=$database", $login, $password, $options);

    $information_profil = $bdd->prepare("SELECT `nom`, `prenom`, `ville`, `email`, `sport_pratique`, `niveau` from `utilisateurs` WHERE email = ?");
    $information_profil->execute(array($_COOKIE['email']));

    while ($donnees = $information_profil->fetch()) {
        $nom = htmlspecialchars($donnees['nom']);
        $prenom = htmlspecialchars($donnees['prenom']);
        $ville = htmlspecialchars($donnees['ville']);
        $email = htmlspecialchars($donnees['email']);
        $sport_pratique = htmlspecialchars($donnees['sport_pratique']);
        $niveau = htmlspecialchars($donnees['niveau']);
    }
    $information_profil->closeCursor();
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
if (isset($_COOKIE['email'])) {
?>
    <p> Nom : <input type='text' value='<?php echo htmlspecialchars($nom); ?>' />
    <p> Prénom : <input type='text' name='prenom' value='<?php echo htmlspecialchars($prenom); ?>' />
    <p> Ville : <input type='text' name='ville' value='<?php echo htmlspecialchars($ville); ?>' />
    <p> Adresse mail : <input type='text' name='email' value='<?php echo htmlspecialchars($email); ?>' />
    <p> Sport : <input type='text' name='sport_pratique' value='<?php echo htmlspecialchars($sport_pratique); ?>' />
    <form method="post" action="Pross/modifierSport.php">
        <div style="text-align: left;"> <input type="submit" name="nouveauSport" value="Modifier sport" required></div>
    </form>
    <p> Niveau : <input type='text' name='niveau' value='<?php echo htmlspecialchars($niveau); ?>' />


    <?php
} else {

    echo 'souçi  ';
}


    ?>


    <div style="background-color: #E3CEF6;">
        <h4 class="Titre">Ajouter un sport</h4>
        <form method="post" action="Pross/AjoutSport.php">
            <div class="form"> <input name="sport" class="form-control" required></div>
            <div class="form"> <input type="submit" name="insert" value="Insérer" required></div>
        </form>
    </div>

    <?php include_once 'Master_Data/footer.php' ?>