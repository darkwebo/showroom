<?PHP
include "../../core/fournisseurC.php";
$fournisseurC=new fournisseurC();
if (isset($_POST["id"])){
	$fournisseurC->supprimerFournisseur((int)$_POST["id"]);
	header('Location: ../fournisseur.php');
}

?>