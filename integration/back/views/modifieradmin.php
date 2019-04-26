<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/admin.php";
include "../core/adminC.php";
if (isset($_GET['idA'])){
	$adminC=new adminC();
    $result=$adminC->recupereradmin($_GET['idA']);
	foreach($result as $row){
		$idA=$row['idA'];
		$nomA=$row['nomA'];
		$prenomA=$row['prenomA'];
		$telephoneA=$row['telephoneA'];
		$mailProf=$row['mailProf'];
		$numFax=$row['numFax'];
		$passwordA=$row['passwordA'];
		
?>
<form method="POST">
<table>
<caption>Modifier admin</caption>
<tr>
<td>identifiant</td>
<td><input type="number" name="idA" value="<?PHP echo $idA ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nomA" value="<?PHP echo $nomA ?>"></td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="text" name="prenomA" value="<?PHP echo $prenomA ?>"></td>
</tr>
<tr>
<td>telephoneA</td>
<td><input type="number" name="telephoneA" value="<?PHP echo $telephoneA ?>"></td>
</tr>
<tr>
<td>mailProf</td>
<td><input type="text" name="mailProf" value="<?PHP echo $mailProf ?>"></td>
</tr>
<tr>
	<td>numFax</td>
<td><input type="number" name="numFax" value="<?PHP echo $numFax ?>"></td>
</tr>
<tr>
	<td>passwordA</td>
<td><input type="text" name="passwordA" value="<?PHP echo $passwordA ?>"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="idA_ini" value="<?PHP echo $_GET['idA'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$admin=new admin($_POST['idA'],$_POST['nomA'],$_POST['prenomA'],$_POST['telephoneA'],$_POST['mailProf'],$_POST['numFax'],$_POST['passwordA']);
	$adminC->modifieradmin($admin,$_POST['idA']);
	echo $_POST['idA'];
	header('Location: afficheradmin.php');
}
?>
</body>
</HTMl>

