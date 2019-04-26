<?php
Class ProduitPromo 
{
	private $date_de_debut_solde; 
	private $date_de_fin_solde;
	private $nom;
	private $pourcentage;

public function set_nom($nom){$this->nom=$nom;}

public function set_date_d($date_de_debut_solde){$this->date_de_debut_solde=$date_de_debut_solde;}

public function set_date_f($date_de_fin_solde){$this->date_de_fin_solde=$date_de_fin_solde;}

public function set_pourcentage($pourcentage){$this->pourcentage=$pourcentage;}

public function get_nom(){return $this->nom;}
public function get_date_d(){return $this->date_de_debut_solde;}
public function get_date_f(){return $this->date_de_fin_solde;}
public function get_pourcentage(){return $this->pourcentage;}	




public function postA_promotion($nom ,$date_de_debut_solde ,$date_de_fin_solde,$pourcentage){
	  try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=web;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
              $req = $bdd->prepare('INSERT INTO produitpromo(nom, date_debut_promo,date_fin_promo,pourcentage)VALUES(:nom, :date_de_debut_solde, :date_de_fin_solde,:pourcentage)');


$req->execute(array(
	'nom' => $nom,
	'date_de_debut_solde' => $date_de_debut_solde,
	'date_de_fin_solde' => $date_de_fin_solde,
	'pourcentage'=>$pourcentage
	));

	return $req;	
}
public function afficher_produit()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=web;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
              $req = $db->query('SELECT *FROM produitpromo');
              return $req;  
}


public function Modifier_promotion($date_de_debut_solde ,$date_de_fin_solde,$pourcentage , $id){
	  try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=web;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
              $req = $bdd->prepare('UPDATE produitpromo SET date_debut_promo=:date_de_debut_solde , date_fin_promo=:date_de_fin_solde , pourcentage=:pourcentage WHERE id=:id');

$req->execute(array(
	
	'date_de_debut_solde' => $date_de_debut_solde,
	'date_de_fin_solde' => $date_de_fin_solde,
	'pourcentage' =>$pourcentage,
	'id'=>$id
	));

	return $req;	
}
public function suprimer_promotion($id){
	  try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=web;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
              $req = $bdd->prepare('DELETE FROM produitpromo WHERE id=:id');

$req->execute(array('id'=>$id));

	return $req;	
}

public function rechercher_promotion($id){
      try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=web;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
              $req = $bdd->prepare('SELECT *FROM produitpromo WHERE id=:id');

$req->execute(array('id'=>$id));

    return $req;    
}
public function afficher_pro()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=web;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
              $req = $db->query('SELECT *FROM produitpromo');
              return $req;  
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
              $req = $db->query('SELECT nom, MAX(counted) as maximum,id FROM ( SELECT nom, COUNT(*) AS counted,id FROM produitaimer GROUP BY id ) AS counts');
              return $req;

             
              
}
public function rechercher_promotion_existe($nom){
      try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=web;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
              $req = $bdd->prepare('SELECT count(*) as nombre FROM produitpromo WHERE nom=:nom');

$req->execute(array('nom'=>$nom));

    return $req;    
}


}
?>