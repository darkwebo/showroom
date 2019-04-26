<?PHP
include "../entites/livreur.php";
include "../core/livreurC.php";

if (isset($_POST['idP']) and isset($_POST['nomP']) and isset($_POST['prenomP']) and isset($_POST['tarif']) and isset($_POST['nbh']))
{
$livreur1=new Livreur($_POST['idP'],$_POST['nomP'],$_POST['prenomP'],$_POST['tarif'],$_POST['nbh']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$livreur1P=new LivreurC();
$livreur1P->ajouterLivreur($livreur1);
header('Location: product-cart.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>

