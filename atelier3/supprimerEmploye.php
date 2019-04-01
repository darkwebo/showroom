<?PHP
include "../atelier3/employeC.php";
$employeC=new EmployeC();
if (isset($_POST["cin"])){
	$employeC->supprimerEmploye($_POST["cin"]);
	header('Location: afficherEmploye.php');
}

?>
