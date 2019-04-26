<?php
include ("livre.php");
include ("config.php");



if (isset($_POST['ref']) and isset($_POST['nom']) and isset($_POST['prix'])and isset($_POST['date']) and isset($_POST['auteur']) and isset($_POST['nb']) ) //and isset($_POST['jour'])and isset($_POST['nuit']) )
{
$livre=new Livre($_POST['ref'],$_POST['nom'],$_POST['date'],$_POST['prix'],$_POST['auteur'],$_POST['nb']);	
$c=new config();
$conn=$c->getConnexion();
$livre->insertLivre($livre,$conn);
header("location:afficheLivre.php");

}
else{
	echo "Insertion Ã©chouÃ©e";
}
