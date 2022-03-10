<?php

require_once('../views/common.php');
// echo("TEST");
try {
   
    // Check auth and retrieve user

    if (!isset($_SESSION['user'])) {
        http_response_code(401); //unauthorized

        return;
    }

    $user = $_SESSION['user'];

    // Retrieve and parse JSON data

    $data = json_decode(file_get_contents('php://input'), true);

    if ($data == null) { // Retourner 400 client (Bad request)

        http_response_code(400);

        return;
    }

    
    
    
    $idQuiz = $data['nomQuiz'];


    $progression = $data['score'];


    $idUti = $user->getId();

    $cnx = new Base(BASE, USERNAME, PASSWORD);



    // Mise à jour / création de la réponse au quiz

    $lignes = $cnx->query(
        'select * from participe where idUtilisateur=? AND idQuiz = ?',
        array($idUti,$idQuiz)
    );

    $lignesMerveille = $cnx->query(
        'select * from debloque where idUtilisateur=? AND idMerveille = ?',
        array($idUti,$idQuiz + 1)
    );

    

    if (count($lignes) == 1) { // Previous scores
        $cnx->update(
            "update participe set progression=? WHERE idUtilisateur = ? AND idQuiz = ?",
            array($progression, $idUti, $idQuiz)
        );
    } else {
        $cnx->insert(
            "insert into participe (idQuiz, idUtilisateur, progression) values (?,?,?) ",
            array($idQuiz, $idUti, $progression)
        );
    }

    

    // Mise à jour de la progression si le score est 50

    if ($progression >= 50 && $idQuiz < 7) {
        echo($idQuiz);
        $cnx->query(
            "insert into debloque (idMerveille, idUtilisateur, progression, recommandation) values (?,?,0,?);",
            array($idQuiz + 1, $idUti, null)
        );
    }


} catch (\Throwable $th) {
    header('Content-Type: application/json; charset=utf-8');
    echo($idQuiz);
    echo (json_encode(array('idQuiz'=>$idQuiz,'message' => $th->getMessage(), 'trace' => $th->getTraceAsString())));
    // var_dump($data);
    http_response_code(500);
    

}

?>

