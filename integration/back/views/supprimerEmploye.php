<?PHP
include "../core/employeC.php";
$employeC=new EmployeC();
if (isset($_POST["id"])){
	$employeC->supprimerEmploye($_POST["id"]);
	header('Location: afficherEmploye.php');
}

?>