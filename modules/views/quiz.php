
<?php 
require_once('../views/common.php');
require_once('../views/pageBegin.php');
require_once('../views/header.php');

if (!isset($_SESSION['user']) )
	error("Veuillez vous connecter pour accéder à la ressource",  "../views/inscription.php");
?>

<link rel="stylesheet" href="../styles/quizz.css">
<img src="../images/quiz/images/cookie.png">
<main>
    <div class="container">
        <div class="intitule">
            <h1 class="title">QUIZ</h1>
            <div class="descriptif bold">
                <h2 class="nommerveille light">Taj Mahal</h2>
                <p>10 questions</p>
                <p class="difficulte"> niveau difficile </p>
            </div>
        </div>
        <img class="imagemerveille" src="../images/quiz/images/taj-mahal-skr 2.png" alt="image de la merveille">
        <form action="../views/quiz-question.php" id="form1">
            <button class="start" type="submit" form="form1" value="Submit"><span>Commencer</span></button>
        </form>
    </div>
    <div class="divretour">

        <a href="page précédente">
        <a href="../views/tajMahal.php">
            <button class="retour" type="button"></button>
        </a>
    </div>
</main>