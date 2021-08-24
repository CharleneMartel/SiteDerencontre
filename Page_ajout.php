<?php include_once 'Master_Data/header.php' ?>
<style>
    .AjoutSport {
        width: 100%;
    }

    .AjoutSport#gauche {
        position: relative;
        width: 60%;
    }

    .AjoutSport#droite {
        position: relative;
        left: 60%;
        width: 30%;
    }
</style>
<div class="container form">
    <h2>Insrciption ! </h2>
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

            <div class="AjoutSport">
                <div class="gauche">
                    <label name="sport">Sport pratiqué</label>
                    <select class="form-control" name="sportPratique">
                        <?php
                        $sql = "SELECT `nom` from sports;";
                        foreach ($db->query($sql) as $ligne) {
                            echo "<option>" . str_replace("_", " ", $ligne['nom']) . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="droite">
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