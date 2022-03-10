<?php 
require_once('../views/common.php');

if (!isset($_SESSION['user']) )
	error("Veuillez vous déconnecter avant de vous réinscrire",  "../views/home.php");

$cnx = new Base(BASE, USERNAME, PASSWORD);
$idUti = $user->getId();

$merveille = $_GET['merveille'];

$nbDebloque = $cnx->query("SELECT MAX(idMerveille) nbDebloque FROM debloque WHERE idUtilisateur=?", 
array($idUti));

switch ($merveille) {
    case "murailledechine":
        $idMerveilleDebloque =  1;
        break;
    case "tajMahal":
        $idMerveilleDebloque = 2;
        break;
    case "petra":
        $idMerveilleDebloque = 3 ;
        break;
    case "colisee":
        $idMerveilleDebloque = 4;
        break;
    case "chichenitza":
        $idMerveilleDebloque = 5;
        break;
    case "machupicchu":
        $idMerveilleDebloque = 6 ;
        break;
    case "christ":
        $idMerveilleDebloque = 7;
        break;

}


if($nbDebloque[0]['nbDebloque'] < $idMerveilleDebloque){

    error("","../views/home.php");
}



if(isset($_POST['formQuiz'])){



$idMerveille = $_POST['idMerveille'];
$nomMerveille = $_POST['nomMerveille'];

        $cnx->update(
            "update debloque set progression=100 WHERE idUtilisateur = ? AND idMerveille = ? ",
            array($idUti,$idMerveille));
            success("",  "../views/quiz.php?merveille=".$nomMerveille );
    }
    

?>