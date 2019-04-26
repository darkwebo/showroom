<?PHP
include "../../core/fournisseurC.php";
include "../../entites/fournisseur.php";

$fournisseurC=new FournisseurC();

if (isset($_POST['ajouter'])){
	
	$email = $_POST['email'];
	$nom = $_POST['nom'];
	$tel = $_POST['tel'];
	$adresse = $_POST['adresse'];

	$fournisseur=new Fournisseur($email,$nom,$tel,$adresse);	
    $fournisseurC->ajouterFournisseur($fournisseur);
	header('Location: ../fournisseur.php');
}

?>