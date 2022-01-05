<!-- div contenant le message d'erreur
     Cette div est cachée par défaut, mais quand  on appelle les fonctions global error ou success -->
     <div id='erreur'>
<?php
if (isset($_SESSION['erreur'])) {
	echo "<div id='titre'>Erreur</div>";
	echo $_SESSION['erreur'];
	unset($_SESSION['erreur']);
	echo "<script type='text/javascript'>divErr=document.getElementById(\"erreur\"); divErr.style.backgroundColor=\"#f08080\"; divErr.style.display=\"block\";</script>";
}
if (isset($_SESSION['success'])) {
	echo "<div id='titre'>Succès !</div>";
	echo $_SESSION['success'];
	unset($_SESSION['success']);
	echo "<script type='text/javascript'>divErr=document.getElementById(\"erreur\"); divErr.style.backgroundColor=\"#80f080\"; divErr.style.display=\"block\";</script>";
}

?>

</div>

