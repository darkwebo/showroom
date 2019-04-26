<?php 
include_once "../entites/element.php";
$Comm = new Commande($_POST['id'],$_POST['article'],$_POST['prix'],$_POST['Quant'],$_POST['prix']*$_POST['Quant']);
$Pan = new Confirmer();
$Pan->ajouterCommande($Comm);
?>