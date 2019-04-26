<?PHP
class option{
	

	private $opt;


	
	function __construct($opt){
		$this->opt=$opt;
	}
	
	
	function getopt(){
		return $this->opt;
	}
	
	
	
	function setopt($opt){
		$this->opt=$opt;
	}
	
	
}

?>