<?php
class Commande{


	private $prenom;
  private $nom;
	private $numero;
	private $adresse;
  private $id_produit;
  private $quantite;
  private $prixUnitaire;
  private $details;
  
	function __construct($prenom,$nom,$numero,$adresse,$id_produit,$quantite,$prixUnitaire,$details){

		$this->prenom=$prenom;
    $this->nom=$nom;
		$this->numero=$numero;
		$this->adresse=$adresse;
    $this->id_produit=$id_produit;
    $this->quantite=$quantite;
    $this->prixUnitaire=$prixUnitaire;
    $this->details=$details;

	}

	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getNumero(){
		return $this->numero;
	}
	function getAdresse(){
		return $this->adresse;
	}
  function getIdProduit(){
    return $this->id_produit;
  }
  function getQuantite(){
    return $this->quantite;
  }
  function getPrixUnitaire(){
    return $this->prixUnitaire;
  }
  function getDetails(){
    return $this->details;
  }



	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom;
	}
	function setNumero($numero){
		$this->numero=$numero;
	}
	function setAdresse($adresse){
		$this->adresse=$adresse;
	}
  function setIdProduit($id_produit){
		$this->id_Produit=$id_produit;
	}
  function setQuantite($quantite){
    $this->quantite=$quantite;
  }
  function setDetails($details){
    $this->details=$details;
  }

}

?>
