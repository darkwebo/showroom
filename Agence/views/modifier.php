<?PHP
include "../core/service_client.php";
if (isset($_GET['identifiant'])){
	$ser=new service_client();
    $result=$ser->recuperer($_GET['identifiant']);
	foreach($result as $row){
		$identifiant=$row['identifiant'];
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$age=$row['age'];
		$sexe=$row['sexe'];
		$adresse=$row['adresse'];
		$email=$row['email'];
		$mdp=$row['mdp'];
		$fidelite=$row['fidelite'];
		header("location:afficherEmploye.php");
?>