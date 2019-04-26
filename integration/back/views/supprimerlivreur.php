<?PHP
include "../core/livreurC.php";
$livreurC=new livreurC();
if (isset($_POST["idP"])){
	$livreurC->supprimerlivreur($_POST["idP"]);
	header('Location: afficherlivreur.php');
}

?>