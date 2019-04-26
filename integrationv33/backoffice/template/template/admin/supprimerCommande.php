<?php 
include_once '../entities/element.php';

$Comm = new Commande($_POST['id'],'','','','');
$Pan = new Confirmer();
$Pan->supprimerCommande($Comm);
?>