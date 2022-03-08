<?php
require_once('../views/common.php');

if (isset($_SESSION['user']) )
	error("Veuillez vous déconnecter avant de vous réinscrire",  "../views/inscription.php");


$allParamsPresent = isset($_POST['pseudo']) && isset($_POST['mail']) && isset($_POST['motdepasse1']) && isset($_POST['motdepasse2']);


$pseudo=$_POST['pseudo'];
$mail=$_POST['mail'];
$motdepasse1=$_POST['motdepasse1'];
$motdepasse2=$_POST['motdepasse2'];

if ($pseudo==="" || $mail==="" || $motdepasse1==="" || $motdepasse2==="")
	error("Tous les champs doivent être remplis", "../views/inscription.php");


if ($motdepasse1!=$motdepasse2)
	error("Les deux mots de passe ne sont pas identiques", "../views/inscription.php");


try{
	$cnx = new Base(BASE, USERNAME, PASSWORD);
	$lignes = $cnx->query('select * from Utilisateurs where mail=?', array($mail));
	
	if (count ($lignes)>0)
	{
		error("Cette adresse mail est déjà utilisée.<br/><span style='font-size: 0.8em; font-style: italic'><a href='oubli.php'>Avez-vous oublié votre mot de passe ?</a></span>",  "../views/inscription.php");
	}
	else {
		$cnx->insert("insert into Utilisateurs values (?,?,?,?) ",
		array(null, $pseudo, $mail, sha1($motdepasse1)));
		
		$recup = $cnx->query("select idUtilisateur from Utilisateurs where mail=?", 
		array($_POST['mail']));

		 $debloquerTaj = MerveilleModel::debloque(1, $recup[0]['idUtilisateur']);

	$user = UserViewer::auth($mail, $motdepasse1);
	$_SESSION['user'] = $user;
	success("Inscription réussie<br/>Vous êtes maintenant connecté en tant que $pseudo.", "../views/home.php");
	}


}
catch (PDOException $e)
{
	error("Un problème est survenu lors de votre inscription : ".$e->getMessage()." ".$e->getTraceAsString(), "../views/inscription.php");
}

$db=null;
