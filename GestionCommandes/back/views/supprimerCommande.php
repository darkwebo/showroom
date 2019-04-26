<?PHP
include "../core/commandeC.php";
$commandeC =new CommandeC();
if (isset($_POST["prenom"])){
	$commandeC->supprimerCommande($_POST["prenom"]);
	header('Location: listeCommandeAdmin.php');
}

?>
