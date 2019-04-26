<HTML>
<head>
</head>
<body>
<?PHP
include "../entites/livraison.php";
include "../core/livraisonC.php";
if (isset($_GET['idL'])){
	$livraisonC=new livraisonC();
    $result=$livraisonC->recupererlivraison($_GET['idL']);
	foreach($result as $row){
		$idL=$row['idL'];
		$adresse=$row['adresse'];
		$dat=$row['dat'];
?>
<form method="POST">
<table>
<caption>Modifier livraison</caption>
<tr>
<td>identifiant</td>
<td><input type="number" name="idL" value="<?PHP echo $idL ?>"></td>
</tr>
<tr>
<td>Adresse</td>
<td><input type="text" name="adresse" value="<?PHP echo $adresse ?>"></td>
</tr>
<tr>
<td>date</td>
<td><input type="text" name="dat" value="<?PHP echo $dat ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="idL_ini" value="<?PHP echo $_GET['idL'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$livraison=new livreur($_POST['idL'],$_POST['adresse'],$_POST['dat']);
	$livraisonC->modifierlivraison($livraison,$_POST['idL']);
	echo $_POST['idL'];
	header('Location: afficherlivraison.php');
}
?>	
</body>
</HTMl>

