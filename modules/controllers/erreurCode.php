<!-- div contenant le message d'erreur
     Cette div est cachée par défaut, mais quand  on appelle les fonctions global error ou success -->
     <div id='erreur'>
<?php
if (isset($_SESSION['erreur'])) {
	echo "<div id='titre'>Erreur</div>";
	echo $_SESSION['erreur'];
	unset($_SESSION['erreur']);
	echo "<script type='text/javascript'>divErr=document.getElementById(\"erreur\"); divErr.style.color=\"red\"; divErr.style.display=\"block\"; divErr.style.textAlign=\"center\"; divErr.style.fontWeight=\"bold\"; divErr.style.margin=\"50px\";</script>";
}
if (isset($_SESSION['success'])) {
	echo "<div id='titre'>Succès !</div>";
	echo $_SESSION['success'];
	unset($_SESSION['success']);
	echo "<script type='text/javascript'>divErr=document.getElementById(\"erreur\"); divErr.style.color=\"green\"; divErr.style.display=\"block\"; divErr.style.textAlign=\"center\"; divErr.style.fontWeight=\"bold\"; divErr.style.margin=\"50px\";</script>";
}

?>

</div>

