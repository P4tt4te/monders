<?php
require_once('../views/common.php');
// header("Content-Type: application/json; charset=utf-8");
$test = "ne fait rien"; 
if (isset($_POST['nomQuiz'])) {
    $test = "dans le if";
    try {
        $user = $_SESSION['user'];
        $idQuiz = $_POST['idQuiz'];
        $progression = $_POST['Score'];
        
        $idUti = $user->getId();
        $cnx = new Base(BASE, USERNAME, PASSWORD);
        $lignes = $cnx->query('select * from participe where idUtilisateur=? AND idQuiz = ?', array($idUti,$idQuiz));
        
        $debloqueMerveille = $cnx->query(
            "SELECT progression debloqueMerveille FROM participe WHERE idUtilisateur=? AND idQuiz = ?",
            array($idUti,$idQuiz)
        );

        if (count($lignes) == 1) {
            $test = "update";
            $cnx->update('update participe set progression=? WHERE idUtilisateur = ? AND idQuiz = ?', array($progression,$idUti,$idQuiz));
            
        } else {
            $cnx->insert(
                "insert into participe values (?,?,?) ",
                array($idQuiz,$idUti,$progression)
            );
            // success("", "../views/quiz.php");
            $test = "insert";
        }
        if($debloqueMerveille[0]['debloqueMerveille'] == 100)
        {
            $test = "debloque prochaine merveille";
            $cnx->insert(
                "insert into debloque values (?,?,0,?) ",
                array($idQuiz + 1, $idUti,null)
            );

        }
        ?> <script>console.log(<?php echo($test);?>);</script>   <?php
    } catch (\Throwable $th) {
        // error("Problème lors de l'insertion du quiz", "../views/quiz.php");
    }
}else{
    $test = "dans le else";
}
?>
