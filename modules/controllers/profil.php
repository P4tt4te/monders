<?php 
require_once('common.php');

if (!isset($user)) 
	error("Vous devez être connecté pour accéder à  votre compte", "home.php");

require_once('pageBegin.php');
require_once('header.php');

$cnx = new Base();

$id = $user->getId();
$nbDebloque = $cnx->query("SELECT MAX(idMerveille) FROM debloque WHERE idUtilisateur=?", 
array($id));

echo $nbDebloque[0]['MAX(idMerveille)'];

?>

<!-- A SUPPRIMER --><br><br><br><br><br><br><br><br><br><!-- A SUPPRIMER -->
<span>Bonjour "<?php echo $user->getFullName()?>"</span>
<span>Bonjour "<?php echo $user->getPseudo()?>"</span>
<span>Bonjour "<?php echo $user->getId()?>"</span>





<img style="width: 200px; height: 150px;" src="../..../public/assets/images/assets/image/chichen.png" alt="">
<img style="width: 200px; height: 150px;" src="../images/2.jpg" alt="">

<?php 
require_once('pageEnd.php');
?>