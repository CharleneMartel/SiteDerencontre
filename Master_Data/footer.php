<style>
  .footer {
    background-color: #9370DB;
    padding: 20px 30px 0;
    border: solid;
    display: flex;
    margin: auto;
    width: 100%;
    grid-auto-flow: row;
  }

  .footer-link a {
    color: white;
    text-decoration: none;
  }

  .footer-contact {
    float: right;
    margin-bottom: 150px;

  }
</style>
<footer class="footer">

  <div class="footer-links">
    <div><a href="/index.php">Home</a></div>
    <div><a href="/recherche.php">Recherche</a></div>
    <div><a href="/compte.php">Mon compte</a></div>
    <div><a href="/Page_ajout.php">Crée un compte</a></div>
    <div><a href="/Page-connexion.php">Se connecter</a></div>
  </div>

  <div class="footer-contact">

    <div>Contact Us</div>
    <div>
      <form action="#" method="post">

        <input type="text" name="email" placeholder="Email">
        <textarea name="message" placeholder="Message"></textarea>
        <button>Send</button>

      </form>
    </div>
  </div>

  <div>Company Name © 2021</div>
</footer>