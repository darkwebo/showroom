<?php 
include_once '../entities/element.php';

$Pan = new Confirmer();
$Pan->Supprimer_liste_Commande($_POST['id']);
?>