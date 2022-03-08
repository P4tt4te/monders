<?php

// script de connexion d'un utilisateur

	require_once ("../views/common.php");

if (isset($_POST['formConnexion'])) {
    $mail = $_POST['mail'];
    $motdepasse = $_POST['motdepasse'];
    $user = UserModel::auth($mail, $motdepasse);
    if ($user==null) {
        error(
            "Ce couple identifiant/mot de passe n'existe pas",
            "../views/connexion.php"
        );
    } else {
        $_SESSION['user'] = $user;
        header("Location: ../views/home.php");
    }
}