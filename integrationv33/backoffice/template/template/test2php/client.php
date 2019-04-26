<?php
class client 
{
	
  private $nom;
  private $qte;
  private $prix;
   private $img;
  private $date1;
  
  function __construct($n,$p,$a,$i)
  {
	   $this->nom=$n;
	   $this->qte=$p;
     $this->prix=$a;
	  $this->img=$i;
   
	  
	  
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
  
  
    function getImg()
  {
	  return $this->img ;
  }
  function getDate()
  {
	  return $this->date1 ;
  }
  
  function setNom ($n)
  {
	  $this->nom=$n;
  }
  
 
} 
 // $p= new client ("benfoulen ","foulen",100);  // creation du personne foulen 
 // echo "le nom de la personne est  ".$p->getNom()." son  prenom est ".$p->getPrenom()."son age est ".$p->getAge();
 // echo  "</br>";
  
  
 
  

 
    
  
  

  
?>