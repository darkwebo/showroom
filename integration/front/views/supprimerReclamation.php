<?PHP
include "../core/reclamationC.php";
$reclamationC=new ReclamationC();
if (isset($_POST["id_reclamation"])){
	$reclamationC->supprimerReclamation($_POST["id_reclamation"]);
	header('Location: afficherReclamation.php');
}

?>