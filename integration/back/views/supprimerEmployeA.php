<?PHP
include "../core/employeA.php";
$employeA=new EmployeA1();
if (isset($_POST["id"])){
	$employeA->supprimerEmployeA($_POST["id"]);
	header('Location: afficherEmployeA.php');
}

?>