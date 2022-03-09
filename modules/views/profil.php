<?php

require_once('../controllers/profil.php');
require_once('../views/pageBegin.php');
require_once('../views/header.php');
?>

<link rel="stylesheet" href="../styles/profil.css">
<html class="background">

<main>
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
                        $nomMerveille =  "murailleChine.php";
                        break;
                    case 2:
                        $nomMerveille = "tajMahal.php";
                        break;
                    case 3:
                        $nomMerveille = "petra.php";
                        break;
                    case 4:
                        $nomMerveille = "coliseeRome.php";
                        break;
                    case 5:
                        $nomMerveille = "chichenItza.php";
                        break;
                    case 6:
                        $nomMerveille = "machuPicchu.php";
                        break;
                    case 7:
                        $nomMerveille = "christRedempteur.php";
                        break;
                }

                $progression = $cnx->query("SELECT progression FROM debloque WHERE idMerveille = ? AND idUtilisateur = ?", array($i, $id));

            ?>
                <a href="../views/<?php echo ($nomMerveille) ?>">
                <div class="merveille
                <?php if ($nbDebloque[0]["nbDebloque"] >= $i) {
                    echo ("unlocked");
                }
                ?>
                ">
                        <div class="img-merveille unlocked">
                            <?php if ($nbDebloque[0]["nbDebloque"] >= $i) { ?>


                                <img src="../images/Merveilles/MerveillesUnlocked/<?php echo $i; ?>.png" class="image-hover-unlocked" alt="">

                            <?php
                            } else {
                            ?>
                                <img src="../images/Merveilles/MerveillesLocked/<?php echo $i; ?>.png" alt="">
                            <?php } ?>
                        </div>
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
                                            if ($progressionQuiz[0]['p'] >= 0 && $progressionQuiz[0]['p'] <= 99) {
                                                echo ("En cours");
                                            } elseif ($progressionQuiz[0]['p'] = 100) {
                                                echo ("Fini");
                                            } else {
                                                echo ("Pas commencé");
                                            }
                                        } else {
                                            echo ("Pas commencé");
                                        }  ?></span>



                            </div>
                        </div>
                    </div>
                    </a>
                <?php

            }
                ?>
        </div>
    </div>
    <?php
    require_once('pageEnd.php');
    ?>
    </body>
</main>

</html>