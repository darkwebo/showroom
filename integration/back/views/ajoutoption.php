<?PHP
include "../entites/option.php";
include "../core/options.php";

if (isset($_POST['description']) ){
$option1=new option($_POST['description']);
$option2=new options();
$option2->ajouteroption($option1);
header('Location:product-edit.php');
}
?>
