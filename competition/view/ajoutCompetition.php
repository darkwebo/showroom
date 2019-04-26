<?PHP
include "../entities/competition.php";
include "../core/competitionC.php";

if (isset($_POST['nom']) and isset($_POST['nom_c_s']) and isset($_POST['heure']) and isset($_POST['date']) and isset($_POST['cout'])and isset($_POST['type'])){
$competition1=new Competition($_POST['nom'],$_POST['nom_c_s'],$_POST['heure'],$_POST['date'],$_POST['cout'],$_POST['type']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$competition1C=new CompetitionC();

$competition1C->ajouterCompetition($competition1);

header('Location: afficherCompetition.php');

}else{
	echo "vérifier les champs";
}
//*/

?>
