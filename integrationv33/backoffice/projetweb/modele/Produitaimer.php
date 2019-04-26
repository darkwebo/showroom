<?php
class Produit_aimer
{
	public function list_client($id)
	{
		try
	   {
        $db = new PDO('mysql:host=localhost;dbname=web;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));  
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
              $req = $db->prepare('SELECT  *FROM produitaimer WHERE id=:id');
              $req->execute(array('id'=>$id));
              return $req;	
	}
	public function list_produit($id)
	{
		try
	   {
        $db = new PDO('mysql:host=localhost;dbname=web;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));  
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
              $req = $db->prepare('SELECT  *FROM produitaimer WHERE client=:id');
              $req->execute(array('id'=>$id));
              return $req;	
	}
     public function compte_produit($client)
     {
     		try
	   {
        $db = new PDO('mysql:host=localhost;dbname=web;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));  
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
             	
              
	          
     	      $req = $db->prepare('SELECT COUNT(*) as nombre FROM produitaimer WHERE client =:client');
              $req->execute(array('client'=>$client));
              $data=$req->fetch();
              $req->closeCursor();
              $nombre=$data['nombre'];
              return $nombre;
              
     }

     public function  afficher_nombre_jaime()
     {
     		try
	   {
        $db = new PDO('mysql:host=localhost;dbname=web;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));  
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
     	$req = $db->query('SELECT nom , COUNT(*) as nombre ,client FROM produitaimer GROUP BY id');
             // $req->execute(array('client'=>$client));
              
              return $req;
     }
     public function selectionner_client($nom)
     {
        try 
     {
        $db = new PDO('mysql:host=localhost;dbname=web;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));  
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

     	$req=$db->prepare('SELECT mail FROM client where id=:nom');
     	$req->execute(array('nom'=>$nom));
     	$data=$req->fetch();
        $req->closeCursor();
        $email=$data['mail'];
        return $email;
     }
     public function list_client_nom($nom)
	{
		try
	   {
        $db = new PDO('mysql:host=localhost;dbname=web;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));  
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
              $req = $db->prepare('SELECT client FROM produitaimer WHERE nom=:nom');
              $req->execute(array('nom'=>$nom));
              return $req;	
	}
	  public function afficher_client($id)
	  {
	  	try
	   {
        $db = new PDO('mysql:host=localhost;dbname=web;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));  
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
              $req = $db->prepare('SELECT *FROM client  WHERE id=:id');
              $req->execute(array('id'=>$id));
              return $req;
	  }
}
?>