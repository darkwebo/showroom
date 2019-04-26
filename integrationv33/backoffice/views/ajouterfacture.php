<?PHP

include "../entites/facture.php";
include "../core/factureE.php";


/*if (isset($_POST['numfacture']) and isset($_POST['nomClient']) and isset($_POST['adresseClient']) and isset($_POST['montant']) and isset($_POST['numCommande']))
{*/
$fac =new facture($_POST['numfacture'],$_POST['nomClient'],$_POST['adresseClient'],$_POST['montant'],$_POST['numCommande']);

$facE=new factureE();
$facE->ajouter_fac($fac);
header('Location: ajouterfacturee.php');
  
/*}else{
  echo "vérifier les champs";
}  */  

?>
