<head>
  <link rel="stylesheet" href="style.css" />
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
</div>
</div>

<?php include_once 'Master_Data/footer.php' ?>