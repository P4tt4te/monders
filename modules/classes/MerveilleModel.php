<?php 

class MerveilleModel
{


	public static function debloque($idMerveille, $idUser)
	{
		$cnx = new Base();
		try {
            $cnx->insert("insert into debloque values (?,?,?,?)",
            array($idMerveille, $idUser, null, null));	
			return true;
		}
		catch (PDOException $e)
		{
			return false;
		}
	}
	

}








