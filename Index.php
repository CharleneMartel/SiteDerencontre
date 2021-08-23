<?php include_once 'Master_Data/header.php' ?>
<div class="container">
  <?php
  // if (isset($_GET['logout'])) {
  //   echo "<div class=\"alert alert-success\" role=\"alert\">";
  //   echo "Vous vous êtes déconnecté";
  //   echo "</div>";
  // }
  ?>


  <div class="row" id="jumbo">
    <h1 class="">Trouve ton partenaire sportif</h1>
    <div style="width: 100%;"><img src="img/Home.jpg"></div>
    <?php
    echo "<a class=\"bouton btn\" href=\"Page_ajout.php\" role=\"button\">Inscrivez-vous !</a>";
    ?>
  </div>
</div>

<?php include_once 'Master_Data/footer.php' ?>