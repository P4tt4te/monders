<?php
require_once ('common.php');
if (isset($_SESSION['user']) )
	error("Veuillez vous déconnecter avant de vous réinscrire", "home.php");


$allParamsPresent = isset($_POST['pseudo']) && isset($_POST['mail']) && isset($_POST['motdepasse1']) && isset($_POST['motdepasse2']);

var_dump($_POST['mail']);

$pseudo=$_POST['pseudo'];
$mail=$_POST['mail'];
$motdepasse1=$_POST['motdepasse1'];
$motdepasse2=$_POST['motdepasse2'];

if ($pseudo==="" || $mail==="" || $motdepasse1==="" || $motdepasse2==="")
	error("Tous les champs doivent être remplis","home.php");


if ($motdepasse1!=$motdepasse2)
	error("Les deux mots de passe ne sont pas identiques", "home.php");


try{
	$cnx = new Base(BASE, USERNAME, PASSWORD);
	$lignes = $cnx->query('select * from Utilisateurs where mail=?', array($mail));
	
	if (count ($lignes)>0)
	{
		error("Cette adresse mail est déjà utilisée.<br/><span style='font-size: 0.8em; font-style: italic'><a href='oubli.php'>Avez-vous oublié votre mot de passe ?</a></span>", "home.php");
	}
	else {
		$cnx->insert("insert into Utilisateurs values (?,?,?,?) ",
		array(null, $pseudo, $mail, sha1($motdepasse1)));
	$user = UserViewer::auth($mail, $motdepasse1);
	$_SESSION['user'] = $user;
	success("Inscription réussie<br/>Vous êtes maintenant connecté en tant que $pseudo.", "home.php");
	}


}
catch (PDOException $e)
{
	error("Un problème est survenu lors de votre inscription : ".$e->getMessage()." ".$e->getTraceAsString(),"home.php");
}

$db=null;
