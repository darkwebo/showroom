<?PHP

class produitret
{
	private $id;
	private $designation;
	private $quantite;
	private $prix;

	function __construct()
	{
		
	}
	
	function getId()
	{
		return $this->id;
	}
	function getdesignation()
	{
		return $this->designation;
	}
	function getquantite()
	{
		return $this->quantite;
	}
	function getprix()
	{
		return $this->prix;
	}
	function setId($id)
	{
		$this->id=$id;
	}
	
	function setdesignation($designation)
	{
		$this->designation=$designation;
	}
	function setquantite($quantite)
	{
		$this->quantite=$quantite;
	}

	function setprix($prix)
	{
		$this->prix=$prix;
	}

}
    
?>