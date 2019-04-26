<?PHP
include "D:\wamp64\www\auto\TheAutocars\core\cars.php";
$cars=new cars();
if (isset($_POST["name"])){
	$cars->supprimercar($_POST["name"]);
	header('Location:user-dashboard-manage-ads.php');
}

?>