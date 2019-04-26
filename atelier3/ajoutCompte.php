<?PHP
include "../atelier3/compte.php";
include "../atelier3/compteC.php";

if (isset($_POST['id']) and isset($_POST['numCompte']) and isset($_POST['solde']) and isset($_POST['cin']) ){
$compte1=new compte($_POST['id'],$_POST['numCompte'],$_POST['solde'],$_POST['cin']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$compte1C=new CompteC();
$compte1C->ajouterCompte($compte1);
header('Location: afficherCompte.php');

}else{
	echo "vérifier les champs";
}
//*/

?>
