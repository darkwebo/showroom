<?PHP
include "../entites/avis.php";
include "../core/avisC.php";

if (isset($_POST['note']) and isset($_POST['aviss']) )
{
$avis1=new Avis($_POST['note'],$_POST['aviss']);
$avis1C=new AvisC();
$avis1C->ajouterAvis($avis1);
header('Location: afficherAvis.php');
	
}
else
{
	echo "vérifier les champs";
}
//*/

?>