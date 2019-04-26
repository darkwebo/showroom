<?php 
include_once '../entites/element.php';

$total = $_POST['prixUnitaire']*$_POST['quantite'];

if (isset($_POST['quantite']) && !empty($_POST['quantite'])) {

    $Comm = new Commande($_POST['id'],'','',$_POST['quantite'],$total,'');
    $Pan = new Confirmer();
    $Pan->modifierCommande($Comm);
}
?>