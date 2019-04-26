<?PHP
include "../entites/employeA.php";
include "../core/employeA.php";

if (isset($_POST['id']) and isset($_POST['date']) and isset($_POST['heure']) and isset($_POST['lieu'])and isset($_POST['sujet'])){
$employe1=new EmployeA($_POST['id'],$_POST['date'],$_POST['heure'],$_POST['lieu'],$_POST['sujet']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$employe1C=new EmployeA1();
$employe1C->ajouterEmployeA($employe1);
header('Location: mailbox-compose.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>