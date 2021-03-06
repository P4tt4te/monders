<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/quiz-question.css">
    <link rel="stylesheet" href="../styles/marin.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<img src="../json/cookie.png" style="display:none;">
<img src="../controllers/cookie.png" style="display:none;">
<body>
<?php 


require_once('../views/common.php');
if (!isset($_SESSION['user']) )
	error("Veuillez vous connecter pour accéder à la ressource",  "../views/inscription.php");


?>
    <main>
        <button class="controllermarin" name="controller">
        </button>
        <div class="marin" data-page="petra">
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
        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <p class="purple">Quiz terminé avec un score de 
                    <span class="affichagescore">0% 
                        </span>
                </p>
                <!-- Mettre une balise a -->
                <button class="start" onclick="document.location='../views/home.php'">retourner au menu -></button>
            </div>

        </div>
        <div class="container text-focus-in" data-quiz="1">

            <div class="intitule">
                <p class="numeroquestion">Question <span class="num">1</span> sur 10 </p>
                <p class="question">Comment s'appelle l'architecte du Taj-Mahal ?</p>
                <img class="imagequestion vibrate-2" src="../images/quiz/images/Ualimagedd.jpg" alt="">
            </div>
            <div class="timer">
                <p>Temps restant <span class="ntime">8</span></p>
            </div>
            <div class="choix">
                <button class="boutonreponse" type="button" data-lettre="A">
                    <p class="aucoin">A</p>
                    <p class="reponse1">Réponse 1</p>
                </button>


                <button class="boutonreponse" type="button" data-lettre="B">
                    <p class="aucoin">B</p>
                    <p class="reponse2">Réponse 2</p>
                </button>


                <button class="boutonreponse" type="button" data-lettre="C">
                    <p class="aucoin">C</p>
                    <p class="reponse3">Réponse 3</p>
                </button>


                <button class="boutonreponse" type="button" data-lettre="D">
                    <p class="aucoin">D</p>
                    <p class="reponse4">Réponse 4</p>
                </button>

            </div>
            <div class="descriptif">
                <h1 class="title">QUIZ</h1>
                <h2 class="light">Taj-Mahal</h2>
            </div>
        </div>
        <div class="barTimer barani"></div>
        <script src="../script/quiz-question.js"></script>
        <script src="../script/dialogue.js"></script>
    </main>
</body>

</html>