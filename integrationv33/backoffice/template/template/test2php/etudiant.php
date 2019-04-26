<?php
include "personne.php";

class etudiant  extends personne  

{
	public $classe ;  //
	function __construct($n,$p,$a,$c)
	{
		parent ::__construct($n,$p,$a);    //parent ::  => n'importe quelle methode du parent 

		$this->classe=$c;                  
	}
	
	}
	
	
	$e=new etudiant ("mhedhbi","mehdi",23,"3A18");
	
	//echo "</br> le nom de l etudiant est ".$e->getNom();
	//echo "la classe est ".$e->classe ;
	
?>