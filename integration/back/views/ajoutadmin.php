<?PHP
include "../entities/admin.php";
include "../core/adminC.php";

if (isset($_POST['idA']) and isset($_POST['nomA']) and isset($_POST['prenomA']) and isset($_POST['telephoneA']) and isset($_POST['mailProf']) 
	and isset($_POST['numFax']) and isset($_POST['passwordA']))
{
$admin1=new admin($_POST['idA'],$_POST['nomA'],$_POST['prenomA'],$_POST['telephoneA'],$_POST['mailProf'],$_POST['numFax'],$_POST['passwordA']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$admin1C=new adminC();
$admin1C->ajouteradmin($admin1);
header('Location: index.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>

