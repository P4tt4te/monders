<?php

require_once('../controllers/profil.php');
require_once('../views/pageBegin.php');
require_once('../views/header.php');
?>

<link rel="stylesheet" href="../styles/profil.css">
<link rel="stylesheet" href="../style/style.css">
<html class="background">

<main>
    <div class="profil">
        <div class="titre">
            <h2 class="light">Salut <span class="title"><?php echo($user->getFullName()); ?></span>, vous avez débloqué
                <?php echo($nbDebloque[0]["nbDebloque"]);  ?> merveilles et fait x quiz</h2>
        </div>
        <div class="all-merveilles">
            <?php
            for ($i = 1; $i <= 7; $i++) {
                $progression = $cnx->query("SELECT progression FROM debloque WHERE idMerveille = ? AND idUtilisateur = ?", array($i, $id));

            ?>
                <div class="merveille">
                    <div class="img-merveille unlocked">
                        <?php if ($nbDebloque[0]["nbDebloque"] >= $i) { ?>
                            <img src="../public/assets/images/MerveillesUnlocked/<?php echo $i; ?>.png" alt="">

                        <?php
                        } else {
                        ?>
                            <img src="../public/assets/images/MerveillesLocked/<?php echo $i; ?>.png" alt="">
                        <?php } ?>
                    </div>
                    <div class="info-merveille">
                        <div class="pourcentage">
                            
                                <span>PROGRESSION</span>
                                <span><?php $progression = MerveilleModel::progression($id, $i); if(isset($progression[0]['p']))
                                {
                                    if($progression[0]['p'] >= 0 && $progression[0]['p'] <= 99){
                                        echo("En cours");
                                    }elseif($progression[0]['p'] = 100){
                                        echo("Fini");
                                    }else{
                                        echo("Pas commencé");
                                    }
                                } else{
                                    echo("Pas commencé");
                                }  ?></span>
                            
                            

                        </div>
                        <div class="quiz">
                            <div>
                            <span><?php $progression = MerveilleModel::progression($id, $i); if(isset($progression[0]['p']))
                                {
                                    if($progression[0]['p'] >= 0 && $progression[0]['p'] <= 99){
                                        echo("En cours");
                                    }elseif($progression[0]['p'] = 100){
                                        echo("Fini");
                                    }else{
                                        echo("Pas commencé");
                                    }
                                } else{
                                    echo("Pas commencé");
                                }  ?></span>
                            </div>
                            <span>QUIZ</span>

                        </div>
                    </div>
                </div>
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