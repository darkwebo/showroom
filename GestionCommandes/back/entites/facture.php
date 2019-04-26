<?php
class Facture{


	private $prenom;
  private $nom;
	private $cin;
  private $id_produit;
  private $nom_produit;
  private $quantite;
  private $prix;
  private $date;

	function __construct($prenom,$nom,$cin,$id_produit,$nom_produit,$quantite,$prix,$date){

		$this->prenom=$prenom;
    $this->nom=$nom;
		$this->cin=$cin;
    $this->id_produit=$id_produit;
    $this->nom_produit=$nom_produit;
    $this->quantite=$quantite;
    $this->prix=$prix;
    $this->date=$date;

	}

	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getCin(){
		return $this->cin;
	}

  function getIdProduit(){
    return $this->id_produit;
  }
  function getNomProduit(){
    return $this->nom_produit;
  }
  function getQuantite(){
    return $this->quantite;
  }
  function getPrix(){
    return $this->prix;
  }
  function getDate(){
    return $this->date;
  }



	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom;
	}
	function setCin($cin){
		$this->cin=$cin;
	}

  function setIdProduit($id_produit){
		$this->id_Produit=$id_produit;
	}
  function setNomProduit($nom_produit){
		$this->$nom_produit=$nom_produit;
	}
  function setQuantite($quantite){
    $this->quantite=$quantite;
  }
  function setDate($date){
    $this->date=$date;
  }

}

?>
