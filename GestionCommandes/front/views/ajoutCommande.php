<?php
include "../entites/commande.php";
include "../core/commandeC.php";
if (isset($_POST['prenom']) and isset($_POST['nom']) and isset($_POST['numero']) and isset($_POST['adresse']) and isset($_POST['id_produit']) and isset($_POST['quantite']) and isset($_POST['prixUnitaire'])
and isset($_POST['details'])){
$commande1=new Commande($_POST['prenom'],$_POST['nom'],$_POST['numero'],$_POST['adresse'],$_POST['id_produit'],$_POST['quantite'],$_POST['prixUnitaire'],$_POST['details']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$commande1C=new CommandeC();

$commande1C->ajouterCommande($commande1);

header('Location: listedecommandes.php');

}
else{
	echo "verifier les champs";
}


?>
