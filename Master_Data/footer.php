<style>
  .footer {
    background-color: #9370DB;
    padding: 20px 30px 0;
    border: white;
    display: inline-flex;
    width: 100%;
    position: relative;
    height: 15%;
  }

  .footer-links {

    color: white;
    text-decoration: none;
    margin-left: 25px;
  }

  .footer-contact {
    float: right;
    margin-bottom: 150px;
    justify-content: center;

  }
</style>

<body>
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
</body>