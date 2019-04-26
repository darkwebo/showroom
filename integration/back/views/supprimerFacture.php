<?PHP
include "../core/factureC.php";
$factureC =new factureC();
if (isset($_POST["prenom"])){
	$factureC->supprimerFacture($_POST["prenom"]);
	header('Location: listeFactureAdmin.php');
}

?>
