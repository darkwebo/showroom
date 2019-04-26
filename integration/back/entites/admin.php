<?PHP
class admin{
	private $idA;
	private $nomA;
	private $prenomA;
	private $telephoneA;
    private $mailProf;
    private $numFax;
	private $passwordA;
		
	function __construct($idA,$nomA,$prenomA,$telephoneA,$mailProf,$numFax,$passwordA){
		$this->idA=$idA;
		$this->nomA=$nomA;
		$this->prenomA=$prenomA;
		$this->telephoneA=$telephoneA;
        $this->mailProf=$mailProf;
        $this->numFax=$numFax;
		$this->passwordA=$passwordA;
		
	}
	
	function getidA(){
		return $this->idA;
	}
	function getnomA(){
		return $this->nomA;
	}
	function getprenomA(){
		return $this->prenomA;
	}
	function getmailProf(){
		return $this->mailProf;
	}
	function gettelephoneA(){
		return $this->telephoneA;
	}
	function getnumFax(){
		return $this->numFax;
	}
	function getpasswordA(){
		return $this->passwordA;
	}

	function setidA($idA){
		$this->idA=$idA;
	}

	function setnomA($nom){
		$this->nomA=$nom;
	}
	function setprenomA($prenom){
		$this->prenomA=$prenom;
	}
	function setmailProf($mailProf){
		$this->mailProf=$mailProf;
	}
	function settelephoneA($telephoneA){
		$this->telephoneA=$telephoneA;
	}
	function setnumFax($numFax){
		$this->numFax=$numFax;
	}
	function setpasswordA($passwordA){
		$this->passwordA=$passwordA;
	}
	
	//function setNbHeures($nbHeures){
		//$this->nbHeures=$nbHeures;
	//}
	//function setTarifHoraire($tarifHoraire){
		//$this->tarifHoraire=$tarifHoraire;
	//}
	
}

?>