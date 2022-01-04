<?php
require_once('common.php');

require_once('pageBegin.php');

?>


<div id='inscription'>
<div id='titre'>Inscription</div>
<form action="inscriptionCode.php" method="post">
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
require_once('pageEnd.php');
?>