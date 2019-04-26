<?PHP
include "../core/options.php";
$cars=new options();
if (isset($_POST["opt"])){
	$cars->supprimeroption($_POST["opt"]);
	header('Location:product-list.php');
}

?>
