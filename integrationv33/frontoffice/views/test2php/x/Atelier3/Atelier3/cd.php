<?php
include("document.php");
class CD extends document{
	private $duree;
	private $capicite;

	
	function __construct($ref,$nom,$date,$prix,$auteur,$duree,$cap){
		parent::__construct($ref,$nom,$date,$prix,$auteur);
		$this->duree=$duree;
		$this->capacite=$cap;		
		
	}
	
	function getDuree(){
		return $this->duree;
		
	}
	function setDuree($duree){
		$this->duree=$duree;
		
	}
	function getCapacite(){
		return $this->capacite;
		
	}
	function setCapacite($cap){
		$this->capacite=$cap;
		
	}
	public function insertCD($cd,$conn)
	{
		
		$req = "INSERT INTO `reference`(`reference`, `nom`, `dateCreation`, `Prix`, `auteur`, `duree`, `capacite`, `Type`) 
		VALUES ('".$cd->getReference()."','".$cd->getNom()."','".$cd->getDate_Creation()."',
		'".$cd->getPrix()."','".$cd->getAuteur()."','".$cd->getDuree()."','".$cd->getCapacite()."','CD')";
		$conn->exec($req);
	}
	public function afficheCD($conn)
	{
		$req = "SELECT * FROM `reference` WHERE type = 'CD';";
		$result = $conn->query($req);
		return $result->fetchAll();
	}

}