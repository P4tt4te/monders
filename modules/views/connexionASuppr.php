<?php
require_once('common.php');

if (isset($_SESSION['user']) )
    header("Location: ../views/home.php");
    
require_once('pageBegin.php');
require_once('header.php');


?>
<!-- A SUPPRIMER --><br><br><br><br><br><br><br><br><br><!-- A SUPPRIMER -->

<!-- div contenant le formulaire de connexion
     Cette div est cachée par défaut, mais apparaît quand on clique sur le bouton "Connexion" -->
     <div id='connexion'>
<div id='titre'>Connexion</div>
<form action="../controllers/connexionCode.php" method="POST">
<table>
<tr><td>e-mail</td><td><input name='mail' type='text' size='50'></td></tr>	
<tr><td>mot de passe</td><td><input name='motdepasse' type='password' size='20'></td></tr>	
</table>
<input type="submit" name="connexion">
</form>
</div>


<?php
require_once('../controllers/erreurCode.php');
require_once('pageEnd.php');
?>