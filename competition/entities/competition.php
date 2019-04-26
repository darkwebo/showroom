<?PHP
class Competition{
	private $nom;
	private $nom_c_s;
	private $heure;
	private $date;
	private $cout;
  private $type;
	function __construct($nom,$nom_c_s,$heure,$date,$cout,$type){
		$this->nom=$nom;
		$this->$nom_c_s=$nom_c_s;
		$this->heure=$heure;
		$this->date=$date;
		$this->cout=$cout;
    $this->type=$type;
	}

	function getNom(){
		return $this->nom;
	}
	function getNomCS(){
		return $this->nom_c_s;
	}
	function getHeure(){
		return $this->heure;
	}
	function getDate(){
		return $this->date;
	}
	function getCout(){
		return $this->cout;
	}
  function getType(){
		return $this->type;
	}


	function setNom($nom){
		$this->nom=$nom;
	}
	function setNomCS($nom_c_s){
		$this->nom_c_s=$nom_c_s;
	}
	function setHeure($heure){
		$this->nbHeures=$nbHeures;
	}
	function setDate($date){
		$this->date=$date;
	}
  function setCout(){
		 $this->cout=$cout;
	}
  function setType(){
		 $this->type=$type;
	}

}

?>
