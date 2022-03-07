<?php

/****************************************************
Cette classe représente une merveille
/****************************************************/
class MerveilleModel
{

	//debloque la merveille d'identifiant ? à l'utilisateur ?
	public static function debloque($idMerveille, $idUser)
	{
		$cnx = new Base();
		try {
			$cnx->insert(
				"insert into debloque values (?,?,?,?)",
				array($idMerveille, $idUser, null, null)
			);
			return true;
		} catch (PDOException $e) {
			return false;
		}
	}

	//retourne le nombre de merveille débloqué par l'utilisateur ?
	public static function nombreMerveille($id)
	{
		$cnx = new Base();
		$nbDebloque = $cnx->query(
			"SELECT MAX(idMerveille) FROM debloque WHERE idUtilisateur=?",
			array($id)
		);
		return $nbDebloque[0]['MAX(idMerveille)'];
	}

	//affiche toutes les merveilles de l'utilisateur ? avec ou sans progression
	public static function affichageConnectee($id, $progression)
	{
		$cnx = new Base();
		$nbDebloque = $cnx->query(
			"SELECT MAX(idMerveille) FROM debloque WHERE idUtilisateur=?",
			array($id)
		);
		$numDebloque =  $nbDebloque[0]['MAX(idMerveille)'];

		for ($i = 1; $i <= 7; $i++) {
			if ($numDebloque >= $i) {
?>
				<a href="
		<?php
				switch ($i) {
					case 1:
						echo "tajMahal.php";
						break;
					case 2:
						echo "murailleChine.php";
						break;
					case 3:
						echo "petra.php";
						break;
					case 4:
						echo "machuPicchu.php";
						break;
					case 5:
						echo "chichenItza.php";
						break;
					case 6:
						echo "coliseeRome.php";
						break;
					case 7:
						echo "christRedempteur.php";
						break;
				}
		?>	
		">
					<img style="width: 200px; height: 150px;" src="../images/<?php echo $i; ?>.jpg" alt="">
					<?php
					if ($progression != 0) {
						$progression = $cnx->query(
							"SELECT progression FROM debloque WHERE idUtilisateur=? AND idMerveille=?",
							array($id, $i)
						);
					?>
						<p><?php echo $progression[0]['progression']; ?></p>
					<?php
					}
					?>
				</a>
				<br>
			<?php

			} else {
			?>
				<img style="width: 200px; height: 150px; opacity: 0.5;" src="../images/<?php echo $i; ?>.jpg" alt="">
				<br>
			<?php
			}
		}
	}


	//affiche toutes les merveilles et le taj mahal débloqué
	public static function affichageNonConnectee()
	{
		for ($i = 1; $i <= 7; $i++) {
			if ($i == 1) {
			?>
				<a href="/merveilles/tajMahal.php">
					<img style="width: 200px; height: 150px;" src="../images/<?php echo $i; ?>.jpg" alt="">
				</a>
				<br>
			<?php
			} else {
			?>
				<img style="width: 200px; height: 150px; opacity: 0.5;" src="../images/<?php echo $i; ?>.jpg" alt="">
				<br>
<?php
			}
		}
	}
}
