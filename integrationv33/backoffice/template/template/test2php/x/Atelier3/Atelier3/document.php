<?php
class document{
	//attributs
	protected $reference;
	protected $nom;
	protected $date_creation;
	protected $prix;
	protected $auteur;
	protected $type;
	//constructeur
	function __construct($ref,$nom,$date,$prix,$auteur){
		$this->reference=$ref;
		$this->nom=$nom;
		$this->date_creation=$date;
		$this->prix=$prix;
		$this->auteur=$auteur;
	}
	function getReference(){
		return $this->reference;
	}
	function getNom(){
		return $this->nom;
	}
	function getDate_Creation(){
		return $this->date_creation;
	}
	function getPrix(){
		return $this->prix;
	}
	function getAuteur(){
		return $this->auteur;
	}
	
	function setReference($ref){
		 $this->reference=$ref;
	}
	function setNom($nom){
		$this->nom=$nom;
	}
	function setDate_Creation($date){
	 $this->date_creation=$date;
	}
	function setPrix($prix){
		 $this->prix=$prix;
	}
	function setAuteur($auteur){
		$this->auteur=$auteur;
	}
	
	//function insertion
	public function insertDocument($document,$conn)
	{
		$req = "INSERT INTO `reference`(`reference`, `nom`, `dateCreation`, `Prix`, `auteur`) 
VALUES ('".$document->getReference()."','".$document->getNom()."','".$document->getDate_Creation()."',
'".$document->getPrix()."','".$document->getAuteur()."')";
	$conn->exec($req);
	}
	public function afficheDocument($conn)
	{
		$req = "SELECT * FROM `reference`;";
		$liste=$conn->query($req);
		return $liste->fetchAll();
	}
	public function suppDocument($reference,$conn)
	{
		$req = "DELETE FROM `reference` WHERE reference = '$reference';";
		$conn->exec($req);
	}
	public function modifDocument($document,$conn)
	{
		$req = "UPDATE `reference` SET `reference`='".$document->getReference()."',
		`nom`='".$document->getNom()."',`dateCreation`='".$document->getDate_Creation()."',
		`Prix`='".$document->getPrix()."',`auteur`='".$document->getAuteur()."' WHERE reference = '".$document->getReference()."';";
		$conn->query($req);
	}
	public function rechercheDocument($reference,$conn)
	{
		$req = "SELECT * FROM `reference` WHERE reference = '$reference';";
		$list = $conn->query($req);
		return $list->fetchAll();
	}
}


?>