<?php
require_once('common.php');

if (!isset($user))
    error("Vous devez être connecté pour accéder à  votre compte", "home.php");

require_once('pageBegin.php');
require_once('header.php');

$cnx = new Base();

$id = $user->getId();
$nbDebloque = $cnx->query(
    "SELECT MAX(idMerveille) FROM debloque WHERE idUtilisateur=?",
    array($id)
);

echo $nbDebloque[0]['MAX(idMerveille)'];



// $debloque = $cnx ->query('SELECT Merveilles.idMerveille,
// CASE
//     WHEN debloque.idMerveille IS NULL THEN "false"
//     ELSE "true"
// END AS debloque
// FROM Merveilles
// LEFT JOIN debloque ON Merveilles.idMerveille = debloque.idMerveille AND debloque.idUtilisateur = ?
// HAVING debloque = "true"', 
// array($id))

?>

<link rel="stylesheet" href="../styles/profil.css">
<link rel="stylesheet" href="../../style.css">
<html class="background">

<body>
    <div class="profil">
        <div class="titre">
            <h2 class="light">Salut <span class="title">utilisateur</span>, vous avez débloqué
                x merveilles et fait x quiz</h2>
        </div>
        <div class="all-merveilles">
            <?php
            for ($i = 1; $i <= 7; $i++) {
                $progression = $cnx->query("SELECT progression FROM debloque WHERE idMerveille = ? AND idUtilisateur = ?", array($i, $id));

            ?>
                <div class="merveille">
                    <div class="img-merveille">
                        <?php if ($nbDebloque >= $i) { ?>
                            <img src="../../public/assets/image/<?php echo $i; ?>.png" alt="">

                        <?php
                        } else {
                        ?>
                            <img src="../../public/assets/image/MerveillesLocked/<?php echo $i; ?>.png" alt="">
                        <?php } ?>
                    </div>
                    <div class="info-merveille">
                        <div class="pourcentage">
                            <div>
                                <svg class="progress-ring" width="120" height="120">
                                    <circle class="progress-ring__circle" stroke="white" stroke-width="4" fill="transparent" r="52" cx="60" cy="60" />
                                </svg>
                                <span>100%</span>
                            </div>
                            <span>PROGRESSION</span>

                        </div>
                        <div class="quiz">
                            <div>
                                <svg class="progress-ring" width="120" height="120">
                                    <circle class="progress-ring__circle" stroke="white" stroke-width="4" fill="transparent" r="52" cx="60" cy="60" />
                                </svg>
                                <span>100%</span>
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
</body>

</html>