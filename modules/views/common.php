<?php

spl_autoload_register(function ($class) {
    include '../classes/' . $class . '.php';
});

session_start();
if (isset($_SESSION['user']))
	$user=$_SESSION['user'];
else
	$user=null;


define ('BASE', 'monders');
define ('USERNAME', 'iut');
define ('PASSWORD', 'iut');




// Cette fonction prend en paramètre un tableau contenant les noms des paramètres de
// formulaire html recherchés, et renvoie true s'ils sont tous présents dans le tableau
// $_POST, false sinon
function postParamsPresents($paramNames)
{
	foreach ($paramNames as $paramName)
		if (!isset($_POST[$paramName]))
			return false;
	return true;
}

// cette fonction provoque une redirection vers une page. Dans la nouvelle page,
// un message d'erreur sera affiché en rouge
function error ($message, $destination)
{
	$_SESSION['erreur'] = $message;
	header("Location: ".$destination);
	exit();
}

// cette fonction provoque une redirection vers une page. Dans la nouvelle page,
// un message d'erreur sera affiché en vert
function success ($message, $destination)
{
	$_SESSION['success'] = $message;
	header("Location:".$destination);
	exit();
}




?>