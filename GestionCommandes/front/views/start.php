<?php

include "../entites/commande.php";
include "../core/commandeC.php";
$commande=new Commande('guesmi','linda',50,'menzah',20,5,500,'lalalla');
$commandeC=new CommandeC();
$commandeC->afficherCommande($commande);
echo "****************";
echo "<br>";
echo "prenom:".$commande->getPrenom();
echo "<br>";
echo "nom:".$commande->getNom();
echo "<br>";
echo "numero:".$commande->getNumero();
echo "<br>";
echo "adresse:".$commande->getAdresse();
echo "<br>";
echo "id_produit:".$commande->getIdProduit();
echo "<br>";
echo "quantite:".$commande->getQuantite();
echo "<br>";
echo "prixUnitaire:".$commande->getPrixUnitaire();
echo "<br>";
echo "Prix total: ";
$commandeC->calculerPrixTotal($commande);
echo "<br>";
echo "details:".$commande->getDetails();
echo "<br>";




?>
