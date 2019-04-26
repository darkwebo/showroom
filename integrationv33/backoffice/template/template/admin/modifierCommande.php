<?php 
include_once '../entities/element.php';

$total = $_POST['prixUnitaire']*$_POST['quantite'];

if (isset($_POST['search']) && !empty($_POST['search'])) {

    $Comm = new Commande($_POST['id'],'','',$_POST['quantite'],$total);
    $Pan = new Confirmer();
    $Pan->modifierCommande($Comm);
}
?>