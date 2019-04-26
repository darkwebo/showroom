<?PHP
include "../../core/fournisseurC.php";
include "../../entites/fournisseur.php";
$fournisseurC=new FournisseurC();

if (isset($_POST['modifier'])){
	
	$email = $_POST['email'];
	$nom = $_POST['nom'];
	$tel = $_POST['tel'];
	$adresse = $_POST['adresse'];

	$fournisseur=new Fournisseur($email,$nom,$tel,$adresse);	
    $fournisseurC->modifierFournisseur($fournisseur, (int)$_POST["id"]);
	header('Location: ../fournisseur.php');
}

?>