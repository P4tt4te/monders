
<?php 
require_once('../views/common.php');
require_once('../views/pageBegin.php');
require_once('../views/header.php');

if (!isset($_SESSION['user']) )
	error("Veuillez vous connecter pour accéder à la ressource",  "../views/inscription.php");

    if (!isset($_GET['merveille']) )
	error("Veuillez entrer une merveille !",  "../views/home.php");
?>

<link rel="stylesheet" href="../styles/quizz.css">
<img style="display: none;"src="../images/quiz/images/cookie.png">
<link rel="stylesheet" href="../styles/marin.css" rel="stylesheet" type="text/css">
<main>
    <div class="marin" data-page="quiz">
        <div class="perso">
            <img src="../images/marin/bonjour.png" alt="">
        </div>
        
        <div class="bulles">
            <div class="bulle-parole">
                <p class="texte-parole"></p>
            </div>
        </div>
        <div class="suite">
            <p>Cliquer pour continuer le dialogue.</p>
        </div>
        
    </div>
    <div class="container">
        <div class="intitule">
            <h1 class="title">QUIZ</h1>
            <div class="descriptif bold"></div>
        </div>
        <img class="imagemerveille" src="../images/quiz/images/landing/<?php echo $_GET['merveille']; ?>.png" alt="image de la merveille">
        <form action="../views/quiz-question.php" method="get" id="form1">
        <button class="start" type="submit" form="form1" name="merveille" value="<?php echo $_GET['merveille']; ?>">
                <span>Commencer</span></button>
        </form>
    </div>
    <div class="divretour">
    <?php
                switch ($_GET['merveille']) {
                    case "murailledechine":
                        $url = $_GET['merveille'].".php";
                        break;
                    case "tajMahal":
                        $url = $_GET['merveille'].".php";
                        break;
                    case "petra":
                        $url ="merveille.php?merveille=".$_GET['merveille'];
                        break;
                    case "colisee":
                        $url ="merveille.php?merveille=".$_GET['merveille'];
                        break;
                    case "chichenitza":
                        $url ="merveille.php?merveille=".$_GET['merveille'];
                        break;
                    case "machupicchu":
                        $url ="merveille.php?merveille=".$_GET['merveille'];
                        break;
                    case "christ":
                        $url ="merveille.php?merveille=".$_GET['merveille'];
                        break;
                
                }
                ?>  
        <a href="page précédente">
        <a href="../views/<?php echo $url; ?>">
            <button class="retour" type="button"></button>
        </a>
    </div>
    <div class="zoneaide">
        <button class="help">?</button>
    </div>
    <script src="../script/dialogue.js"></script>
</main>