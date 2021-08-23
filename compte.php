<?php include_once 'Master_Data/header.php' ?>
<div class="container form">
  <h2 class="Titre">Changer mes informations</h2>
  <form class="bg-light col-5" method="post" action="Pross/profil_update.php" enctype="multipart/form-data">
    <div class="row">
      <div class="form-group col-6">
        <label name="nom">Nom</label>
        <input name="nom" class="form-control" placeholder="Dupont" required>
      </div>
      <div class="form-group col-6">
        <label name="prenom">Prénom</label>
        <input name="prenom" class="form-control" placeholder="Mathieu" required>
      </div>
      <?php
      if (isset($_GET['msg'])) {
        echo "<div class=\"form-group\">";
        echo "<p style=\"color: red;\">" . $_GET['msg'] . "</p>";
        echo "</div>";
      }
      ?>
      <div class="form-group col-12">
        <label name="email">Adresse e-mail</label>
        <input type="email" name="email" class="form-control" placeholder="nom@exemple.com" required>
      </div>
      <div class="form-group col-12">
        <label name="mdp">Mot de passe</label>
        <input type="password" name="mdp" class="form-control" placeholder="Mot de passe" required>
      </div>
      <div class="form-group col-12">
        <label name="ville">Ville</label>
        <input name="ville" class="form-control" placeholder="Paris" required>
      </div>
      <div class="form-group col-6">
        <label name="sport">Sport pratiqué</label>
        <select class="form-control" name="sportPratique">
          <option></option>
          <?php
          $sql = "SELECT `nom` from sports;";
          foreach ($db->query($sql) as $ligne) {
            echo "<option>" . str_replace("_", " ", $ligne['nom']) . "</option>";
          }
          ?>
        </select>
      </div>
      <div class="form-group col-6">
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
      <div class="form-group col-12">
        <label name="nouveauSport">Ajouter un sport</label>
        <small class="text-muted">Si votre sport pratiqué n'est pas indiqué</small>
        <input name="nouveauSport" class="form-control">
      </div>
      <div class="form-group col-12">
        <button type="submit" class="btn bouton">Mettre à jour</button>
      </div>
    </div>
  </form>
</div>
<?php include_once 'Master_Data/footer.php' ?>