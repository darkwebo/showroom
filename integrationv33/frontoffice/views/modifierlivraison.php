<?php
include "../entities/livraison.php";
include "../core/livraisonC.php";



if (isset($_POST['id'])) {
$livraisonC = new livraisonC();
$result = $livraisonC->recuperer_fac($_POST['id']);
foreach ($result as $row) {
$id = $row['numfacture'];
$author = $row['nomClient'];
$titre = $row['adresseClient'];
$datee = $row[':ville'];
$about = $row['numCommande'];

?>