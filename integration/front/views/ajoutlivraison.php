<?PHP
include "../entities/livraison.php";
include "../core/livraisonC.php";

if (isset($_POST['idL']) and isset($_POST['adresse']) and isset($_POST['dat']))
{
$livraison1=new livraison($_POST['idL'],$_POST['adresse'],$_POST['dat']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$livraison1P=new LivraisonC();
$livraison1P->ajouterLivraison($livraison1);
header('Location: affiche.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>

