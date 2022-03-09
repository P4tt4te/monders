<?php 
require_once('../views/common.php');

if (!isset($_SESSION['user']) )
	error("Veuillez vous déconnecter avant de vous réinscrire",  "../views/home.php");

$cnx = new Base(BASE, USERNAME, PASSWORD);
$idUti = $user->getId();
if(isset($_POST['formQuiz'])){
$idMerveille = $_POST['idMerveille'];

        
        $cnx->update(
            "update debloque set progression=100 WHERE idUtilisateur = ? AND idMerveille = ? ",
            array($idUti,$idMerveille));
            success("",  "../views/quiz.php");
    }
    

?>