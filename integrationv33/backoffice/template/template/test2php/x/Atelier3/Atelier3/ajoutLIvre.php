<?php
include ("livre.php");
include ("config.php");



if (isset($_POST['reference']) and isset($_POST['nom']) and isset($_POST['prix'])and isset($_POST['date_creation']) and isset($_POST['auteur']) and isset($_POST['nbPages']) ) 
{
$livre=new Livre($_POST['reference'],$_POST['nom'],$_POST['date_creation'],$_POST['prix'],$_POST['auteur'],$_POST['nbPages']);	
$c=new config();
$conn=$c->getConnexion();
$livre->insertLivre($livre,$conn);
header("location:afficheLivre.php");

}
else{
	echo "Insertion échouée";
}