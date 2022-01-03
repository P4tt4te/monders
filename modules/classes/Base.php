<?php

/****************************************************
Cette classe permet de se connecter à la base de données
et d'effectuer les différentes opérations sur celle-ci

NOTE CONCERNANT LES PARAMETRES DES METHODES DE CETTE CLASSE
Les méthodes delete, query, update et insert reçoivent 2
paramètres :
- le premier est une string contenant une requête sql contenant
  des points d'interrogation à la place des données lire/écrire
  dsepuis/vers la base de données
- le second est un tableau contenant les valeurs qui remplaceront
  les points d'interrogation dans la requêtes sql_regcase
 ATTENTION, il doit y avoir le même nombre de paramètres SQL
 (points d'interrogation) que d'éléments dans le tableau passé
 en 2ème paramètre (sinon PDOException)
/****************************************************/
class Base
{
	private $db; // objet de type PDO

	// Ce constructeur se connecte à la base de données
	public function __construct()
	{
		$this->db=new PDO('mysql:host=localhost;dbname='.BASE.';charset=utf8', USERNAME, PASSWORD);
		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	
	// effectue une commande SQL de type delete et ne renvoie rien
	public function delete($sql, $params=null)
	{
		$stmt = $this->db->prepare($sql);
		$stmt->execute($params==null?array():$params);
	}

	// effectue une commande SQL de type query et retourne la liste des lignes
	// qui ont pu être extraites de la base de données grâce à la requête SQL
	public function query($sql, $params=null)
	{
		$stmt = $this->db->prepare($sql);
		$stmt->execute($params==null?array():$params);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	// effectue une commande SQL de type insert et retourne l'id du dernier 
	// enregistrement créé dans la table grâce à la requête SQL
	public function insert($sql, $params=null)
	{
		$stmt = $this->db->prepare($sql);
		$stmt->execute($params==null?array():$params);
		return $this->db->lastInsertId();
	}

	// effectue une commande SQL de type update et ne renvoie rien
	public function update($sql, $params=null)
	{
		$stmt = $this->db->prepare($sql);
		$stmt->execute($params==null?array():$params);
	}

	// ferme la base de données
	public function close()
	{
		$this->db=null;
	}
	
	// idem
	public function __destruct()
	{
		$this->close();
	}
	
}

?>