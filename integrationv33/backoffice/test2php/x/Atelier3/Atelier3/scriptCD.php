<?php
include("cd.php");
include("config.php");

//echo $_POST['cap'].''.$_POST['duree'];exit();

if (isset($_POST['cap']) and isset($_POST['duree']) )
{
	$cd=new CD($_POST['ref'],$_POST['nom'],$_POST['date'],$_POST['prix'],$_POST['auteur'],$_POST['duree'],$_POST['cap']);	
	$c=new config();
	$conn=$c->getConnexion();
	$cd->insertCD($cd,$conn);
	header("location:afficheCD.php");

}
else{
	echo "Insertion échouée";
}
