<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/competition.php";
include "../core/competitionC.php";
if (isset($_GET['nom'])){
	$competitionC=new CompetitionC();
    $result=$competitionC->recupererCompetition($_GET['nom']);
	foreach($result as $row){
		$nom=$row['nom'];
		$nom_c_s=$row['nom_c_s'];
		$heure=$row['heure'];
		$date=$row['date'];
		$cout=$row['cout'];
    $cout=$row['type'];

?>
<form method="POST">
    <fieldset>
        <table>
            <legend>Modification d'une Compétition</legend>
            <tr>
                <td>Nom de la Compétition</td>
                <td><input type="text" name="nom"></td>
            </tr>
            <tr>
                <td>Nom du complexe sportif</td>
                <td><input type="text" name="nom_c_s"></td>
            </tr>
            <tr>
                <td>Heure</td>
                <td><input type="number" name="heure"></td>
            </tr>
            <tr>
                <td>date</td>
                <td><input type="date" name="date"></td>
            </tr>
            <tr>
                <td>cout</td>
                <td><input type="number" name="cout"></td>
            </tr>
            <tr>
                <td>Type</td>
                <td><input type="text" name="type"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="modifier" value="modifier"></td>
            </tr>
        </table>
    </fieldset>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$competition=new competition($_POST['nom'],$_POST['nom_c_s'],$_POST['heure'],$_POST['date'],$_POST['cout'],$_POST['type']);
	$competitionC->modifierCompetition($competition,$_POST['nom']);
	header('Location: afficherCompetition.php');
}
?>
</body>
</HTMl>
