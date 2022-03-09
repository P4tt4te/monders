<?php 
require_once('../views/common.php');
require_once('../views/pageBegin.php');
require_once('../views/header.php');
require_once('../controllers/merveille.php');



if (!isset($_SESSION['user']) )
	error("Veuillez vous connecter pour accéder à la ressource",  "../views/inscription.php");
?>
    
    <link rel="stylesheet" href="../styles/merveille.css">
    <link rel="stylesheet" href="../styles/calcul.css">
    <link rel="stylesheet" href="../styles/marin.css">


<body>
    <img src="../json/dialogue/cookie.png">
    <img src="../json/merveille/cookie.png">
    <div class="marin" data-page="">
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
    <div class="bar">
        <p id="percent">0%</p>
        <div id="_progress"></div>

    </div>
    <main>
        <section class="merveilles">
            <div class="landing">
                <div class="texte-merveille">
                    <h1></h1>
                    <h2></h2>
                </div>

                <img class="image-merveille" src="" alt="">
            </div>
            <div class="numero-merveille">
                <div class="grid">
                    <img src="" alt="">
                    <p><span class="numero">0</span> / 7</p>
                </div>
            </div>
        </section>
        <section class="presentation-merveille">
            <div class="grid one">
                <div class="photo">
                    <img class="img3" src="" alt="">
                </div>
                <div class="texte">
                    <p class="txt1"></p>
                </div>
            </div>
            <div class="grid two">
                <div class="texte">
                    <p class="txt2"></p>
                </div>
                <div class="photo">
                    <img class="img4" src="" alt="">
                </div>
            </div>



            <div class="grid three">
                <div class="photo">
                    <img class="img5" src="" alt="">
                </div>
                <div class="texte">
                    <p class="txt3"></p>
                </div>
            </div>


        </section>

        <section class="jeu">
            <div class="minijeux">
                <div class="calcul">
                    <h3>Mini-jeu</h3>
                    <h3>Question <span class="indexquestion">1</span> sur <span>5</span></h3>
                    <p class="corrector"></p>
                    <div class="centrecalcul">
                        <span class="romain title">VI</span>
                        <p>=</p>
                        <input class=" inputromain" type="number" max="9999" min="1" name="uti" id="">
                    </div>
                    <img class="desccalcul" src="../images/Merveilles/calcul/desc.svg" alt="" srcset="">
                    <span class="help">Explique moi marin ?</span>
                    <button class="controllermarin" name="controller">
                    </button>
                </div>
                <script src="../script/calcul.js"></script>
            </div>
            <div class="quiz">
                <form action="../controllers/merveille.php" method="POST">
                <input class="redirection" type="submit" value="COMMENCER LE QUIZ" name="formQuiz">
                <input type="hidden" name="idMerveille" value="
                <?php
                switch ($_GET['merveille']) {
                    case "murailledechine":
                        $idMerveille =  1;
                        echo($idMerveille);
                        break;
                    case "tajMahal":
                        $idMerveille = 2;
                        echo($idMerveille);
                        break;
                    case "petra":
                        $idMerveille = 3 ;
                        echo($idMerveille);
                        break;
                    case "colisee":
                        $idMerveille = 4;
                        echo($idMerveille);
                        break;
                    case "chichenitza":
                        $idMerveille = 5;
                        echo($idMerveille);
                        break;
                    case "machupicchu":
                        $idMerveille = 6 ;
                        echo($idMerveille);
                        break;
                    case "christ":
                        $idMerveille = 7;
                        echo($idMerveille);
                        break;
                
                }
                ?>">
                </form>
                
            </div>
        </section>
    </main>

    <script src="../script/bar.js"></script>
    <script src="../script/merveille.js"></script>
    <script src="../script/dialogue.js"></script>
</body>

</html>