<?php 
include "personne.php";
 
class Enseignant extends  personne 

{
	public $salaire ;
	  
	  function __construct($n,$p,$a,$s)
	  {
	
		parent ::__construct($n,$p,$a);
		
		
		$this->salaire=$s;
	   }
		
	
	function Setsalaire($s)
	{
		$this->salaire=$s;
	}
	
		
}

$ens1=new Enseignant ("Rakkez","Bacem",30,1400);

echo "le prenom du prof est ".$ens1->getPrenom()." son salaire est ".$ens1->salaire;















?>