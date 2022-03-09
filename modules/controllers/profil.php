<?php 
require_once('common.php');

if (!isset($user)) 
	error("Vous devez être connecté pour accéder à  votre compte", "home.php");



$cnx = new Base();


$id = $user->getId();

$nbDebloque = $cnx->query("SELECT MAX(idMerveille) nbDebloque FROM debloque WHERE idUtilisateur=?", 
array($id));
$nbDebloqueQuiz = $cnx->query("SELECT MAX(idQuiz) nbDebloqueQuiz FROM participe WHERE idUtilisateur=?", 
array($id));
		



// echo $nbDebloque[0]['MAX(idMerveille)'];

?>




<!-- 

<img style="width: 200px; height: 150px;" src="../..../public/assets/images/assets/image/chichen.png" alt="">
<img style="width: 200px; height: 150px;" src="../images/2.jpg" alt=""> -->

