<?php include_once 'Master_Data/header.php' ?>
<div class="container form">
    <h2 class="Titre">Insrciption ! </h2>
    <div>
        <small class="text-muted">Si vous avez déjà un compte,
            <a href="Page-connexion.php">cliquez ici</a>.
        </small>
    </div>

    <h4>Sinon veuiller saisir vos informations ci dessous :</h4>
    <form method="post" action="Pross/ajout.php" enctype="multipart/form-data">
        <div>
            <div>
                <label name="nom">Nom</label>
                <input name="nom" class="form-control" required>
            </div>
            <div>
                <label name="prenom">Prénom</label>
                <input name="prenom" class="form-control" required>
            </div>
            <div>
                <label name="email">Mail </label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div>
                <label name="mdp">Mot de passe</label>
                <input type="password" name="mdp" class="form-control" required>
            </div>
            <div>
                <label name="ville">Ville</label>
                <input name="ville" class="form-control" required>
            </div>
            <div>
                <label name="sport">Sport pratiqué (*Si votre sport n'apparait pas, vous pourez le modifier dans votre profil par la suite)</label>
                <select class="form-control" name="sportPratique">
                    <?php
                    $sql = "SELECT `nom` from sports;";
                    foreach ($db->query($sql) as $ligne) {
                        echo "<option>" . str_replace("_", " ", $ligne['nom']) . "</option>";
                    }
                    ?>
                </select>
            </div>
            <div>
                <label name="niveau">Niveau</label>
                <select class="form-control" name="niveau" required>
                    <?php
                    $sql = "SELECT `niveau` from niveaux_sportifs;";
                    foreach ($db->query($sql) as $ligne) {
                        echo "<option>" . $ligne['niveau'] . "</option>";
                    }
                    ?>
                </select>
            </div>

        </div>

        <br>
        <div style="text-align: center;">
            <button type="submit" class="btn bouton">S'inscrire</button>
        </div>

</div>

</form>
</div>
<?php include_once 'Master_Data/footer.php' ?>