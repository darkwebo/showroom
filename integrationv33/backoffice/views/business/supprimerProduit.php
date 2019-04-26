<?PHP
include "C:/xampp/htdocs/backoffice/core/produitC.php";
$produitC=new ProduitC();
if (isset($_POST["id"])){
	$produitC->supprimerProduit((int)$_POST["id"]);
	header('Location: C:/xampp/htdocs/backoffice/entites/produit.php');
}

?>