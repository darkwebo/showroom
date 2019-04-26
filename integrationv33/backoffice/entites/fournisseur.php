<?php
class Fournisseur {
	private $id;
	private $email;
	private $nom;
	private $tel;
    private $adresse;


	function __construct($email,$nom,$tel,$adresse){
		$this->email=$email;
		$this->nom=$nom;
		$this->tel=$tel;
		$this->adresse=$adresse;
	}
	function getId(){
		return $this->id;
	}
	function getNom(){
		return $this->nom;
	}
	function getEmail(){
		return $this->email;
	}
	function getTel(){
		return $this->tel;
	}
	function getAdresse(){
		return $this->adresse;
	}

	function setId($id){
		$this->id=$id;
	}

    function setEmail($email){
		 $this->email = $email;
	}
		function setNom($nom){
		$this->nom=$nom;
	}
	function setTel($tel){
		 $this->tel = $email;
	}
	function setAdresse($adresse){
		 $this->adresse = $adresse;
	}

}

?>
	