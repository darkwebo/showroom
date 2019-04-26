<?php
include_once 'confige.php';
include_once '../entites/Produitaimer.php';

class Produit_jaime_manager
{
public function ajouter($pro_aime ,$client)
{   
	$id=$pro_aime->get_id();
	$nom=$pro_aime->get_nom();
	$prix=$pro_aime->get_prix();
	$client=$pro_aime->get_client();

	$bdd=config::getConnexion();
	$req1=$bdd->prepare('SELECT COUNT(*) as i FROM produitaimer WHERE id=:id AND client=:client');
	$req1->execute(array('id'=>$id , 'client'=>$client));
    $data=$req1->fetch();
    $req1->closeCursor();
	if($data['i']==0)
	{
	$req = $bdd->prepare('INSERT INTO produitaimer(id,nom,prix,client)VALUES(:id,:nom, :prix, :client)');
     $req->execute(array(
	'id'=>$id,
	'nom' => $nom,
	'prix' => $prix,
	'client' => $client
	));	

	}
    
}
public function supprimer($id,$client)
{

	$bdd=config::getConnexion();
	$req1=$bdd->prepare('SELECT COUNT(*) as i FROM produitaimer WHERE id=:id AND client=:client');
	$req1->execute(array('id'=>$id , 'client'=>$client));
    $data=$req1->fetch();
    $req1->closeCursor();
	if($data['i']>0)
	{
	 $req = $bdd->prepare('DELETE FROM produitaimer WHERE id=:id  AND client=:client');
     $req->execute(array('id'=>$id ,'client'=>$client));	
	}
 
}
public function compte($id)
{
	$bdd=config::getConnexion();
	$req1=$bdd->prepare('SELECT COUNT(*) AS NOMBRE FROM produitaimer WHERE id=:id ');
	$req1->execute(array('id'=>$id));
$data=$req1->fetch();
$req1->closeCursor();
return $data['NOMBRE'];
}

}