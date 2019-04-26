<?PHP
class Livraison{
	private $idL;
	private $adresse;
	private $dat;
	function __construct($idL,$adresse,$dat){
		$this->idL=$idL;
		$this->adresse=$adresse;
		$this->dat=$dat;
	}
	
	function getidL(){
		return $this->idL;
	}
	function getAdresse(){
		return $this->adresse;
	}
	function getDat(){
		return $this->dat;
	}

	function setidP($idL){
		$this->idL=$idL;
	}

	function setAdresse($adresse){
		$this->adresse=$adresse;
	}
	function setDat($dat){
		$this->dat=$dat;
	}
	//function setNbHeures($nbHeures){
		//$this->nbHeures=$nbHeures;
	//}
	//function setTarifHoraire($tarifHoraire){
		//$this->tarifHoraire=$tarifHoraire;
	//}
	
}

?>