<?php 

require_once("../controllers/inscriptionCode.php");
require_once('../views/pageBegin.php');
require_once('../views/header.php');
?>




<link rel="stylesheet" href="../styles/inscription.css">
<link rel="stylesheet" href="../styles/style.css">
<main>

  <div class="container">
    <div class="choix">
<div class="texte">
      <h1><a class="boutonchoixinsc light" href="../views/inscription.php">Inscription</a></h1>
      <h1><a class="boutonchoixconn light" href="../views/connexion.php">Connexion</a></h1>
    </div>
  
      <div class="lesbarres">
        <div class="barreorange"></div>
        <div class="barrebleue"></div>
      </div>

    </div>


    <div class="descriptif">
      <h2 class="light">INSCRIPTION</h2>
      <p>Vous pouvez vous inscrire afin de disposer de toutes les fonctionnalités du site</p>
    </div>
    <div class="formcont">
      <form method="post" action="../controllers/inscriptionCode.php">
        <label for="fname">Pseudonyme</label>
        <input type="text" id="fname" name="pseudo">
        <label for="email">Adresse Mail</label>
        <input type="email" id="email" name="mail">
        <label for="lname">Mot De Passe</label>
        <input type="password" id="password" name="motdepasse1">
        <label for="lname">Vérification Mot de passe</label>
        <input type="password" id="password2" name="motdepasse2">
        <input class="boutonsubmit" type="submit" value="S'inscrire" name="formInscription">
      </form>
    </div>
    <p>Déja inscrit ? Connectez vous ici: <a href="../views/connexion.php">Se connecter</a></p>
  </div>

<?php
  require_once('../controllers/erreurCode.php');
?>
</main>