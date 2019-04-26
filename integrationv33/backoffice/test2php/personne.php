<?php
class client 
{
	
  private $nom;
  private $qte;
  private $prix;
  
  function __construct($n,$p,$a)
  {
	   $this->nom=$n;
	   $this->qte=$p;
     $this->prix=$a;
	  
	  
  }
  function getNom()
  {
	  return $this->nom ;
  }
  function getQte()
  {
	  return $this->qte ;
  }
  function getPrix()
  {
	  return $this->prix ;
  }
  
  function setNom ($n)
  {
	  $this->nom=$n;
  }
  
 
} 
  $p= new personne ("benfoulen ","foulen",100);  // creation du personne foulen 
 // echo "le nom de la personne est  ".$p->getNom()." son  prenom est ".$p->getPrenom()."son age est ".$p->getAge();
 // echo  "</br>";
  
  
 
  

 
    
  
  

  
?>