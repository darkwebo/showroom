<?PHP
class Livreur{
	private $idP;
	private $nomP;
	private $prenomP;
	private $tarif;
	private $nbh;
	function __construct($idP,$nomP,$prenomP,$tarif,$nbh){
		$this->idP=$idP;
		$this->nomP=$nomP;
		$this->prenomP=$prenomP;
		$this->tarif=$tarif;
		$this->nbh=$nbh;
	}
	
	function getidP(){
		return $this->idP;
	}
	function getNom(){
		return $this->nomP;
	}
	function getPrenom(){
		return $this->prenomP;
	}
	function getTarif(){
		return $this->tarif;
	}
	function getNbh(){
		return $this->nbh;
	}

	function setidP($idP){
		$this->idP=$idP;
	}

	function setNom($nom){
		$this->nomP=$nom;
	}
	function setPrenom($prenomP){
		$this->prenomP=$prenomP;
	}
	function setTarif($tarif){
		$this->tarif=$tarif;
	}
	function setNbh($nbh){
		$this->nbh=$nbh;
	}
	//function setNbHeures($nbHeures){
		//$this->nbHeures=$nbHeures;
	//}
	//function setTarifHoraire($tarifHoraire){
		//$this->tarifHoraire=$tarifHoraire;
	//}
	
}

?>