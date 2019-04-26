<?php
class Produit {
	private $id;
	private $nom;
	private $image;
	private $prix;
	private $quantite;
    private $description;
	private $categorie_id;
	private $fournisseur_id;



	function __construct($nom,$image,$prix,$quantite,$description,$categorie_id,$fournisseur_id){
		$this->nom=$nom;
		$this->image=$image;
		$this->prix=$prix;
		$this->quantite=$quantite;
		$this->description=$description;
	    $this->categorie_id=$categorie_id;
		$this->fournisseur_id=$fournisseur_id;



	}
	function getId(){
		return $this->id;
	}
	function getNom(){
		return $this->nom;
	}
	function getImage(){
		return $this->image;
	}
	function getPrix(){
		return $this->prix;
	}
	function getQuantite(){
		return $this->quantite;
	}
	function getDescription(){
		return $this->description;
	}
	function getCategorie_id(){
		return $this->categorie_id;
		
	}
	function getFournisseur_id(){
		return $this->fournisseur_id;
	}
	function setId($id){
		$this->id=$id;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function setImage($image){
		$this->image;
	}
	function setPrix($prix){
		$this->prix=$prix;
	}
	function setQuantite($quantite){
		$this->quantite=$quantite;
	}
	function setDescription($description){
		$this->description=$description;
	}
	function setCategorie_id($categorie_id){
		$this->categorie_id=$categorie_id;
	}
	function setFournisseur_id($fournisseur_id){
		$this->fournisseur_id=$fournisseur_id;
	}
}

?>
	