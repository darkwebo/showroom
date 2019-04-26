<?php
include "../entites/facture.php";
include "../core/factureC.php";

if (isset($_POST['prenom']) and isset($_POST['nom']) and isset($_POST['cin'])  and isset($_POST['id_produit']) and isset($_POST['nom_produit']) and isset($_POST['quantite']) and isset($_POST['prix'])
and isset($_POST['date'])){
$facture1=new Facture($_POST['prenom'],$_POST['nom'],$_POST['cin'],$_POST['id_produit'],$_POST['nom_produit'],$_POST['quantite'],$_POST['prix'],$_POST['date']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3

$facture1C=new FactureC();
$facture1C->ajouterFacture($facture1);

header('Location: listeFactureAdmin.php');

}
else{
	echo "verifier les champs";
}
//*/

?>
