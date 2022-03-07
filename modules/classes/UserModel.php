<?php 
/****************************************************
Cette classe représente un user
/****************************************************/
class UserModel
{
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

	// cette méthode statique (appel par UserViewer::auth ou UserModel::auth)
	// prend en paramètres un couple email/mot de passe et vérifie si ce couple existe en
	// base de données.
	// si oui : l'objet de type UserViewer est renvoyé en valeur de retout
	// si non : null est renvoyé en valeur de retour
	public static function auth($mail, $motdepasse)
	{
		$cnx = new Base();
		try {
			$lignes = $cnx->query("select * from Utilisateurs where mail=? and motdepasse=?", 
				array($mail, sha1($motdepasse)));
			if (count($lignes)==1) 
			{
				$user = new UserViewer($lignes[0]['idUtilisateur'], $lignes[0]['pseudo'], $lignes[0]['mail'], $lignes[0]['motdepasse']);
				return $user;
			}
			else return null;
		}
		catch (PDOException $e)
		{
			return null;
		}
	}
	
	// Cette fonction statique (appel par UserViewer::checkPwd ou UserModel::checkPwd)
	// attend en paramètres l'id d'un utilisateur et son supposé mot de passe.
	// la méthode renvoie 1 si le mot de passe est correct, 0 sinon, ou -1 si une
	// erreur SQL s'est produite
	public static function checkPwd($id, $motdepasse)
	{
		$cnx = new Base();
		try {
			$lignes = $cnx->query("select * from Utilisateurs where id=? and motdepasse=?", 
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
	// elle renvoie true si tout s'est bien passé, false sinon
	public static function update($id, $pseudo, $mail, $motdepasse)
	{
		$cnx = new Base();
		try {
			$cnx->update("update Utilisateurs set pseudo=?,".
				" mail=?, motdepasse=? where id=?", 
				array($pseudo, $mail, $motdepasse, $id));
			return true;
		}
		catch (PDOException $e)
		{
			return false;
		}
	}
	

	
}








