<?php 
include_once '../entites/element.php';

$Comm = new Commande($_POST['id'],'','','','','','','');
$Pan = new Confirmer();
$Pan->supprimerCommande($Comm);
?>