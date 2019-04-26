
<?php
Class Produit
{
	private $id; 
	private $nom; 
	private $poids; 
	private $quantitee;
	private $prix; 


	public function postproduit()
	{
	try
    {
        $db = new PDO('mysql:host=localhost;dbname=web;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
              $req = $db->query('SELECT nom FROM produit');
              return $req;	
	}

	public function compte_client()
	{
		try
    {
        $db = new PDO('mysql:host=localhost;dbname=web;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
              $req = $db->query('SELECT count(*) AS compte FROM client');
              $data=$req->fetch();
              $req->closeCursor();
              $compte=$data['compte'];
              return $compte;	
	}

    public function compte_produit()
    {
    	try
    {
        $db = new PDO('mysql:host=localhost;dbname=web;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
              $req = $db->query('SELECT count(*) AS compte FROM produit');
              $data=$req->fetch();
              $req->closeCursor();
              $compte=$data['compte'];
              return $compte;
    }
    public function afficher_detail_produit($id)
    {
    	try
    {
        $db = new PDO('mysql:host=localhost;dbname=web;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
              $req = $db->prepare('SELECT  *FROM produit WHERE nom=:id');
              $req->execute(array('id'=>$id));
              return $req;
             
             
    }
	
}

?>