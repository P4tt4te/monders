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
    <img style="display: none;" src="../json/dialogue/cookie.png">
    <img style="display: none;" src="../json/merveille/cookie.png">
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
                <?php 
                switch ($_GET['merveille']) {
                    case "petra":
                        require_once('../views/simon.php');
                        break;
                    case "colisee":
                        require_once('../views/calcul.php');
                        break;
                    case "chichenitza":
                        require_once('../views/calcul.php');
                        break;
                    case "machupicchu":
                        require_once('../views/calcul.php');
                        break;
                    case "christ":
                        require_once('../views/calcul.php');
                        break;
                
                    }
                ?>
                <script src="../script/calcul.js"></script>
            </div>
            <div class="quiz">
            <?php
                switch ($_GET['merveille']) {
                    case "murailledechine":
                        $idMerveille =  1;
                        break;
                    case "tajMahal":
                        $idMerveille = 2;
                        break;
                    case "petra":
                        $idMerveille = 3 ;
                        break;
                    case "colisee":
                        $idMerveille = 4;
                        break;
                    case "chichenitza":
                        $idMerveille = 5;
                        break;
                    case "machupicchu":
                        $idMerveille = 6 ;
                        break;
                    case "christ":
                        $idMerveille = 7;
                        break;
                
                }
                ?>
                <form action="../controllers/merveille.php" method="POST">
                    <input class="redirection" type="submit" value="COMMENCER LE QUIZ" name="formQuiz">
                    <input type="hidden" name="idMerveille" value="<?php echo $idMerveille; ?>">
                    <input type="hidden" name="nomMerveille" value="<?php echo $_GET['merveille']; ?>">
                </form>
                
            </div>
        </section>
    </main>

    <script src="../script/bar.js"></script>
    <script src="../script/merveille.js"></script>
    <script src="../script/dialogue.js"></script>
</body>

</html>