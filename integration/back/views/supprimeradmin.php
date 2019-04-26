<?PHP
include "../core/adminC.php";
$adminC=new adminC();
if (isset($_POST["idA"])){
	$adminC->supprimeradmin($_POST["idA"]);
	header('Location: afficheradmin.php');
}

?>