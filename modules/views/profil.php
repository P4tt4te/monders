<?php

require_once('../controllers/profil.php');
require_once('../views/pageBegin.php');
require_once('../views/header.php');
?>

<link rel="stylesheet" href="../styles/profil.css">
<link rel="stylesheet" href="../styles/marin.css" rel="stylesheet" type="text/css">
<html class="background">

<main>
    <div class="marin" data-page="profil">
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
    <div class="profil">
        <div class="titre">
            <h2 class="light">Salut <span class="title"><?php echo ($user->getFullName()); ?></span>, vous avez débloqué
                <?php
                if ($nbDebloque[0]["nbDebloque"] == null) {
                    echo (0);
                } else {
                    echo ($nbDebloque[0]["nbDebloque"]);
                }


                ?>
                merveilles et fait
                <?php
                if ($nbDebloqueQuiz[0]["nbDebloqueQuiz"] == null) {
                    echo (0);
                } else {
                    echo ($nbDebloqueQuiz[0]["nbDebloqueQuiz"]);
                }


                ?> quiz</h2>
        </div>
        <div class="all-merveilles">
            <?php
            for ($i = 1; $i <= 7; $i++) {

                switch ($i) {
                    case 1:
                        $nomMerveille =  "murailledechine";
                        break;
                    case 2:
                        $nomMerveille = "tajMahal";
                        break;
                    case 3:
                        $nomMerveille = "petra";
                        break;
                    case 4:
                        $nomMerveille = "colisee";
                        break;
                    case 5:
                        $nomMerveille = "chichenitza";
                        break;
                    case 6:
                        $nomMerveille = "machupicchu";
                        break;
                    case 7:
                        $nomMerveille = "christ";
                        break;
                }
                switch ($i) {
                    case 1:
                        $urlMerveille =  "murailledechine.php?merveille=murailledechine";
                        break;
                    case 2:
                        $urlMerveille = "tajMahal.php?merveille=tajMahal";
                        break;
                    case 3:
                        $urlMerveille = "merveille.php?merveille=petra";
                        break;
                    case 4:
                        $urlMerveille = "merveille.php?merveille=colisee";
                        break;
                    case 5:
                        $urlMerveille = "merveille.php?merveille=chichenitza";
                        break;
                    case 6:
                        $urlMerveille = "merveille.php?merveille=machupicchu";
                        break;
                    case 7:
                        $urlMerveille = "merveille.php?merveille=christ";
                        break;
                }


                $progression = $cnx->query("SELECT progression FROM debloque WHERE idMerveille = ? AND idUtilisateur = ?", array($i, $id));

            ?>
                <?php if ($nbDebloque[0]["nbDebloque"] >= $i) {
                    ?>
                   <a href="../views/<?php echo ($urlMerveille) ?>">
                   <?php
                }
                ?>
                
                <div class="merveille
                <?php if ($nbDebloque[0]["nbDebloque"] >= $i) {
                    echo ("unlocked");
                }
                ?>
                ">
                        
                            <?php if ($nbDebloque[0]["nbDebloque"] >= $i) { ?>

                                <div class="img-merveille unlocked">
                                <img src="../images/home/icons/icon-<?php echo $nomMerveille; ?>.png" class="image-hover-unlocked" alt="">
                                </div>
                            <?php
                            } else {
                            ?>
                             <div class="img-merveille locked">
                                <img src="../images/home/icons/icon-<?php echo $nomMerveille; ?>.png"  alt="">
                                </div>
                            <?php } ?>
                      
                        <div class="info-merveille">
                            <div class="pourcentage">

                                <span>PROGRESSION</span>
                                <span><?php $progression = MerveilleModel::progression($id, $i);
                                        if (isset($progression[0]['p'])) {
                                            if ($progression[0]['p'] >= 0 && $progression[0]['p'] <= 99) {
                                                echo ("En cours");
                                            } elseif ($progression[0]['p'] = 100) {
                                                echo ("Fini");
                                            } else {
                                                echo ("Pas commencé");
                                            }
                                        } else {
                                            echo ("Pas commencé");
                                        }  ?></span>



                            </div>
                            <div class="quiz">
                                <span>QUIZ</span>
                                <span><?php $progressionQuiz = MerveilleModel::progressionQuiz($id, $i);
                                        if (isset($progressionQuiz[0]['p'])) {
                                            echo $progressionQuiz[0]['p']." %";
                                        } else {
                                            echo ("0 %");
                                        }  ?></span>



                            </div>
                        </div>
                    </div>
                    <?php if ($nbDebloque[0]["nbDebloque"] >= $i) {
                    ?>
                   </a>
                   <?php
                    }
                    ?>
                    
                <?php

            }
                ?>
        </div>
    </div>
    <div class="zoneaide">
        <button class="help">?</button>
    </div>
    <script src="../script/dialogue.js"></script>
    </body>
</main>

</html>