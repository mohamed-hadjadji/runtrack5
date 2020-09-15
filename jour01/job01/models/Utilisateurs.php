<?php
include 'db.php';
class Utilisateurs_model
{
	
	public function getUsers()
	{
      $db = PDO("mysql:host=".$host.";dbname=$dbname",'.$user.',$pass);
      $requete_get = $db->query("SELECT * FROM runtrack5");
      $requete_get->execute();
      $resultat_get = $requete_get->fetchAll(PDO::FETCH_ASSOC);
	}

	public function addUser($firstname, $lastname, $email)
	{
       $db = PDO("mysql:host=".$host.";dbname=$dbname",'.$user.',$pass);
     
       $requete_add = $db->query("INSERT INTO utilisateurs (firstname, lastname, email) VALUES ('$firstname, $lastname, $email') ");
	}
}