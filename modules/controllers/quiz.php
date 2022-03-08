<?php
require_once('../views/common.php');
$test = "ne fait rien"; 
if (isset($_POST['nomQuiz'])) {
    $test = "dans le if";
    try {
        $user = $_SESSION['user'];
        $idQuiz = $_POST['nomQuiz'];
        $progression = $_POST['Score'];
        
        $idUti = $user->getId();
        $cnx = new Base(BASE, USERNAME, PASSWORD);
        $lignes = $cnx->query('select * from participe where idUtilisateur=?', array($idUti));
    
        if (count($lignes)>0) {
            $cnx->update('update * from participe set progression=? WHERE idUtilisateur = ?', array($progression,$idUti));
            $test = "update";
        } else {
            $cnx->insert(
                "insert into participe values (?,?,?) ",
                array($idQuiz,$idUti,$progression)
            );
            // success("", "../views/quiz.php");
            $test = "insert";
        }
    } catch (\Throwable $th) {
        error("Problème lors de l'insertion du quiz", "../views/quiz.php");
    }
}else{
    $test = "dans le else";
}
?>
