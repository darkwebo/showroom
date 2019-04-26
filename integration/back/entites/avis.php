<?PHP
class Avis{
	private $note;
	private $aviss;
	function __construct($n,$av){
		$this->note=$n;
		$this->aviss=$av;
	}
	
	function getNote(){
		return $this->note;
	}
	function getAvis(){
		return $this->aviss;
	}
	function setNote($n){
		$this->note=$n;
	}
	function setAvis($av){
		$this->aviss=$av;
	}
}
?>