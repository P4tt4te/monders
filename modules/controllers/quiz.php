<?php
require_once('../views/common.php');
$test = "ne fait rien"; 
// if (isset($_POST['nomQuiz'])) {
    $test = "dans le if";
    try {
        $user = $_SESSION['user'];
        $idQuiz = 3;
        $progression = 100;
        $idUti = $user->getId();

        $cnx = new Base(BASE, USERNAME, PASSWORD);

        $lignes = $cnx->query('select * from participe where idUtilisateur=? AND idQuiz = ?', array($idUti,$idQuiz));
    
        // $debloqueMerveille = $cnx->query(
        //     "SELECT progression debloqueMerveille FROM participe WHERE idUtilisateur=? AND idQuiz = ?",
        //     array($idUti,$idQuiz)
        // );


        if (count($lignes) == 1) {
           
            // $cnx->update('update participe set progression=? WHERE idUtilisateur = ? AND idQuiz = ?', array($progression,$idUti,$idQuiz));
            if($progression== 100)
            {
                $test = "debloque prochaine merveille + update";
                $cnx->query(
                    "insert into debloque values (?,?,0,?);
                    update participe set progression=? WHERE idUtilisateur = ? AND idQuiz = ? ",
                    array($idQuiz + 1, $idUti,null, $progression, $idUti, $idQuiz)
                );
            }
            else
            {
                $cnx->update(' update participe set progression=? WHERE idUtilisateur = ? AND idQuiz = ?',
                array($progression,$idUti,$idQuiz));
                $test= "update";
            } 
        }
        else{

            if($progression== 100)
            {
                $test = "debloque prochaine merveille + insert";
                $cnx->query(
                    "insert into debloque values (?,?,0,?);
                    insert into participe values (?,?,?) ",
                    array($idQuiz + 1, $idUti,null,$idQuiz,$idUti, $progression));
            }
            else
            {
                $test = "insert";
                $cnx->insert(
                "insert into participe values (?,?,?) ",
                array($idQuiz,$idUti,$progression));
            } 
            
            // success("", "../views/quiz.php");
            $test = "insert";
    }    
    } catch (\Throwable $th) {
        // error("Problème lors de l'insertion du quiz", "../views/quiz.php");
    }
// }else{
//     $test = "dans le else";
// }
?>
