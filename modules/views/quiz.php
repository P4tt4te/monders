
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
        <img class="imagemerveille" src="/modules/public/assets/images/taj-mahal-skr 2.png" alt="image de la merveille">
        <form action="/modules/views/quiz-question.html" id="form1">
            <button class="start" type="submit" form="form1" value="Submit"><span>Commencer</span></button>
        </form>
    </div>
    <div class="divretour">

        <a href="page précédente">
        <a href="../views/tajMahal.html">
            <button class="retour" type="button"></button>
        </a>
    </div>
</main>