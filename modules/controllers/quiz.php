<?php
require_once('../views/common.php');
if(isset($_POST['formQuiz'])){
    
    try {
        $user = $_SESSION['user'];
        $idQuiz = $_POST['nomQuiz'];
        $progression = $_POST['Score'];
        $idUti = $user->getId();
        $cnx = new Base(BASE, USERNAME, PASSWORD);
        $lignes = $cnx->query('select * from participe where idUtilisateur=?', array($idUti));
    
        if (count($lignes)>0) {
            error("", "../views/tajMahal.html");
            echo('error');
        } else {
            $user -> insertQuiz($idQuiz,$idUti,$progression);
            success("", "../views/quiz.php");
            echo('succes');
        }

    } catch (\Throwable $th) {
        error("Problème lors de l'insertion du quiz","../views/quiz.php");
    }   
}

?>