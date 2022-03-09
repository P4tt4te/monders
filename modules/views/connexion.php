<?php

require_once('../controllers/connexionCode.php');
require_once('../views/pageBegin.php');
require_once('../views/header.php');

?>

<link rel="stylesheet" href="../styles/connexion.css">
<link rel="stylesheet" href="../styles/style.css">
<main>

  <div class="container">
    <div class="choix">
<div class="texte">
      <h1><a class="boutonchoixconn light" href="../views/inscription.php">Inscription</a></h1>
      <h1><a class="boutonchoixinsc light" href="../views/connexion.php">Connexion</a></h1>
    </div>
  
      <div class="lesbarres">
        <div class="barrebleue"></div>
        <div class="barreorange"></div>
      </div>

    </div>


    <div class="descriptif">
      <h2 class="light">CONNEXION</h2>
      <p>Connectez vous à votre compte pour accèder à votre progression</p>
    </div>
    <div class="formcont">
      <form method="post" action="../controllers/connexionCode.php">
        <label for="email">Adresse Mail</label>
        <input type="email" id="email" name="mail">
        <label for="lname">Mot De Passe</label>
        <input type="password" id="password" name="motdepasse">
        <input class="boutonsubmit" type="submit" value="Se connecter" name="formConnexion">
      </form>
    </div>
    <p>Pas encore inscrit? Inscrivez-vous ici: <a href="https://www.w3schools.com/">S'inscrire</a></p>
  </div>
  <?php
  require_once('../controllers/erreurCode.php');
?>
</main>