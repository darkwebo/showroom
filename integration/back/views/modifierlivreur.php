<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/livreur.php";
include "../core/livreurC.php";
if (isset($_GET['idP'])){
	$livreurC=new livreurC();
    $result=$livreurC->recupererlivreur($_GET['idP']);
	foreach($result as $row){
		$idP=$row['idP'];
		$nomP=$row['nomP'];
		$prenomP=$row['prenomP'];
		$tarif=$row['tarif'];
		$nbh=$row['nbh'];
?>
<form method="POST">
<table>
<caption>Modifier livreur</caption>
<tr>
<td>identifiant</td>
<td><input type="number" name="idP" value="<?PHP echo $idP ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nomP" value="<?PHP echo $nomP ?>"></td>
</tr>
<tr>
<td>prenom</td>
<td><input type="text" name="prenomP" value="<?PHP echo $prenomP ?>"></td>
</tr>
<tr>
<td>Description</td>
<td><input type="number" name="tarif" value="<?PHP echo $tarif ?>"></td>
</tr>
<tr>
<td>Prix</td>
<td><input type="number" name="nbh" value="<?PHP echo $nbh ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="idP_ini" value="<?PHP echo $_GET['idP'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$livreur=new livreur($_POST['idP'],$_POST['nomP'],$_POST['prenomP'],$_POST['tarif'],$_POST['nbh']);
	$livreurC->modifierlivreur($livreur,$_POST['idP']);
	echo $_POST['idP'];
	header('Location: afficherlivreur.php');
}
?>	
</body>
</HTMl>

