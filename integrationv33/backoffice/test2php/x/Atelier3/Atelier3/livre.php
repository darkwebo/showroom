<?php
include("document.php");
class Livre extends document{
	private $nbPages;

	
	function __construct($ref,$nom,$date,$prix,$auteur,$nbP){
		parent::__construct($ref,$nom,$date,$prix,$auteur);
		$this->nbPages=$nbP;
		
		
		
	}
	
	function getNbPages(){
		return $this->nbPages;
		
	}
	function setNbPages($nbp){
		$this->nbPages=$nbp;
		
	}
	public function insertLivre($livre,$conn)
	{
		$req = "INSERT INTO `reference`(`reference`, `nom`, `dateCreation`, `Prix`, `auteur`, `nbPages`, `Type`) 
		VALUES ('".$livre->getReference()."','".$livre->getNom()."','".$livre->getDate_Creation()."',
		'".$livre->getPrix()."','".$livre->getAuteur()."','".$livre->getNbPages()."','livre')";
		$conn->exec($req);
	}
	public function afficheLivre($conn)
	{
		$req = "SELECT * FROM `reference` WHERE type = 'livre';";
		$result = $conn->query($req);
		return $result->fetchAll();
	}
	public function suppLivre($reference,$conn)
	{
		$req = "DELETE FROM `reference` WHERE reference = '$reference';";
		$conn->exec($req);
	}
	public function modifLivre($livre,$conn)
	{
		$req = "UPDATE `reference` SET `reference`='".$livre->getReference()."',
		`nom`='".$livre->getNom()."',`dateCreation`='".$livre->getDate_Creation()."',
		`Prix`='".$livre->getPrix()."',`auteur`='".$livre->getAuteur()."' ,`nbPages`='".$livre->getNbPages()."',`Type`='livre' WHERE reference = '".$livre->getReference()."';";
		//var_dump($req);exit();
		$conn->query($req);
	}
	public function rechercheLivre($search,$conn)
	{
		$req = "SELECT * FROM `reference` WHERE nom like '%".$search."%';";
		$list = $conn->query($req);
		return $list->fetchAll();
	}
	
}