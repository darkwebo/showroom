<?PHP
class Reclamation{
	private $id_reclamation;
	private $type;
	private $etat;
	private $REC;
	function __construct($id,$t,$et,$rec){
		$this->id_reclamation=$id;
		$this->type=$t;
		$this->etat=$et;
		$this->REC=$rec;
	}
	
	function getId(){
		return $this->id_reclamation;
	}
	function getType(){
		return $this->type;
	}
	function getETAT(){
		return $this->etat;
	}
	function setId($id){
		$this->id_reclamation=$id;
	}
	function setType($t){
		$this->type=$t;
	}
	function setEtat($et){
		$this->etat=$et;
	}
	function getRec(){
		return $this->REC;
	}
	function setRec($rec){
		$this->REC=$rec;
	}
}
?>