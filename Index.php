<head>
  <link rel="stylesheet" href="Master_Data/style.css" />
</head>
<?php include_once 'Master_Data/header.php' ?>

<div class="Index">
  <div style="width: 100%;">
    <h1 class="Titre">Trouve ton partenaire sportif</h1>
  </div>
  <br>
  <div class="IndexP">
    <p>Tu adores un sport mais tu ne trouves jamais personne pour t'accompagner, ce site est fait pour toi !
      Inscris-toi et recherche dès mainteant ton accolyte préféré</p>
    <img class="imgHome" src="img/Home.jpg">
  </div>
  <br>
  <div class="IndexBtn">
    <?php
    echo "<a class=\"bouton btn\" href=\"Page_ajout.php\" role=\"button\">Inscrivez-vous !</a>";
    ?>
  </div>
  <div class="form-group">
    <label for="sport">Sport existant :</label>
    <select class="form-control col-12" name="sport">
      <option value="">Tous</option>
      <?php
      $sql = "SELECT `nom` from sports;";
      foreach ($db->query($sql) as $ligne) {
        echo "<option value=" . $ligne['nom'] . ">" . str_replace("_", " ", $ligne['nom']) . "</option>";
      }
      ?>
    </select>
  </div>

  <div>
    <div>
      <label name="nouveauSport">Ajouter un sport si votre sport n'apparait pas dans la liste</label>
    </div>
    <div>
      <input name="nouveauSport" class="form-control">
    </div>
    <br>
    <div style="text-align: center;">
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

</div>

<?php include_once 'Master_Data/footer.php' ?>