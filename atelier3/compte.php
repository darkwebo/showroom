<?PHP
class Compte{
  protected $id;
  protected $numCompte;
  protected $solde;
	protected $cin;

	function __construct($id,$numCompte,$solde,$cin){
    $this->id=$id
    $this->numCompte=$numCompte
    $this->solde=$solde;

		$this->cin=$cin;

	}


	function getId(){
		return $this->id;
	}
	function getNumCompte(){
		return $this->numCompte;
	}
	function getSolde(){
		return $this->solde;
	}

  function getCin(){
		return $this->cin;
	}


  function setId(){
		$this->id=$id;
	}
	function setNumCompte(){
	$this->numCompte=$numCompte;
	}
	function setSolde(){
		$this->solde=$solde;
	}
	

  function setCin(){
	$this->cin=$cin;
	}


}

?>
