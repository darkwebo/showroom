<?PHP
include "../core/cars.php";
$cars=new cars();
if (isset($_POST["id"])){
	$cars->supprimercar($_POST["id"]);
	header('Location:user-dashboard-manage-ads.php');
}

?>
