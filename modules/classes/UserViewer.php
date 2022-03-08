<?php 

/****************************************************
Cette classe représente la partie Viewer d'un utilisateur
/****************************************************/
class UserViewer extends UserModel
{

	
	public function getFullName()
	{
		return $this->pseudo;
	}

}