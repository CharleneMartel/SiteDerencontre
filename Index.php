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
    <h1 class="">Faites des rencontres</h1>
    <p class=""></p>
    <?php
    //if (!isset($_COOKIE['email']))
    {
      echo "<a class=\"bouton btn\" href=\"ajout.php\" role=\"button\">Inscrivez-vous !</a>";
    }
    // } else
    {
      echo "<a class=\"bouton btn\" href=\"recherche.php\" role=\"button\">Rechercher</a>";
    }
    ?>
  </div>
</div>

<?php include_once 'includes/footer.php' ?>