<?PHP

include "../entites/livraison.php";
include "../core/livraisonC.php";

/*if (isset($_POST['numfacture']) and isset($_POST['nomClient']) and isset($_POST['adresseClient']) and isset($_POST['montant']) and isset($_POST['numCommande']))
{*/
$liv =new livraison($_POST['numLivraison'],$_POST['nomClient'],$_POST['adresseClient'],$_POST['ville'],$_POST['numCommande']);


$livE=new livraisonC();
$livE->ajouter_liv($liv);
var_dump($liv);
header('Location: liv.php');
  
/*}else{
  echo "vérifier les champs";
}  */  

?>
