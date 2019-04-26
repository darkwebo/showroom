<?php 
include_once '../entites/element.php';

$Pan = new Confirmer();
$Pan->Supprimer_liste_Commande($_POST['id']);
?>