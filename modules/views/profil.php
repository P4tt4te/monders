<?php 
require_once('common.php');

if (!isset($user)) 
	error("Vous devez être connecté pour accéder à  votre compte", "home.php");

require_once('pageBegin.php');
require_once('header.php');

$cnx = new Base();

$id = $user->getId();
// $nbDebloque = $cnx->query("SELECT MAX(idMerveille) FROM debloque WHERE idUtilisateur=?", 
// array($id));

// echo $nbDebloque[0]['MAX(idMerveille)'];

$debloque = $cnx ->query('SELECT Merveilles.idMerveille,
CASE
    WHEN debloque.idMerveille IS NULL THEN "false"
    ELSE "true"
END AS debloque
FROM Merveilles
LEFT JOIN debloque ON Merveilles.idMerveille = debloque.idMerveille AND debloque.idUtilisateur = ?
HAVING debloque = "true"', 
array($id))

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
            <div class="merveille taj-mahal">
                <div class="img-merveille">
                    <img src="
                    <?php
                    if($debloque[0]["debloque"]==true){
                        
                        echo('../../public/assets/image/taj-mahal.png');
                        
                    } else {
                        echo('../../public/assets/image/MerveillesLocked/taj.png');
                    }
                    ?>" alt="">
                </div>
                <div class="info-merveille">
                    <div class="pourcentage">
                        <div>
                            <svg class="progress-ring" width="120" height="120">
                                <circle class="progress-ring__circle" stroke="white" stroke-width="4" fill="transparent"
                                    r="52" cx="60" cy="60" />
                            </svg>
                            <span>x%</span>
                        </div>
                        <span>PROGRESSION</span>
                        <button><img src="" alt=""></button>
                    </div>
                    <div class="quiz">
                        <span>x%</span>
                        <span>QUIZ</span>
                        <button><img src="" alt=""></button>
                    </div>
                </div>
            </div>
            <div class="merveille petra">
                <div class="img-merveille">
                    <img src="/public/assets/image/MerveillesLocked/petra.png" alt="">
                </div>
                <div class="info-merveille">
                    <div class="pourcentage">
                        <span>x%</span>
                        <span>PROGRESSION</span>
                        <button><img src="" alt=""></button>
                    </div>
                    <div class="quiz">
                        <span>x%</span>
                        <span>QUIZ</span>
                        <button><img src="" alt=""></button>
                    </div>
                </div>
            </div>
            <div class="merveille chichen">
                <div class="img-merveille">
                    <img src="/public/assets/image/MerveillesLocked/chichen.png" alt="">
                </div>
                <div class="info-merveille">
                    <div class="pourcentage">
                        <span>x%</span>
                        <span>PROGRESSION</span>
                        <button><img src="" alt=""></button>
                    </div>
                    <div class="quiz">
                        <span>x%</span>
                        <span>QUIZ</span>
                        <button><img src="" alt=""></button>
                    </div>
                </div>
            </div>
            <div class="merveille christ">
                <div class="img-merveille">
                    <img src="/public/assets/image/MerveillesLocked/christ.png" alt="">
                </div>
                <div class="info-merveille">
                    <div class="pourcentage">
                        <span>x%</span>
                        <span>PROGRESSION</span>
                        <button><img src="" alt=""></button>
                    </div>
                    <div class="quiz">
                        <span>x%</span>
                        <span>QUIZ</span>
                        <button><img src="" alt=""></button>
                    </div>
                </div>
            </div>
            <div class="merveille colisee">
                <div class="img-merveille">
                    <img src="/public/assets/image/MerveillesLocked/colisee.png" alt="">
                </div>
                <div class="info-merveille">
                    <div class="pourcentage">
                        <span>x%</span>
                        <span>PROGRESSION</span>
                        <button><img src="" alt=""></button>
                    </div>
                    <div class="quiz">
                        <span>x%</span>
                        <span>QUIZ</span>
                        <button><img src="" alt=""></button>
                    </div>
                </div>
            </div>
            <div class="merveille muraille">
                <div class="img-merveille">
                    <img src="/public/assets/image/MerveillesLocked/muraille.png" alt="">
                </div>
                <div class="info-merveille">
                    <div class="pourcentage">
                        <span>x%</span>
                        <span>PROGRESSION</span>
                        <button><img src="" alt=""></button>
                    </div>
                    <div class="quiz">
                        <span>x%</span>
                        <span>QUIZ</span>
                        <button><img src="" alt=""></button>
                    </div>
                </div>
            </div>
            <div class="merveille pichu">
                <div class="img-merveille">
                    <img src="/public/assets/image/MerveillesLocked/machu.png" alt="">
                </div>
                <div class="info-merveille">
                    <div class="pourcentage">
                        <span>x%</span>
                        <span>PROGRESSION</span>
                        <button><img src="" alt=""></button>
                    </div>
                    <div class="quiz">
                        <span>x%</span>
                        <span>QUIZ</span>
                        <button><img src="" alt=""></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>