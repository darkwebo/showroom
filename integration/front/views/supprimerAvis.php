<?PHP
include "../core/avisC.php";
$avisC=new AvisC();
if (isset($_POST["note"])){
	$avisC->supprimerAvis($_POST["note"]);
	header('Location: afficherAvis.php');
}

?>