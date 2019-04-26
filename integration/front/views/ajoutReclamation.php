<?PHP
include "../entites/reclamation.php";
include "../core/reclamationC.php";

if (isset($_POST['id_reclamation']) and isset($_POST['type']) and isset($_POST['etat']) and isset($_POST['REC']) )
{
$reclamation1=new Reclamation($_POST['id_reclamation'],$_POST['type'],$_POST['etat'],$_POST['REC']);
$reclamation1C=new ReclamationC();
$reclamation1C->ajouterReclamation($reclamation1);
header('Location: afficherReclamation.php');
	
}
else
{
	echo "vérifier les champs";
}
//*/

?>