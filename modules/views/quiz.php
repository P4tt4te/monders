<<<<<<< HEAD:modules/views/quiz.php
<<<<<<< Updated upstream:modules/views/quiz.html
<link rel="stylesheet" href="/modules/styles/quizz.css">
<link rel="stylesheet" href="/style.css">
=======
<?php

require_once('../controllers/quiz.php');
require_once('../views/pageBegin.php');
require_once('../views/header.php');

?>




<link rel="stylesheet" href="../styles/quizz.css">
<link rel="stylesheet" href="../styles/style.css">
>>>>>>> Stashed changes:modules/views/quiz.php
=======

<?php 
require_once('../views/common.php');
require_once('../views/pageBegin.php');
require_once('../views/header.php');


?>

<link rel="stylesheet" href="../styles/quizz.css">

>>>>>>> nathan:modules/views/quiz.html
<main>
    <div class="container">
        <div class="intitule">
            <h1 class="title">QUIZ</h1>
            <div class="descriptif">
                <h2 class="nommerveille light">Taj Mahal <?php echo("succes") ?></h2>
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
<<<<<<< HEAD:modules/views/quiz.php
<<<<<<< Updated upstream:modules/views/quiz.html
        <a href="page précédente">
=======
        <a href="../views/tajMahal.html">
>>>>>>> Stashed changes:modules/views/quiz.php
=======

        <a href="page précédente">
        <a href="../views/tajMahal.html">
>>>>>>> nathan:modules/views/quiz.html
            <button class="retour" type="button"></button>
        </a>
    </div>
</main>