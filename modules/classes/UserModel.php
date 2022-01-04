<?php 
/****************************************************
Cette classe représente un user tel que lu dans la
table concours_photos.users
/****************************************************/
class UserModel
{
	// les données membres représentent les colonnes de la table concours_photos.users
	protected $id;		public function getId() { return $this->id;}
	protected $pseudo;		public function getPseudo() { return $this->pseudo;}
	protected $mail;	public function getMail() { return $this->mail;}
	protected $motdepasse;		public function getMotDePasse() { return $this->motdepasse;}


	// constructeur classique
	public function __construct($id, $pseudo, $mail, $motdepasse)
	{
		$this->id = $id;;
		$this->pseudo = $pseudo;
		$this->mail = $mail;
		$this->motdepasse = $motdepasse;
	}

	// cette méthode statique (appel par PhotoViewe::auth ou PhotoMosel::auth)
	// prend en paramètres un couple email/mot de passe et vérifie si ce couple existe en
	// base de données.
	// si oui : l'objet de type UserViewer est renvoyé en valeur de retout
	// si non : null est renvoyé en valeur de retour
	public static function auth($mail, $motdepasse)
	{
		$cnx = new Base();
		try {
			$lignes = $cnx->query("select * from utilisateurs where mail=? and motdepasse=?", 
				array($mail, sha1($motdepasse)));
			if (count($lignes)==1) 
			{
				$user = new UserViewer($lignes[0]['id'], $lignes[0]['pseudo'], $lignes[0]['mail'], $lignes[0]['motdepasse']);
				return $user;
			}
			else return null;
		}
		catch (PDOException $e)
		{
			return null;
		}
	}
	
	// Cette fonction statique (appel par PhotoViewe::checkPwd ou PhotoMosel::checkPwd)
	// attend en paramètres l'id d'un utilisateur et son supposé mot de passe.
	// la méthode renvoie 1 si le mot de passe est correct, 0 sinon, ou -1 si une
	// erreur SQL s'est produite
	public static function checkPwd($id, $motdepasse)
	{
		$cnx = new Base();
		try {
			$lignes = $cnx->query("select * from utilisateurs where id=? and motdepasse=?", 
				array($id, sha1($motdepasse)));
			if (count($lignes)==1)
			{
				return 1;
			}
			else return 0;
		}
		catch (PDOException $e)
		{
			return -1;
		}
	}
	
	// cette méthode statique met à jour les données personnelles d'un utilisateur
	// elle renvoiie true si tout s'est bien passé, false sinon
	public static function update($id, $pseudo, $mail, $motdepasse)
	{
		$cnx = new Base();
		try {
			$cnx->update("update utilisateurs set pseudo=?,".
				" mail=?, motdepasse=? where id=?", 
				array($pseudo, $mail, $motdepasse, $id));
			return true;
		}
		catch (PDOException $e)
		{
			return false;
		}
	}
	
	// cette méthode statique met à jour le mot de passe d'un utilisateur
	// elle renvoiie true si tout s'est bien passé, false sinon
	public static function changeMdp($id, $newMdp)
	{
		$cnx = new Base();
		try {
			$cnx->update("update utilisateurs set motdepasse=? where id=?", 
				array(sha1($newMdp), $id));
			return true;
		}
		catch (PDOException $e)
		{
			return false;
		}
	}

	// cette méthode statique supprime un utilisateur de la base de données
	// ainsi que toutes ses photos (base de données ET fichiers)
	// elle renvoiie true si tout s'est bien passé, false sinon
	public static function delete($id)
	{
		if ($id==1) return false;
		$cnx = new Base();
		try {
			$cnx->delete("delete from utilisateurs where id=?", array($id));
			
			return true;
		}
		catch (PDOException $e)
		{
			return false;
		}
	}
	
	// cette méthode statique renvoie l'utilisateur de la table concours_photos.users
	// qui corresponde à l'id passé en paramètre.
	// elle renvoie un objet de type UserViewer si tout s'est bien passé, ou null sinon
	public static function loadFromId($id)
	{
		$cnx = new Base();
		try {
			$lignes = $cnx->query("select * from utilisateurs where id=?", 
				array($id));
			if (count($lignes)==1) 
			{
				$user = new UserViewer($lignes[0]['id'], $lignes[0]['pseudo'], $lignes[0]['mail'], 
					$lignes[0]['motdepasse']);
				return $user;
			}
			else return null;
		}
		catch (PDOException $e)
		{
			return null;
		}
		
	}
	
}








