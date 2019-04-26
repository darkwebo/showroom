<?PHP
include "../confige.php";

class Reclamation
{
		private $num;
	private $id;
	private $nom;
	private $mail;
	private $message;
	private $sujet;
		private $id_vente;



	function __construct(/*$id,$nom,$mail,$sujet,$message*/)
	{
		/*$this->id=$id;
		$this->nom=$nom;
		$this->mail=$mail;
		$this->sujet=$sujet;
		$this->message=$message;*/
	}
		function getNum()
	{
		return $this->num;
	}
	function getId()
	{
		return $this->id;
	}
	function getNom()
	{
		return $this->nom;
	}
	function getMail()
	{
		return $this->mail;
	}

		function getSujet()
	{
		return $this->sujet;
	}
	function getMessage()
	{
		return $this->message;
	}
			function getId_vente()
	{
		return $this->id_vente;

	}
	function setNum($num)
	{
		$this->num=$num;
	}
	function setId($id)
	{
		$this->id=$id;
	}
	
	function setNom($nom)
	{
		$this->nom=$nom;
	}
	function setMail($mail)
	{
		$this->mail=$mail;
	}

	function setsujet($sujet)
	{
		$this->sujet=$sujet;
	}

	function setMessage($message)
	{
		$this->message=$message;
	}

	function setId_vente($id_vente)
	{
		$this->id_vente=$id_vente;
	}
}
	