<?php 
require_once('common.php');



$cnx = new Base();


$id = $user->getId();

$nbDebloque = $cnx->query("SELECT MAX(idMerveille) nbDebloque FROM debloque WHERE idUtilisateur=?", 
array($id));