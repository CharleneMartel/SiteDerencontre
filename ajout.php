<?php include_once 'includes/header.php' ?>
<div class="container form">
    <h2>Bienvenue ! </h2>
    <h4>Veuiller saisir vos informations ci dessous :</h4>
    <form class="" method="post" action="process/inscription_process.php" enctype="multipart/form-data">
        <div class="">
            <label name="nom">Nom</label>
            <input name="nom" class="form-control" required>

            <label name="prenom">PrÃ©nom</label>
            <input name="prenom" class="form-control" placeholder="Mathieu" required>

            <label name="email">Adresse e-mail</label>
            <input type="email" name="email" class="form-control" placeholder="nom@exemple.com" required>

            <label name="mdp">Mot de passe</label>
            <input type="password" name="mdp" class="form-control" placeholder="Mot de passe" required>

            <label name="ville">Ville</label>
            <input name="ville" class="form-control" placeholder="Paris" required>

            <label name="sport">Sport pratiqué</label>
            <select class="form-control" name="sportPratique">
                <?php
                // $sql = "SELECT `nom` from sports;";
                // foreach ($db->query($sql) as $ligne) {
                //     echo "<option>" . str_replace("_", " ", $ligne['nom']) . "</option>";
                // }
                ?>
            </select>

            <label name=" niveau">Niveau</label>
            <select class="form-control" name="niveau" required>
                <?php
                //$sql = "SELECT `niveau` from niveaux_sportifs;";
                //foreach ($db->query($sql) as $ligne) {
                //     echo "<option>" . $ligne['niveau'] . "</option>";
                // }
                ?>
            </select>

            <label name="nouveauSport">Ajouter un sport</label>
            <small class="text-muted">Si votre sport pratiquÃ© n'est pas indiquÃ©</small>
            <input name="nouveauSport" class="form-control">
            <button type="submit" class="btn bouton">S'inscrire</button>

            <small class="text-muted">Si vous avez déjà  un compte,
                <a href="connexion.php">cliquez ici</a>.
            </small>
        </div>
</div>
</form>
</div>
<?php include_once 'includes/footer.php' ?>