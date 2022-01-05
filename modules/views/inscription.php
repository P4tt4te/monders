<?php
require_once('common.php');

if (isset($_SESSION['user']) )
    header("Location: ../views/home.php");

require_once('pageBegin.php');
require_once('header.php');

?>

<!-- A SUPPRIMER --><br><br><br><br><br><br><br><br><br><!-- A SUPPRIMER -->


<div id='inscription'>
<div id='titre'>Inscription</div>
<form action="../controllers/inscriptionCode.php" method="POST">
<table>
<tr><td>Pseudo</td><td><input name='pseudo' type='text' size='50'></td></tr>	
<tr><td>mail</td><td><input name='mail' type='text' size='50'></td></tr>	
<tr><td>mot de passe</td><td><input name='motdepasse1' type='password' size='20'></td></tr>	
<tr><td>retaper</td><td><input name='motdepasse2' type='password' size='20'></td></tr>	
</table>
<input type="submit" name="inscription">
</form>
</div>


<?php
require_once('../controllers/erreurCode.php');
require_once('pageEnd.php');
?>