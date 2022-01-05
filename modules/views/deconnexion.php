<?php require_once('common.php');
if ($user!=null)
	unset ($_SESSION['user']);
session_destroy();
header('Location: home.php');
?>