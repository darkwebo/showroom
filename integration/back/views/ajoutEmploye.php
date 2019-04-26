<?PHP
include "../entites/employe.php";
include "../core/employeC.php";

if (isset($_POST['id']) and isset($_POST['Produit']) and isset($_POST['PrixInit']) and isset($_POST['PrixFin'])and isset($_POST['Date'])){
$employe1=new Employe($_POST['id'],$_POST['Produit'],$_POST['PrixInit'],$_POST['PrixFin'],$_POST['Date']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$employe1C=new EmployeC();
$employe1C->ajouterEmploye($employe1);
header('Location: mailbox-compose.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>